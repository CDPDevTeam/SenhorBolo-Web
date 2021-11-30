<?php
session_start();

$totalCarrinho = 0;

foreach($_SESSION['carrinho'] as $bolo){
    $teste = explode('$', $bolo['preco']);
    $testeAux = explode('.', $teste[1]);

    $valor = (int)$testeAux[0];
    $totalCarrinho += $valor * $bolo['qtd'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="icon" type="image/png" href="../imagens/favicon.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Carrinho de compras </title>
</head>
<body>
    <header>
        <div id="caixao">
            <div class="conteudoHeader">
                <a href="../home/index.php"><img src="../imagens/logay.png" alt="logo escrito senhor bolo" width="258" height="50"></a>
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
                            window.location.href = "/site/pesquisa/index.php?s=" + document.getElementById('searchbig').value;
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
    <main>
        <div class="tudo">
            <div class="titulol">
                <i class="material-icons" style="font-size: 45px">shopping_cart</i>
                <p>
                    Meu Carrinho
                </p>
            </div>

            <div class="englobar">
                <div class="lista">
                <?php 

                            foreach($_SESSION['carrinho'] as $posicaoArray  => $bolo){
                                echo "<div class=\"baixo\">
                                <div class=\"fundoCiano\">
                                <img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/bolos/".$bolo['imagem']."\" alt=\"bolo de chocolate\" class=\"bolo\">    
                                </div>                            
                                <div>
                                    <p class=\"boloTitulo\">".$bolo['nome']."</p>
                                    <p class=\"boloLegenda\">".$bolo['cat']."</p>
                                </div>
                                <div class=\"quantidadeBolo\">
                                    <h4>
                                        Quantidade
                                    </h4>
                                    <div class=\"qtd\">
                                        <button class=\"bot\">
                                            <p>
                                                -
                                            </p>
                                        </button>
                                        <input class=\"qtd\" type=\"text\" value=\"".$bolo['qtd']."\">
                                        <button class=\"bot\">
                                            <p>
                                                +
                                            </p>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class=\"fino\">
                                        Total
                                    </p>
                                    <p class=\"bold\">R$". $valor*$bolo['qtd'] .".00</p>
                                </div> 
                                <form class=\"btnRemover\"action=\"remover.php?posicao=".$posicaoArray."\" method=\"post\">
                                <input type=\"submit\" class=\"remover\" value=\"\">
                                </form>
                            </div>";
                            //<i class=\"material-icons\" style=\"color:white; position: absolute\">delete</i>
                            }
                        ?>
                </div>
                <div class="dados">
                    <div class="total">
                        <h2>
                            Total do carrinho
                        </h2>
                        <hr>
                        <div class="subtotal">
                            <p>
                                Subtotal
                            </p>
                            <h2>
                                R$<?php echo(string)$totalCarrinho?>,00
                            </h2>
                        </div>
                    </div>
                    <a href="../checkout/endereco.php">
                        <button class="compra">
                            <p>
                                Fechar a Compra
                            </p>
                        </button>
                    </a>
                    </button>
                    <div class="freteCupom">
                        <h3 class="h">
                            Calcule o seu Frete
                        </h3>
                        <div class="input">
                            <input type="text" class="frete">
                            <button class="calcular">
                                <p>
                                    Calcular
                                </p>
                            </button>
                        </div>
                        <br>
                        <a href="../cupons/index.php">
                            <button class="adicionar">
                                Adicionar Cupom
                            </button>
                        </a>
                    </div>
                </div>
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