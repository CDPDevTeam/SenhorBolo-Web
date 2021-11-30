<?php
require_once("Sql.php");
	

class Produto
{
	public function getCake($id)
	{
		$sql = new Sql();
		$parametros = array(
			":id" => $id
		);

		IF ($id != null){
            $product = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
                            produto.categoria_prod_fk, categoria_produto.preco_catprod 
                            FROM produto, categoria_produto
                            WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod AND produto.id_prod = :id ORDER BY produto.nome_prod', $parametros);
            return $product;
        }
        else
        {
        	echo"<script language='javascript' type='text/javascript'>alert('Produto não encontrado');window.location.href='../pesquisa/index.php'</script>";
        }
	}

	public function listProduct()
	{
		$sql = new Sql();
		$parametros = array(
			":bolo" => "Bolo personalizado"
		);
		$list = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
                        produto.categoria_prod_fk, categoria_produto.preco_catprod 
                        FROM produto, categoria_produto
                        WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod AND produto.categoria_prod_fk != :bolo ORDER BY random()', $parametros);
		
		return $list;
        
	}

	public function getCakeCategory($categoria)
	{
		$sql = new Sql();
		$parametros = array(
			":categoria" => $categoria
		);
		$list = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
                        produto.categoria_prod_fk, categoria_produto.preco_catprod 
                        FROM produto, categoria_produto
                        WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod AND produto.categoria_prod_fk = :categoria', $parametros);
		
		return $list;
        
	}

	public function search($s)
    {
        $sql = new Sql();
        $parametros = array(
            ":s" => '%'.$s.'%'
        );
        $product = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
        produto.categoria_prod_fk, categoria_produto.preco_catprod 
        FROM produto, categoria_produto
        WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod AND produto.nome_prod ILIKE :s ORDER BY produto.nome_prod', $parametros);
        return $product;
    }


    public function listCart($id)
	{
		$sql = new Sql();
		$parametros = array(
			":id" => $id
		);
        $product = $sql->select('SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
        produto.categoria_prod_fk, categoria_produto.preco_catprod 
        FROM produto, categoria_produto
        WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod AND produto.id_prod = :id', $parametros);
        return $product;
	}
}	
?>