<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <div id="caixao">
            <a href="../home/index.html"><img src="../imagens/logay.png" alt="Logo escrito Senhor Bolo" width="258" height="50"></a>
            <form>
                <input type="text" placeholder="Digite para pesquisar">
                <button type="submit">
                    <img src="../imagens/lupa.png" alt="lupa de pesquisa">
                </button>
            </form>
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
    <main>
        <div class="login">
            
                <img src="../imagens/logay.png" alt="logo escrito senhor bolo" width="267" height="52">
                <h3>
                    Bem vindo! Faça seu login
                </h3> 
                <form action="login.php" method="post" style="display: flex; flex-direction: column; align-content: center;">
                    <div class="texto" > 

                        <h4>
                            E-mail
                        </h4>
                        <input type="text" name="uname">
                        <h4>
                            Senha
                        </h4>
                            <input type="password" name="password">
                            
                        <br>
                        <a id="resetSenha" href="#">
                            Esqueci a senha
                        </a>
                    </div>
                    <button class="loginbotao" type="submit" style="margin-left:20px;">   
                        <h3>
                            Login
                        </h3>
                    </button>
                </form>
                <a class="naocadastro" href="../cadastro/index.html">
                    Não tenho cadastro
                </a>
            
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