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
    <link rel="stylesheet" href="../css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Senhor Bolo</title>
</head>

<body>
    <header>
        <div id="caixao">
            <div class="conteudoHeader">
                <a href="../home/index.html"><img src="../imagens/logay.png" alt="logo escrito senhor bolo" width="258" height="50"></a>
                
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
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script type="text/javascript">
        $(function () {
            $('.produtos').slick({
                variableHeight: true,
                infinite: true,
                speed: 500,
                slidesToShow: 5, // Quantos produtos vão aparecer
                slidesToScroll: 5, // Quantos produtos vão rolar
            }
            );
            $(".slick-track").css("height", 240);
            $(".slick-track").css("width", 225); // Aqui define o height do div produtos
            $(".slick-track").css("border-radius", 20);
        })
    </script>
    <main>
        <div class="home">
            <div class="txt">
                <h2>O bolo aqui é igual sua vó:
                    pode não estar tão bonito, 
                    mas tá gostoso</h2>
                <form>
                    <input type="text" placeholder="Digite para pesquisar">
                    <button type="submit">
                        <img src="../imagens/lupa.png" alt="lupa de pesquisa">
                    </button>
                </form>
            </div>
            <div class="img">
                <img class="" src="../imagens/bolo-kit-katCROP.png" alt="bolo de kit kat">
            </div>
        </div>
        <div class="conteudoPrincipal">
        <div class="recomendados">
            <h2>
                Os mais vendidos!
            </h2>
            <div class="produtos">
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="imagem">
            <img class="imagem" src="../imagens/anuncio.png" alt="Anúncio para baixar o aplicativo">
        </div>

        <div class="recomendados">
            <h2>
                Ofertas
            </h2>
            <div class="produtos">
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="recomendados">
            <h2>
                Bolos simples
            </h2>
            <div class="produtos">
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
                </div>
                <div class="produto">
                    <a class="teste" href="../produto/index.html">
                    <img src="../imagens/bolor.png" class="teste" alt="Bolo de Chocolate">
                    <h4>
                        Bolo de chocolate
                    </h4>
                    <p>
                        R$: 29,90
                    </p>
                    </a>
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