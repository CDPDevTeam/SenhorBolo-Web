<?php
session_start();
include "conexao.php";
$sql = "SELECT produto.id_prod,  produto.nome_prod, LOWER(produto.foto_prod) AS foto_prod,
produto.categoria_prod_fk, categoria_produto.preco_catprod 
FROM produto, categoria_produto
WHERE produto.categoria_prod_fk = categoria_produto.nome_catprod";


IF (isset($_GET["s"])){
    $keyword = $_GET["s"];
    IF ($keyword != null)
    {
        $sql = $sql . " AND produto.nome_prod ILIKE '%" . $_GET["s"] . "%' ORDER BY produto.nome_prod";

        /**"WHERE nome_prod LIKE '%" . $_GET["s"] . "%' " . 
        "OR massa_bolo_fk LIKE '%" . $_GET["s"] . "%' " . 
        "OR confeito_bolo_fk LIKE '%" . $_GET["s"] . "%' " .  
        "OR recheio_bolo_fk LIKE '%" . $_GET["s"] . "%' " . 
        "OR cobertura_bolo_fk LIKE '%" . $_GET["s"] . "%' ";**/
    }
}

$resultado = pg_query($bancoCon, $sql);
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/pesquisa.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> Resultado da Pesquisa</title>
    </head>
    <body>
        <header>
            <div id="caixao">
                <div class="conteudoHeader">
                    <a href="../home/index.html"><img src="../imagens/logay.png" alt="logo escrito senhor bolo" width="258" height="50"></a>
                    <form>
                        <input type="text" id="searchbig" placeholder="Digite para pesquisar">
                        <button type="submit" id="enterinvisible" onclick="searchbig()" >
                            <img src="../imagens/lupa.png" alt="lupa de pesquisa">
                        </button>
                    </form>
                    <script>
                    var input = document.getElementById("searchbig");
                        input.addEventListener("keyup", function(event) {
                            if (event.keyCode === 13) {
                                event.preventDefault();
                                document.getElementById("enterinvisible").click();
                            }
                    });
                    function searchbig(){
                        alert (document.getElementById('searchbig').value);
                      /**window.location.href = "http://localhost/site/pesquisa/index.php?s="
                      + document.getElementById('searchbig').value;**/
                    }
                    </script>
                    <a href="../perfil/index.html" class="linkUsuario">
                        <div class="perfilUsuario">
                            <img src="../imagens/Misaka_10032.jpg" alt="Foto de perfil do usuário">
                            <h4> Felipe Ribeiro <br> <span> Ver perfil </span></h4>
                        </div>
                    </a>
                    <a href="../carrinho/index.html" class="linkCarrinho">
                        <div class="carrinhoCompras">
                            <span class="material-icons md-30">
                                shopping_cart
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div id="caixinha">
                <nav>
                    <a href="../pesquisa/index.html">
                        Produtos
                    </a>
                    <a href="../produto/personalizado/index.html">
                        Personalizado
                    </a>
                    <a href="../cupons/index.html">
                        Cupons
                    </a>
                    <a href="../aboutus/index.html">
                        Sobre nós
                    </a>
                </nav>
            </div>
            <a></a>   
        </header>
        <main>
            <div class="tudo">
                <div class="barra" style="min-width:300px">
                    <h2> Filtre sua busca</h2>
                    <p> R$: 00, 00 - 49,90 </p>
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    <ul>
                        Bolos Caseiros
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                    </ul>
                    <ul>
                        Bolos Festivos
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                    </ul>
                    <ul>
                        Bolos em Oferta
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                    </ul>
                    <ul>
                        Mais vendidos
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                        <li>
                            <a style=" text-decoration: none; color: #000;" href="../pesquisa/index.html">Bolo Legal</a>
                        </li>
                    </ul>
                </div>
                <div class="resultado">
                    <h2>
                        <?php 
                            IF (isset($_GET["s"])){
                            $keyword = $_GET["s"];
                            echo ("Resultados da busca por " . $_GET["s"]);};
                        ?>
                    </h2>
                    <div class="produtos" style="flex-wrap: wrap;">
                        <?php
                        while ($row = pg_fetch_assoc($resultado))
                        {
                        echo ("<div class=\"produto\" style= \"margin-bottom:12px;\">" 
                            . "<a style= \"text-decoration: none; color: #000; min-width:200px; max-width:200px;\" 
                                href=\"produto.php?id=" 
                            . $row["id_prod"] 
                            . "\">"
                            .  "<img src=\"https://realsenhorbolo.000webhostapp.com/images/bolos/" . $row["foto_prod"] . "\" alt=\"Foto do produto\" />"
                            .  "<h4>" . $row["nome_prod"] . "</h4>"
                            .  "<p> Preço: " . $row["preco_catprod"] . "</p>"
                            . "</a>"
                            . "</div>");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="tudinho">
                <div>
                    <a href="../home/index.html">
                        <img class="logro" src="../imagens/logay.png" alt="logo escrito senhor bolo">
                    </a>
                    <p class="dev">
                        Desenvolvido pelo grupo CDP Inc.
                    </p>
                </div>
                <div class="textito">
                    <p class="ti">
                        Nos localizamos em:
                    </p>
                    <p>
                        R. Humaitá, 638 - Bela Vista, 
    
                    </p>
                    <p>
                        São Paulo - SP, 01321-010
                    </p>
                </div>
                <div class="textito"> 
                    <p class="ti">
                        Algum problema ou dúvida?
                    </p>
                    <p>
                        +55 11 98736-0701
                    </p>
                    <p>
                        edson.koshikumo@etec.sp.gov.br
                    </p>
                </div>
                <div class="redes">
                    <p>
                        Siga-nos
                    </p>
                    <div>
                        <img src="../imagens/instagram.png" alt="logo do instagram">
                        <img src="../imagens/twitter-logo-7.png" alt="logo do twitter"> 
                    </div>
                </div>
                <div class="app">
                    <p>
                        Baixe Nossos Aplicativos
                    </p>
                    <div class="zap">
                        <img class="aba" src="../imagens/DownloadAndroid.png" alt="Faça o Download do aplicativo no Android">
                        <img class="abb" src="../imagens/appstore.png" alt="Faça o Download do aplicativo na AppStore">
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>