<!DOCTYPE html>
    <html lang="pt-br">
            <head>
                <meta charset="utf-8">

                <?php
                    $titulo = "B Plus Dev - Pack Planhilas de Excel";
                    global $tituloPagina;
                    if($tituloPagina != ''){
                        $titulo .= ' - ' .$tituloPagina;
                    }
                ?>
                <!-- TITLE -->
                <title><?php echo $titulo ?></title>
                
                <!-- META TAGS -->
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Nossa meta é ajudar empresas a expandirem os seus negócios através de sites que vendem, geram valores aos seus negócios!" />
                <meta name="keywords" content="Criação de sites, criar site, criar loja virtual, criar landing page, criar site profissional, criar site institucional, gerenciamento de redes sociais, criação de artes para feed, criação de logos">
                <meta name="author" content="Aricelio Moura - B Plus Dev">
                <link rel="canonical" href="https://bplus.dev.br/" />
                <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.png">
                <meta property="og:locale" content="pt_BR" />
                <meta property="og:type" content="article" />
                <meta property="og:title" content="B Plus Dev - Criação de Sites" />
                <meta property="og:description" content="Nossa meta é ajudar empresas a expandirem os seus negócios através de sites que vendem, geram valores aos seus negócios!" />
                <meta property="og:url" content="https://bplus.dev.br/" />
                <meta property="og:site_name" content="B Plus Dev" />
                <meta property="article:publisher" content="https://www.facebook.com/agenciabplusdev" />
                <meta property="og:image" content="https://www.bplus.dev.br/bplusdev.png" />
                <!-- Links -->
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/font-awesome.min.css">
                <link rel="stylesheet" href="css/magnific-popup.css">

                <link rel="stylesheet" href="css/owl.theme.css">
                <link rel="stylesheet" href="css/owl.carousel.css">

                <!-- MAIN CSS -->
                <link rel="stylesheet" href="css/myStyles.css">
            </head>

        <body>
            
            <!-- PRE LOADER -->
            <div class="preloader">
                <div class="spinner">
                    <span class="sk-inner-circle"></span>
                </div>
            </div>

            <!-- MENU -->
            <div class="navbar custom-navbar navbar-fixed-top" role="navigation">
                <div class="container">

                    <!-- NAVBAR HEADER -->
                    <div class="navbar-header">
                            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon icon-bar"></span>
                                <span class="icon icon-bar"></span>
                                <span class="icon icon-bar"></span>
                            </button>
                            <!-- lOGO -->
                            <a href="https://www.bplus.dev.br/" class="navbar-brand"> 
                                <img style="width: 70px; margin-top: -12px;" src="images/logo/logo-menu.png" alt="logo-bplus"> 
                            </a>
                    </div>

                    <!-- MENU LINKS -->
                    <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#home" class="smoothScroll">Início</a></li>
                                <!-- <li><a href="pages/cursos.php" class="smoothScroll">Cursos</a></li> -->
                                <li><a href="#orcam" class="smoothScroll">Contato</a></li>
                            </ul>
                    </div>
                    
                </div>
            </div>