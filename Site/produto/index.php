<?php
    session_start();
    require_once '../class/produto.php';
    $produto = new Produto();
    $bolo = $produto->getCake($_GET['id']);

    if ($bolo == null)
    {
        echo"<script language='javascript' type='text/javascript'>alert('Produto não encontrado');window.location.href='../pesquisa/index.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/produto.css">
    <link rel="icon" type="image/png" href="../imagens/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Produto </title>
</head>

<body>
    <header>
        <div id="caixao">
            <div class="conteudoHeader">
                <a href="../index.php"><img src="../imagens/logay.png" alt="logo escrito senhor bolo" width="258" height="50"></a>
                
                <div class='searchHolder'>
                        <input type="text" id="searchbig" placeholder="Digite para pesquisar" width="522" height="56" />
                        <button id="enterinvisible" onclick="myFunction();">
                        <img src="../imagens/lupa.png" alt="lupa de pesquisa">
                        </button>
                    </div>    
                    <script>
                        var input = document.getElementById("searchbig");
                            input.addEventListener("keyup", function(event) {
                                if (event.keyCode === 13) {
                                    event.preventDefault();
                                    document.getElementById("enterinvisible").click();
                                }
                        });

                        function myFunction() {
                            window.location.href = "../pesquisa/index.php?s=" + document.getElementById('searchbig').value;
                        }
                    </script>

                <?php 
                if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                ?>
                <a href="../perfil/index.php" class="linkUsuario">
                    <div class="perfilUsuario">
                        <?php echo("<img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/usuario/".$_SESSION["photo"]."\" alt=\"Foto de perfil do usuário\" />"); ?>
                        <h4> <?php echo $_SESSION['name']; ?> <br> <span> Ver perfil </span></h4>
                    </div>
                </a>
                <a href="../carrinho/index.php" class="linkCarrinho">
                    <div class="carrinhoCompras">
                        <span class="material-icons md-30">
                            shopping_cart
                        </span>
                    </div>
                </a>
                <?php 
                }else{
                    echo("<a href=\"../login/index.php\">
                        <button style=\"
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 160px;
                        height: 46px;
                        background-color: #0BBAB3;
                        border: none;
                        font-family: 'Raleway', sans-serif;
                        font-weight: bold;
                        font-size: 20px;
                        color:#fff;
                        border-radius: 13px;\">
                        Fazer Login
                        </button>
                        </a> 

                        <a href=\"../cadastro/index.php\">
                        <button style=\"
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 160px;
                        height: 46px;
                        background-color: #0BBAB3;
                        border: none;
                        font-family: 'Raleway', sans-serif;
                        font-weight: bold;
                        font-size: 20px;
                        color:#fff;
                        border-radius: 13px;\">
                        Fazer cadastro
                        </button>
                        </a> ");
                }
                ?>
            </div>
        </div>
        <div id="caixinha">
            <nav>
                <a href="../pesquisa/index.php">
                    Produtos
                </a>
                <a href="../pedidos/index.php">
                    Meus Pedidos
                </a>
                <a href="../cupons/index.php">
                    Cupons
                </a>
                <a href="../aboutus/index.php">
                    Sobre nós
                </a>
            </nav>
        </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script type="text/javascript">
        $(function () {
            $('.produtos').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                lazyLoad: 'ondemand',
                infinite: true,
                speed: 500,
                slidesToShow: 5, 
                slidesToScroll: 5, 
            }
            );
        })
    </script>
    <main>
        <div class="englobar">
            <div class="imagemProduto">
                <?php
                   echo("<img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/bolos/".$bolo[0]['foto_prod']."\" alt=\"Imagem do produto\" class=\"teste\"/>");
                ?>
            </div>
            <div class="infoProduto">
                    <div class="rowNomePreco">
                        <div class="infoDireita">
                            <h2> <?php echo $bolo[0]['nome_prod'] ?> </h2>
                            <h3> <?php echo $bolo[0]['categoria_prod_fk'] ?> </h3>
                            <p> Descrição padrão do produto, olha que bolo <br> bonito esse, não quer comprar?</p>   
                        </div>    
                        <div class="infoEsquerda">
                        <?php 
                                $teste = explode('$', $bolo[0]['preco_catprod']);
                                $testeAux = explode('.', $teste[1]);
                                echo "<h3>R$ <span>".$testeAux[0]."</span></h3>"
                            ?>
                        </div>   
                    </div>    
                    <script type="text/javascript">e
                                function funcSub()
                                {
                                    var qtde;
                                    qtde = parseInt(document.getElementById("qtd").value);
                                    if(qtde > 1){
                                        qtde = qtde - 1;
                                        document.getElementById("qtd").value = qtde;
                                        document.getElementById("qtde").value = qtde;
                                    }
                                }
                                function funcAdd()
                                {
                                    var qtde;
                                    qtde = parseInt(document.getElementById("qtd").value);
                                    qtde = qtde + 1;
                                    document.getElementById("qtd").value = qtde;
                                    document.getElementById("qtde").value = qtde;
                                }
                    </script>
                    <div class="rowQtdeBotao">
                        <div class="widgetQtde">
                            <button class="bot" onClick="funcSub();">
                                -
                            </button>    
                            <input type="text" name="qtd" value="1" id="qtd" readonly>
                            <button class="bot" onClick="funcAdd();">
                                +
                            </button>  
                        </div>    
                        <form action="adicionar.php?id=<?php echo($_GET['id']);?>" method="post">
                                <input type="hidden" name="qtd" value="1" id="qtde">
                                <input type="submit" name="adicionar" class="btnAddCarrinho" value="Adicionar ao carrinho">
                         </form>
                    </div>    
            </div>    
        </div>
        <div class="recomendados">
            <h2>
                Bolos recomendados
            </h2>
        
            <div class="produtos">
                <?php
                        $teste = new Produto();
                        $bolo = $teste->listProduct();
                        for($i = 0; $i < sizeof($bolo); $i++){
                            echo (" <a href=\"/site/produto/index.php?id=".$bolo[$i]["id_prod"]."\"> 
                                    <div class=\"produto\">
                                        <div class=\"fundoIMGProduto\">
                                            <img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/bolos/".$bolo[$i]["foto_prod"]."\" alt=\"Imagem do produto\" />
                                        </div>   
                                        <div class=\"textoProduto\">
                                            <h4>".$bolo[$i]["nome_prod"]."</h4>
                                            <h5>".$bolo[$i]["categoria_prod_fk"]."</h5>
                                            <h4> R".$bolo[$i]["preco_catprod"]."</h4>
                                        </div>    
                                    </div>  
                                </a>");
                        }
                ?>
            </div>
        </div>

    </main>
    <footer>
        <div class="tudinho">
            <div>
                <a href="../home/index.php">
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