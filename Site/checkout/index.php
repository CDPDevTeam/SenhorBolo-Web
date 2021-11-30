<?php
session_start();
require_once '../class/perfil.php';

$totalCarrinho = 0;

foreach($_SESSION['carrinho'] as $bolo){
    $teste = explode('$', $bolo['preco']);
    $testeAux = explode('.', $teste[1]);

    $valor = (int)$testeAux[0];
    $totalCarrinho += $valor * $bolo['qtd'];
}

$totalFrete = $totalCarrinho + 10;

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
    <link rel="stylesheet" href="../css/checkout.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="icon" type="image/png" href="../imagens/favicon.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Checkout </title>
    <script type="text/javascript">
		function mirrorInput(source, dest) {
			var destination = document.getElementById(dest);
			destination.innerHTML = source.value;
		}
	</script>
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
        <div class="mito" style="display: flex; flex-direction: row; justify-content: space-between; width: 400px; margin-bottom: 15px;"> 
            <img class="img" src="../imagens/ic_view_list_24px.png" style="width: 33px; height: 29px; margin-top: 10px;">
            <h2 style="margin: 0; color:#434343;"> Dados da Compra </h2>
        </div>
        <div class="englobar">
            <div class="td"> 
                <div class="divAzul" style="display: flex; flex-direction: row; padding-left: 45px;">
                <img class="img" src="../imagens/ic_edit_location_24px.png" style="width:27px; height:30px;">
                    <p style="font-size: 25px;">
                    Endereço de entrega
                    <p>
                </div>
                <div class="dados">
                    <?php
                        
                        $user = new Perfil();
                        $endereco = $user->getAdressDois($_SESSION['id']);
                        
                        for($i = 0; $i < sizeof($endereco); $i++){
                            echo(" 
                                 <p>" .
                                     $endereco[$i]["rua"] . ", " . $endereco[$i]["numero"] .
                                 "</p>
                    
                                 <p>" .
                                     $endereco[$i]["complemento"] .
                                 "</p>
                    
                                 <p>" .
                                     $endereco[$i]["bairro"] .
                                 "</p>
                    
                                 <p>" .
                                     $endereco[$i]["cep"] . 
                                "</p>
                            ");
                        }
                            ?>
                    <!-- <p>
                        Vale do Cariri, 276
                    </p>
                    
                    <p>
                        Vila Nova Mazzei
                    </p>
                    
                    <p>
                        São Paulo - SP
                    </p>
                    
                    <p>
                        02013-001
                    </p>-->
                    
                    <a href="../rastreio/index.php">
                        <button>
                            <p>
                                Alterar endereço
                            </p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="td"> 
                <div class="divAzul" style="display: flex; flex-direction: row; padding-left: 85px;">
                <img class="img" src="../imagens/ic_local_grocery_store_24px.png">
                <p style="font-size: 25px;">
                    Itens da compra
                    <p>
                </div>
                <div class="dados">
                    <p>
                        <?php 
                        
                        $CartCount = count($_SESSION['carrinho']);
                        print ($CartCount);

                        ?> item(s) adicionado(s)
                    </p>
                    
                    <p>
                    Subtotal:  R$<?php echo(string)$totalCarrinho?>,00
                    </p>
                    
                    <p>
                        Frete: R$10,00
                    </p>
                    
                    <p>
                        Total:  R$<?php echo(string)$totalFrete?>,00
                    </p>
                    
                    <a href="../carrinho/index.php">
                        
                        <button>
                            <p>
                                Ver carrinho
                            </p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="mito" style="display: flex; flex-direction: row; justify-content: space-between; width: 500px; margin-bottom: 15px; margin-top: 15px;"> 
            <img class="img" src="../imagens/ic_payment_24px.png" style="width: 33px; height: 29px; margin-top: 11px;">
            <h2 style="margin: 0; color:#434343;"> Método de pagamento </h2>
        </div>
                <div class="adicionarCartao">
                    <div class="cartaoContainer">
                        <div class="cartaoCredito">

                            <div class="cartaoFrente">
                                <div class="bandeiraCartao"></div>
                                <div class="numeroCartao">
                                    <span id="cartaoclonado"></span>
                                </div>
                                <div class="nomeCartao"> <span id="nomebandido"></span> </div>
                                <div class="validadeCartao">
                                    <h6> Válido <br> até </h6>
                                    <h5> <span id="validade"></span> </h5>
                                </div>
                            </div>

                            <div class="cartaoVerso">
                                <div class="faixaPreta"></div>
                                <div class="assinaturaAutorizada">
                                    <div class="bandeiraCartao"></div>
                                    <div>
                                        <h6> Assinatura Autorizada </h6>
                                        <div class="faixaBranca">
                                            <h5> <span id="comandovermelho"></span> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="informacoesCartao">
                        <div>
                            <h4> Número do cartão </h4>
                            <form method="post">
                                <input type="text" onKeyUp="mirrorInput(this, 'cartaoclonado')" class="grande">
                            </form>
                        </div>

                        <div>
                            <h4> Nome do titular </h4>
                            <form method="post">
                                <input type="text" onKeyUp="mirrorInput(this, 'nomebandido')" class="grande">
                            </form>
                        </div>

                        <div class="informacoesCurtas">
                            <div>
                                <h4> Data de validade </h4>
                                <form method="post">
                                    <input type="text" onKeyUp="mirrorInput(this, 'validade')" class="grande">
                                </form>
                            </div>

                            <div>
                                <h4> CVV </h4>
                                <form method="post">
                                    <input type="text" onKeyUp="mirrorInput(this, 'comandovermelho')" class="grande">
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        <a href="../mapa/index.php">
        <button class="finalizar"> Finalizar a compra </button>
            </a>
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