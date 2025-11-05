<!DOCTYPE html>
<html lang="ru">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>AudCat | Основной сайт</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Главная</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">О нас</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Контакты</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/">Версия для слабовидящих</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">AudDesk</h1>
                                <h4 class="color-white">Адаптированный рабочий стол<br> для слабовидящих и незрячих людей</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">AudCat</h2>
                                <h4 class="color-white">Адаптированный каталог сайтов</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/03.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">BrailleKey</h2>
                                <h4 class="color-white">Клавиатура с русской раскладкой,<br> для плоховидящих и незрячих людей</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="content-lg container">
                <!-- Masonry Grid -->
                <div class="masonry-grid row">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-3 sm-margin-b-30">
                        <img class="full-width img-responsive wow fadeInUp" src="img/500x500/01.png" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="margin-b-60">
                            <h3 style="text-align: center;">Марченко Антон</h3>
                            <p>Руководитель проекта / разработчик. Студент 4 курса кафедры «Системы обработки информации и управления»<br>МГТУ им. Н.Э. Баумана</p>
                        </div>
                    </div>

                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-3">                        
                        <img class="full-width img-responsive wow fadeInUp" src="img/500x500/02.png" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="margin-b-60">
                            <h3 style="text-align: center;">Бушуев Роман</h3>
                            <p>3D проектировщик, разработчик. Студент 4 курса кафедры «Систему обработки информации и управления»<br> МГТУ им. Н.Э. Баумана</p>
                        </div>
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-3">
                        <img class="full-width img-responsive wow fadeInUp" src="img/500x500/03.png" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                        <div class="margin-b-60">
                            <h3 style="text-align: center;">Тимошенко Владимир</h3>
                            <p>Креативный директор, тестировщик. Студент 4 курса кафедры «Систему обработки информации и управления»<br>МГТУ им. Н.Э. Баумана </p>
                        </div>
                    </div>

                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-3">
                        <img class="full-width img-responsive wow fadeInUp" src="img/500x500/04.png" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                        <div class="margin-b-60">
                            <h3 style="text-align: center;">Лысов Денис</h3>
                            <p>Web-разработчик. Студент 3 курса "Физико-технологического института" <br>КГУ им. К.Э. Циолковского</p>
                        </div>
                    </div>

                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End About -->

        <!-- Contact -->
        <div id="contact">
            <!-- Contact List -->
            <div class="section-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <!-- Contact List -->
						<h3 style="text-align:center;"><a href="#">Контакты</a></h3>
                        <div class="col-sm-3 sm-margin-b-50" style="text-align:center;">  
                            <p>Марченко Антон Васильевич</p>
							<ul class="list-unstyled contact-list">
								<li><i class="margin-r-10 color-base icon-envelope"></i> mart0n@mail.ru</li>
                            </ul>
							</div>
							<div class="col-sm-3 sm-margin-b-50" style="text-align:center;">
							<p>Бушуев Роман Андреевич</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-envelope"></i> presentman@bk.ru</li>
                            </ul>
							</div>
							<div class="col-sm-3 sm-margin-b-50" style="text-align:center;">
							<p>Тимошенко Владимир Александрович</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-envelope"></i> vovatim1990@gmail.com</li>
                            </ul>
							</div>
							<div class="col-sm-3 sm-margin-b-50" style="text-align:center;">
							<p>Лысов Денис Иванович</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-envelope"></i> dan.lysov2015@yandex.ru</li>
                            </ul>
                        </div>
                        <!-- End Contact List -->
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Contact List -->
            
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-3">
                        <img class="footer-logo" src="img/logo-dark.png" alt="Aitonepage Logo" style="width:70%; text-align:center;">
                    </div>
                    <div class="col-xs-3">
                       <img class="footer-logo" src="img/Logo/BMSTU.png" alt="Aitonepage Logo" style="width:50%; text-align:center;"> 
                    </div>
					<div class="col-xs-3">
                       <img class="footer-logo" src="img/Logo/CGU.jpg" alt="Aitonepage Logo" style="width:50%; text-align:center;"> 
                    </div>
					<div class="col-xs-3">
                       <img class="footer-logo" src="img/Logo/TV.png" alt="Aitonepage Logo" style="width:100%; text-align:center;"> 
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Вверх</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>