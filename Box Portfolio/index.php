<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pagina Principal</title>
    <link rel="icon" href="img/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background-image: url(https://a-static.besthdwallpaper.com/hermoso-paisaje-blanco-del-invierno-papel-pintado-3554x1999-11229_53.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #fff;
        width: 100%;
        height: 100vh;
        font-family: 'open sans';
        font-size: 16px;
    }
    .box-words-wrapper b{
        color: black;
        font-family: 'Permanent Marker', cursive;
    }
    .table-cell h5{
        color:black;
        font-family: 'Permanent Marker', cursive;
    }
    .NombreFoto{
        color yellow;
    }
</style>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.php"><img src="img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text"></span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">INICIA SESIÓN O REGISTRATE</li>
                <li><a href="signIn.php">Iniciar Sesión</a></li>

                <li class="box-label">NAVEGA POR LA APLICACION</li>
                <li><a href="index.php">Pagina Principal</a></li>
                <li><a href="about.php">Acerca de Mi</a></li>
                <li><a href="services.php">Servicios</a></li>
                <li><a href="contact.php">Contactame</a></li>
            </ul>
        </nav>
        <!-- end nav -->

        <!-- box-intro -->
        <section class="box-intro">
            <div class="table-cell">
                <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">David &nbsp; Garcia &nbsp; Giron.</b>
                        <b>&nbsp;&nbsp;Estudiante &nbsp; de &nbsp; Tecsup.</b>
                    </span>
		        </h1>
                <h5>Estudiante de la Carrera de Programacion en el Instituto TECSUP</h5>
            </div>

            <div class="mouse">
                <div class="scroll"></div>
            </div>
        </section>
        <!-- end box-intro -->
    </div>

    <!-- portfolio div -->
    <div class="portfolio-div">
        <div class="portfolio">
            <div class="no-padding portfolio_container">
                <!-- single work -->
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="#" class="portfolio_item">
                        <img src="https://hdqwalls.com/download/joker-suicide-squad-artwork-hd-eg-2880x1800.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Enemigo de Batman</span>
                                    <em>El Guason</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 ads graphics">
                    <a href="#" class="portfolio_item">
                        <img src="https://wallpaperaccess.com/full/189411.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Criatura muy Tierna</span>
                                    <em>Oso Panda</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-6 col-sm-12 photography">
                    <a href="#" class="portfolio_item">
                        <img src="http://k30.kn3.net/taringa/1/3/E/2/4/D/TuViejaMilf/63E.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Alguien Interezado</span>
                                    <em>El Gato</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 fashion ads">
                    <a href="" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/10/25/01/10250184adbd798cb131bda9e87d9167.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Yo Soy Grout, Yo Soy Grout</span>
                                    <em>Grout</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 graphics ads">
                    <a href="single-project.php" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/39/5c/78/395c78524908931f6ce5c932964f40c6.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>De la Serie Marvel</span>
                                    <em>Capitana Marvel</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-6 col-sm-12 photography">
                    <a href="single-project.php" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/70/ac/95/70ac956e01e4240e4f61d1b58ce01fb4.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>DJ de Electro</span>
                                    <em>Mashmelow</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 graphics ads">
                    <a href="single-project.php" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/52/be/14/52be148edc59d5546419299f15c802f0.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>DJ de Electro</span>
                                    <em>Mashmelow X2</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 graphics ads">
                    <a href="single-project.php" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/6e/17/eb/6e17ebf167e67d2f2f5d9b0127f002da.jpg?b=t" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Anime de una Palta</span>
                                    <em>Palta</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 graphics ads">
                    <a href="single-project.php" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/b7/79/3d/b7793d7ba933f98bc97e7379f7ed2272.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Personaje de Anime</span>
                                    <em>Anime</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 graphics ads">
                    <a href="single-project.php" class="portfolio_item">
                        <img src="https://i.pinimg.com/564x/73/97/e8/7397e81eca9d2baf3775c605b3547ab4.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Hombre que derrota a Cualquiera con un Golpe</span>
                                    <em>Saitama</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->
            </div>
            <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
    </div>
    <!-- end portfolio div -->

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">Creado por DAVID GARCIA GIRON @sagitaforever</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#1" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>