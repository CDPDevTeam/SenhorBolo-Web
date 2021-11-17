<?php
require_once("config.php");
	

class Produto
{
	public function productShow()
	{
		$sql = new Sql();
		$stmt->bindValue(':prod', $_GET['id']);
		$product = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
                            produto.categoria_prod_fk, categoria_produto.preco_catprod 
                            FROM produto, categoria_produto
                            WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod');

		IF (isset($_GET["id"]) && $_GET != ''){
            $keyword = $_GET["id"];
            IF ($keyword != null)
            {
                $product = $product . " AND produto.id_prod =:prod ORDER BY produto.nome_prod";

                $stmt->execute();
            }
        }
	}

	public function showImg()
	{
		$this->productShow();
		while ($row = pg_fetch_assoc($product)){
            echo("<img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/bolos/".$row["foto_prod"]."\" alt=\"Imagem do produto\" />");
        }
	}

	public function showData()
	{	
		$this->productShow();
		while ($row = pg_fetch_assoc($product)){
            echo("<div class=\"nomeBolo\">
                    <h2>" . $row["nome_prod"] . "</h2>"
                                    . "<p>" . $row["categoria_prod_fk"] . "</p>" . "</div>" . "<h3 id=\"preco\">" . $row["preco_catprod"] . "</h3>"
                );
        }
	}

	public function listProduct()
	{
		$sql = new Sql();
		$list = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
                        produto.categoria_prod_fk, categoria_produto.preco_catprod 
                        FROM produto, categoria_produto
                        WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod ORDER BY random()');

		while ($row = pg_fetch_assoc($list))
        {
            echo (" <a href=\"/site/produto/index.php?id=".$row["id_prod"]."\"> 
                    <div class=\"produto\">
                        <div class=\"fundoIMGProduto\">
                            <img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/bolos/".$row["foto_prod"]."\" alt=\"Imagem do produto\" />
                        </div>   
                        <div class=\"textoProduto\">
                            <h4>".$row["nome_prod"]."</h4>
                            <h5>".$row["categoria_prod_fk"]."</h5>
                            <h4> R".$row["preco_catprod"]."</h4>
                        </div>    
                    </div>  
                    </a>");
        }
	}

	public function search()
	{
		$sql = new Sql();
		$stmt->bindValue(':pesquisa', $_GET['s']);

		$search = $sql->select(
		'SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
		produto.categoria_prod_fk, categoria_produto.preco_catprod 
		FROM produto, categoria_produto
		WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod');

		IF (isset($_GET["s"]) && $_GET != ''){
	    $keyword = $_GET["s"];
		    IF ($keyword != null)
		    {
		        $search = $search . ' AND produto.nome_prod ILIKE %:pesquisa% ORDER BY produto.nome_prod';

		        $stmt->execute();

		        $this->showNameSearch();

		        $this->showProducts();
		    }
		}
	}

	public function showNameSearch()
	{
		$this->search();
		IF (isset($_GET["s"])){
        	$keyword = $_GET["s"];
           	echo ("Resultados da busca por " . $_GET["s"]);
        } else {
            echo ("Nossos produtos");
        }
	}

	public function showProducts()
	{
		$this->search();
		while ($row = pg_fetch_assoc($search))
        {
            echo (" <a href=\"/site/produto/index.php?id=".$row["id_prod"]."\"> 
                  <div class=\"produto\">
	                  <div class=\"fundoIMGProduto\">
	                  	<img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/bolos/".$row["foto_prod"]."\" alt=\"Imagem do produto\" />
	                  </div>   
	                  <div class=\"textoProduto\">
		                  <h4>".$row["nome_prod"]."</h4>
		                  <h5>".$row["categoria_prod_fk"]."</h5>
		                  <h4> R".$row["preco_catprod"]."</h4>
	                  </div>    
                  </div>  
                  </a>");
        }
	}
}	
?>