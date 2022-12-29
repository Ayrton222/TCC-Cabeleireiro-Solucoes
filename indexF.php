<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true ))
    {
        
        header('Location: loginT.html');
    }
    $logado = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css"> 
    <link rel="stylesheet"  href="./css/slick.css"/>

</head>
<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="./img/aaa.png"></img>
                </div>

                
                <div class="entrar">
                    <button class="sair"><a href="entrar.html">Sair</a></button>
                    
                    
                
                </div>
               
             </div>
             <?php
               echo "<span>Seja bem vindo $logado</span>"

               ?>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Pages</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="login_comentario.php">Postagens</a></li>
                </ul>
            </div>
            <div class="busca">
                <input  placeholder="Search Something" type="text" />

            </div>
        </div>
    </main>
    <div class="col-100">
        <div class="slider-principal">
            <img src="./img/banner2.png">
            <img src="./img/banner3.png">
            <img src="./img/banner4.png">
          </div>
    </div>
    <div class="col-100 ">
        <div class="content texto-destaque">
            <h1> <strong>Cabeleireiro Soluções </strong></h1>
            <p>Problemas para encontrar o Cabeleireiro certo ou o salão de beleza em sua regiao? <br>
                Ou esta em viagem e gostaria de encontrar um bom especialista em seu destino? <br>
                Podemos te ajudar de forma pratica e rapida.</p>

                <div class="col-3 bloco-texto">
                    <img src="./img/a2.png">
                    <h3>
                        <b>
                        Cabeleireiro(as)
                    </b>
                    </h3>
                    <p>
                        Ajudamos você a encontrar Cabeleireiros e Cabeleireiras proximos a você e da sua região 
                    </p>

                    <a href="./cabeleireira.html" class="btno btn__outline"><i class=" bx bxl-whatsapp"></i>Saiba mais</a>
                </div>
                <div class="col-3 bloco-texto" style="margin-top: 6em;">
                    <img src="./img/a1.png">
                    <h3>
                        <b>
                        Cabeleireiro Soluções
                    </b>
                    </h3>
                    <p>
                        Ajudamos você a procurar profissionais e especialista adequados e de qualidade para você onde quer que voce
                        esteja
                    </p>
                </div>
                <div class="col-3 bloco-texto">
                    <img src="./img/a3.png">
                    <h3>
                        <b>
                        Barbearias
                    </b>
                    </h3>
                    <p>
                        Ajudamos você a encontrar Barbearias proximos a voce e da sua regiao
                    </p>

                    <a href="./cabeleireiro.html" class="btno btn__outline"><i class=" bx bxl-whatsapp"></i>Saiba mais</a>
                </div>
        </div>
    </div>
    
    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="img/aaaa.png" />
            </div>
            <div class="col-4">
                <img alt="logo" title="logo" src="img/aaaa.png" />
            </div>
            <div class="col-4">
                <br />
                <img alt="logo" title="logo" src="img/aaaa.png" />
            </div>
            <div class="col-4">
                <img alt="Puma" title="Puma" src="img/aaaa.png" />
            </div>
        </div>
    </div>
    <footer>
        <div class="col-100 footer">
            <div class="content">
                <div class="col-4">
                    <h3><b>Populr Post</b></h3>
                    <p>Lorem Ipsum is simply dummy
                        text of the printing.</p>
                    <p class="clock">25-September 2021<p>
                            <p>Lorem Ipsum is simply dummy
                                text of the printing.</p>
                            <p class="clock">25-September 2021<p>
                </div>
                <div class="col-4">
                    <h3><b>Tags</b></h3>
                    <p>apps blog blogroll christmas cms coda concert daily design develop dialog drinks envato food fun
                        gallery gift holiday icon illustration ipad iphone journal jquery label link marketing mobile
                        motion music photo profession quotation recipes show sound strategy tv typography video</p>
                </div>
                <div class="col-4">
                    <h3><b>A little about us</b></h3>
                    <p>
                        Somos uma companhia, que tem como meta e foco ajudar o pessoal da area de estestica e beleza, que desejam dar um UP 
                        em seu visual e sua carreira,  tanto trabalhador quanto consumidor 
                    </p>
                </div>
                <div class="col-4">
                    <h3><b>Get in touch</b></h3>
                    
                    <p class="local">São Paulo, SP<p>
                            <p class="emailico">email@email.com<p>
                                    <p class="telefoneico">890-09880-45590<p>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-100 footer-2">
        <div class="content">

            <p>
            Feito com 🤎 por Ayrton
            </p>

            <div class="redes-sociais">
                    <ul>
                        <li><a href=""><img src="./img/rss1.png"></a></li>
                        <li><a href=""><img src="./img/facebook1.png"></a></li>
                        <li><a href=""><img src="./img/twitter1.png"></a></li>
                        
                        
                    </ul>
                </div>

        </div>
    </div>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery-migrate.js"></script>
<script type="text/javascript" src="./js/slick.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>


</body>
</html>