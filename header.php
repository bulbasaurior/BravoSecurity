    <meta name="author" content="DavidRodriguez">
    <meta name="keywords" content="seguridad en Morelia, blindaje de vehiculos, logistica para eventos, traslado seguro" />
    <meta name="description" content="Bravo Servicios Especiales de Seguridad Privada, somos una empresa 100% mexicana y con más de diez años de experiencia en cada rama que involucre la seguridad de nuestros clientes">
    <meta name="robots" content="index, follow">
    <!-- Metas Facebook -->
    <meta property="og:url"  content="http://www.bravoseguridad.com/" />
    <meta property="og:title" content="Bravo Servicios Especiales de Seguridad Privada" />
    <meta property="og:description" content="Bravo Servicios Especiales de Seguridad Privada, somos una empresa 100% mexicana y con más de diez años de experiencia en cada rama que involucre la seguridad de nuestros clientes    " />
    <meta property="og:image" content="http://www.bravoseguridad.com/images/logo.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
    
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">


    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header_sticky home">
    <div class="boxed">
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>    
        <!-- Wrap-slide -->
        <div class="wrap-slider">

            <!-- Header -->            
            <header id="header" class="header clearfix"> 
                <div class="header-wrap clearfix">
                    <div id="logo" class="logo">
                        <a href="index.php" rel="home">
                            <img src="images/logo.png" alt="image">
                        </a>
                    </div><!-- /.logo -->

                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->

                        <nav id="mainnav" class="mainnav">
                            <ul class="menu"> 
                                <li <?php if($active == "principal") echo "class='home'" ?> >
                                    <a href="index.php">Principal</a>
                                </li>                                                          
                                <li <?php if($active == "servicios") echo "class='home'" ?> ><a href="services.php">Servicios</a>
                                    <ul class="submenu">
                                        <li><a href="serv1.php">Evaluación y Asesoría</a></li>
                                        <li><a href="serv2.php">Seguridad a Instalaciones</a></li>
                                        <li><a href="serv3.php">Seguridad Personal</a></li>
                                        <li><a href="serv4.php">Seguridad Electrónica y Física</a></li>
                                        <li><a href="serv5.php">Capacitación y Adiestramiento</a></li>
                                        <li><a href="serv6.php">Seguridad a Eventos</a></li>
                                        <li><a href="serv7.php">Logística de Eventos</a></li>
                                        <li><a href="serv8.php">Traslado Seguro</a></li>
                                        <li><a href="serv9.php">Blindado de Vehículos</a></li>
                                    </ul><!-- /.submenu -->
                                </li>                                 
                                <li <?php if($active == "nosotros") echo "class='home'" ?> ><a href="about.php">Nosotros</a></li>                           
                                <li <?php if($active == "contacto") echo "class='home'" ?> ><a href="contact.php">Contacto</a></li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->                                     
                </div><!-- /.header-wrap --> 
            </header><!-- /.header -->