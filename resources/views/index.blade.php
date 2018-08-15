<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>SST SMART SOLUTIONS TECNOLOGIES</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
        <div class="main-page-wrapper">

            <!-- ===================================================
        Loading Transition
    ==================================================== -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>



            <!--
    =============================================
        Theme Header One
    ==============================================
    -->
            <header class="header-one">
                <div class="top-header">
                    <div class="container clearfix">
                        <div class="logo float-left"><a href="index.html"><img src="images/logo/logo2.png" alt=""></a></div>
                        <div class="address-wrapper float-right">
                            <ul>
                                <li class="address">
                                    <i class="icon flaticon-placeholder"></i>
                                    <h6>Dirección:</h6>
                                    <p>Av El Dorado # 68C 61, OF204, <br /> Edificio Torre Central Davivienda.</p>
                                </li>
                                <li class="address">
                                    <i class="icon flaticon-multimedia"></i>
                                    <h6>Email: </h6>
                                    <p>soluciones@sstsmart.net</p>
                                </li>
                                
                                @if (Route::has('login'))
                                        @auth
                                            {{-- <a href="{{ url('/home') }}">Home</a> --}}
                                        @else
                                            {{-- <a href="{{ route('login') }}">Login</a> --}}
                                            <li class="quotes"><a href="{{ route('login') }}">Login</a></li>
                                            <li class="quotes"><a href="{{ route('register') }}">Registrate</a></li>                                            
                                        @endauth
                                @endif
                            </ul>
                        </div> <!-- /.address-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.top-header -->

                <div class="theme-menu-wrapper">
                    <div class="container">
                        <div class="bg-wrapper clearfix">
                            <!-- ============== Menu Warpper ================ -->
                            <div class="menu-wrapper float-left">
                                <nav id="mega-menu-holder" class="clearfix">
                                    <ul class="clearfix">
                                        <li class="active">
                                            <a href="#">Inicio</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Inicio</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">PAGES</a>
                                            <ul class="dropdown">
                                                <li><a href="about.html">Acerca de Nosotros</a></li>
                                                <li><a href="team.html">Nuestro Equipo</a></li>
                                                <li><a href="faq.html">Preguntas frecuentes</a></li>
                                                <!--<li><a href="404.html">404</a></li>
                                                                                <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-details.html">Shop details</a></li>
                                        <li>
                                            <a href="#">Third Level menu</a>
                                            <ul>
                                                <li><a href="#">Demo one</a></li>
                                                <li><a href="#">Demo two</a></li>
                                            </ul>
                                        </li>-->
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Service</a>
                                            <ul class="dropdown">
                                                <li><a href="service-v2.html">Servicios</a></li>
                                                <!--
                                        <li><a href="service-v2.html">Service version two</a></li>-->
                                                <li><a href="service-details.html">Detalle de Servicios</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Soluciones</a>
                                            <ul class="dropdown">
                                                <li><a href="project.html">project</a></li>
                                                <li><a href="project-details.html">Project details</a></li>
                                            </ul>
                                        </li>
                                        
                                <li><a href="#">Webinars</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Lista Webinars</a></li>
                                        <li><a href="blog-grid.html"> Grid</a></li>
                                        <li><a href="blog-details.html">Detalle webinars</a></li>
                                   </ul>
                                </li>
                                        <li><a href="contact.html">contactenos</a></li>
                                    </ul>
                                </nav> <!-- /#mega-menu-holder -->
                            </div> <!-- /.menu-wrapper -->

                            <div class="right-widget float-right">
                                <ul>
                                    <li class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="cart-icon">
                                        <a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
                                    </li>
                                    <li class="search-option">
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            <form action="#" class="dropdown-menu">
                                                <input type="text" Placeholder="Enter Your Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- /.right-widget -->
                        </div> <!-- /.bg-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.theme-menu-wrapper -->
            </header> <!-- /.header-one -->
            <!--
    =============================================
        Theme Main Banner
    ==============================================
    -->
            <div id="theme-main-banner" class="banner-one">
                        <div data-src="images/home/Slide-1sst.jpg">
                            <div class="camera_caption">
                                <div class="container">
                                    <p class="wow fadeInUp animated">SST SMART TE GUIA</p>
                                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">CONSULTORES  <br>ESPECIALISTAS  <br> POR <br> LINEAS DE NEGOCIO</h1>
                                    <a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACTENOS</a>
                                </div> <!-- /.container -->
                            </div> <!-- /.camera_caption -->
                        </div>
                        <div data-src="images/home/slide-2sst.jpg">
                            <div class="camera_caption">
                                <div class="container">
                                    <p class="wow fadeInUp animated">SST SMART TE ENTRENA</p>
                                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">PORTAFOLIO <br> DE CURSOS <br> 
                                    VIRTUALES Y  <br> PRESENCIALES </h1>
                                    <a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACTENOS</a>
                                </div> <!-- /.container -->
                            </div> <!-- /.camera_caption -->
                        </div>
                        <div data-src="images/home/slide-3sst.jpg">
                            <div class="camera_caption">
                                <div class="container">
                                    <p class="wow fadeInUp animated">SST SMART TE EQUIPA</p>
                                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s">PROVEEMOS <br> TECNOLOGÍA <br> DE GESTIÒN <br> PARA SU SGSST</h1>
                                    <a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACTENOS</a>
                                </div> <!-- /.container -->
                            </div> <!-- /.camera_caption -->
                        </div>
                    </div> <!-- /#theme-main-banner -->
                    <!--
            =============================================
                Top Feature
            ==============================================
            -->
                    <div class="top-feature section-spacing">
                        <div class="top-features-slide">
                            <div class="item">
                                <div class="main-content" style="background:#fafafa;">
                                    <img src="images/icon/1.png" alt="">
                                    <h4><a href="#">Conocimiento de Clientes</a></h4>
                                    <p>La experiencia de nuestro equipo Interdisciplinario nos ha permitido durante más de 22 años, apoyar la implementación de Sistemas de seguridad y salud en el trabajó acordes con las necesidades  y presupuestos de cada uno de nuestros clientes ofreciendo las mejores  soluciones personalizadas</p>
                                </div> <!-- /.main-content -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="main-content" style="background:#f6f6f6;">
                                    <img src="images/icon/2.png" alt="">
                                    <h4><a href="#">Ideas Innovadoras</a></h4>
                                    <p>La creación de una Red de apoyo a la implementación del  SST compuesta por proveedores , profesionales espercialistas y  clientes que guiados por una metodología  integra conocimiento,  tecnología,  programas de capacitación, nos permite apoyarlo en la de implementación del SG sst con el mejor  costo-beneficio.</p>
                                </div> <!-- /.main-content -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="main-content" style="background:#efefef;">
                                    <img src="images/icon/3.png" alt="">
                                    <h4><a href="#">Liderazgo</a></h4>
                                    <p>La formación calificada de más de 4000 profesionales especializados en SST nos convierte en referentes del mercado participando  en mesas técnicas para la definición normativa. Permitiéndonos ofrecer el mejor apoyo en la adopción  del SST y en la generación del conocimiento para su mantenimiento en el tiempo. </p>
                                </div> <!-- /.main-content -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="main-content" style="background:#e9e9e9;">
                                    <img src="images/icon/4.png" alt="">
                                    <h4><a href="#">Objetivos Empresariales</a></h4>
                                    <p>Nuestro principal objetivo es convertir la implementación del SST en un valor estratégico para su conjunto o empresa, protegiendo su patrimonio,  ofreciendo oportunidades de desarrollo profesional en seguridad y salud en el trabajo a nuestros aliados brindando el apoyo de toda nuestra experiencia.</p>
                                </div> <!-- /.main-content -->
                            </div> <!-- /.item -->
                        </div> <!-- /.top-features-slide -->
                    </div> <!-- /.top-feature -->
                    <!--
            =============================================
                About Company
            ==============================================
            -->
                    <div class="about-compnay section-spacing">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <img src="images/home/1sst.jpg" alt="">
                                    <!--iframe width="480" height="311" src="http://www.powtoon.com/embed/gl6xWoUEu9v/" frameborder="0"></!--iframe--></div>
    <div class="col-lg-6 col-12">
        <div class="text">
            <div class="theme-title-one">
                <h2>Acerca de nuestra compañia</h2>
                <p>En SST Smart ofrecemos una plataforma de gestión que le permite acceder a una red de consultores especializados de diferentes disciplinas y a la aplicación de metodologías innovadoras de gestión y formación creadas a partir de nuestras experiencia que le aportarán a la toma de decisiones generadoras de valor a través del diseño; implementación y mejora de su sistema de gestión en seguridad y salud en el trabajo exclusivo según sus necesidades; a un precio justo y alcanzable</p>
            </div> <!-- /.theme-title-one -->
                                    <ul class="mission-goal clearfix">
                                        <li>
                                            <i class="icon flaticon-star"></i>
                                            <h4>Vision</h4>
                                        </li>
                                        <li>
                                            <i class="icon flaticon-medal"></i>
                                            <h4>Missions</h4>
                                        </li>
                                        <li>
                                            <i class="icon flaticon-target"></i>
                                            <h4>Goals</h4>
                                        </li>
                                    </ul> <!-- /.mission-goal -->
                                </div> <!-- /.text -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div> <!-- /.about-compnay -->
                    <!--
            =============================================
                Feature Banner
            ==============================================
            -->
                    <div class="feature-banner section-spacing">
                        <div class="opacity">
                            <div class="container">
                                <h2>Proveemos servicios de consultoria especializada de alta calidad &amp; soluciones innovadoras adecuadas a sus necesidades y presupuestos</h2>
                                <a href="#" class="theme-button-one">Cotizar</a>
                            </div> <!-- /.container -->
                        </div> <!-- /.opacity -->
                    </div> <!-- /.feature-banner -->
                    <!--
            =============================================
                Service Style One
            ==============================================
            -->
                    <div class="service-style-one section-spacing">
                        <div class="container">
                            <div class="theme-title-one">
                                <h2>Nuestros servicios</h2>
                                <p>Nuestra propuesta de servicios esta orientada a proveer servicios de consultoria de alta calidad a precios justos</p>
                            </div> <!-- /.theme-title-one -->
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="single-service">
                                            <div class="img-box"><img src="images/home/3sst.jpg" alt=""></div>
                                            <div class="text">
                                                <h5><a href="service-details.html">Servicios de Consultoria</a></h5>
                                                <p>
                                                    Experiencia en diseño; implementación  y verificación  de su SGSST
                                                </p>
                                                <a href="service-details.html" class="read-more">LEER MAS <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.single-service -->
                                    </div> <!-- /.col- -->
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="single-service">
                                            <div class="img-box"><img src="images/home/4sst.jpg" alt=""></div>
                                            <div class="text">
                                                <h5><a href="service-details.html">Servicios de Auditoria y Control interno</a></h5>
                                                <p>Monitoreo orientado a la Mejora continua del sistema de Gestión y seguridad y salud en el trabajo</p>
                                                <a href="service-details.html" class="read-more">LEER MAS <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.single-service -->
                                    </div> <!-- /.col- -->
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="single-service">
                                            <div class="img-box"><img src="images/home/5sst.jpg" alt=""></div>
                                            <div class="text">
                                                <h5><a href="service-details.html">Herramientas de Gestion</a></h5>
                                                <p>Plataforma tecnológica para monitorear el avance de la gestión de su SGSST</p>
                                                <a href="service-details.html" class="read-more">LEER MAS <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.single-service -->
                                    </div> <!-- /.col- -->
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="single-service">
                                            <div class="img-box"><img src="images/home/6sst.jpg" alt=""></div>
                                            <div class="text">
                                                <h5><a href="service-details.html">Entrenamiento</a></h5>
                                                <p>Ambientes de formación en seguridad y salud en el trabajo para todos los niveles y equipos de trabajo</p>
                                                <a href="service-details.html" class="read-more">LEER MAS <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.single-service -->
                                    </div> <!-- /.col- -->
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="single-service">
                                            <div class="img-box"><img src="images/home/7sst.jpg" alt=""></div>
                                            <div class="text">
                                                <h5><a href="service-details.html">Programas en ergonomia</a></h5>
                                                <p>Diseñamos programas de ergonomia para aumentar la rentabilidad de las empresas</p>
                                                <a href="service-details.html" class="read-more">LEER MAS <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.single-service -->
                                    </div> <!-- /.col- -->
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="single-service">
                                            <div class="img-box"><img src="images/home/8sst.jpg" alt=""></div>
                                            <div class="text">
                                                <h5><a href="service-details.html">Programas de socio.....</a></h5>
                                                <p>The tiny ship today stiller</p>
                                                <a href="service-details.html" class="read-more">LEER MAS <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.single-service -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.row -->
                            </div> <!-- /.wrapper -->
                            <div class="contact-text">
                                <h4>envienos un correo y nos contactaremos con usted para conocer sus necesidades, o llamenos</h4>
                                <h5><a href="#">solucioneso@sstsmart.net</a>  (or)  <a href="#">+57 3002022585</a></h5>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.service-style-one -->
                    <!--
            =====================================================
                Testimonial Slider
            =====================================================
            -->
                    <div class="testimonial-section section-spacing">
                        <div class="overlay">
                            <div class="container">
                                <div class="wrapper">
                                    <div class="bg">
                                        <div class="testimonial-slider">
                                            <div class="item">
                                                <p>“ La profesora Sandra demuestra su pasiòn por brindar conocimiento con una vocaciòn de servicio ”</p>
                                                <div class="name">
                                                    <h6>Shawn Michael</h6>
                                                    <span>Especialista es Salud Y seguridad en el trabajo, Universidad Javeriana.</span>
                                                </div> <!-- /.name -->
                                            </div> <!-- /.item -->
                                            <div class="item">
                                                <p>“ El trabajo de auditoria a Fiscol de altisima calidad ”</p>
                                                <div class="name">
                                                    <h6>Rashed Ka.</h6>
                                                    <span>Director,  Control interno</span>
                                                </div> <!-- /.name -->
                                            </div> <!-- /.item -->
                                            <div class="item">
                                                <p>“El sistema de autoevaluaciòn y diagnostico me ahorro tiempo y costos es la mejor propuesta ”</p>
                                                <div class="name">
                                                    <h6>Pedro Perez</h6>
                                                    <span>admon, Conjunto Residencial San Carlos</span>
                                                </div> <!-- /.name -->
                                            </div> <!-- /.item -->
                                        </div> <!-- /.testimonial-slider -->
                                    </div> <!-- /.bg -->
                                </div> <!-- /.wrapper -->
                            </div> <!-- /.container -->
                        </div> <!-- /.overlay -->
                    </div> <!-- /.testimonial-section -->
                    <!--
            =====================================================
                Our Team
            =====================================================
            -->
                    <div class="our-team section-spacing">
                        <div class="container">
                            <div class="theme-title-one">
                                <h2>Nuestro Equipo</h2>
                                <p>Contamos con una experiencia de 22 años en diferentes àreas del conocimiento</p>
                            </div> <!-- /.theme-title-one -->
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="team-member">
                                            <div class="image-box">
                                                <img src="images/team/1sst.jpg" alt="">
                                                <div class="overlay">
                                                    <div class="hover-content">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                        <p>“Todos tus sueños pueden hacerse realidad si tienes el coraje de perseguirlos” <br>Walt Disney.</p>
                                                    </div> <!-- /.hover-content -->
                                                </div> <!-- /.overlay -->
                                            </div> <!-- /.image-box -->
                                            <div class="text">
                                                <h6>Dr. Carlos Moreno A.</h6>
                                                <span>Fundador, Gerente General</span>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.team-member -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="team-member">
                                            <div class="image-box">
                                                <img src="images/team/2sst.jpg" alt="">
                                                <div class="overlay">
                                                    <div class="hover-content">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                        <p>¨La educaciòn es el arma màs poderosa para cambiar el mundo¨ <br> Nelson Mandela</p>
                                                    </div> <!-- /.hover-content -->
                                                </div> <!-- /.overlay -->
                                            </div> <!-- /.image-box -->
                                            <div class="text">
                                                <h6>Ing. Sandra Ariza U</h6>
                                                <span>Fundadora, Gerente de Conocimiento</span>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.team-member -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="team-member">
                                            <div class="image-box">
                                                <img src="images/team/3sst.jpg" alt="">
                                                <div class="overlay">
                                                    <div class="hover-content">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                        <p>“La creatividad requiere tener el valor de desprenderse de las certezas” <br> Erich Fromm.</p>
                                                    </div> <!-- /.hover-content -->
                                                </div> <!-- /.overlay -->
                                            </div> <!-- /.image-box -->
                                            <div class="text">
                                                <h6>Juan Manuel Moreno A.</h6>
                                                <span>Fundador, Gerente de Innovacion y Desarrollo</span>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.team-member -->
                                    </div> <!-- /.col- -->
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="team-member">
                                            <div class="image-box">
                                                <img src="images/team/4sst.jpg" alt="">
                                                <div class="overlay">
                                                    <div class="hover-content">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                        <p>The government they survive as soldiers of fortune.</p>
                                                    </div> <!-- /.hover-content -->
                                                </div> <!-- /.overlay -->
                                            </div> <!-- /.image-box -->
                                            <div class="text">
                                                <h6>Dr Andres</h6>
                                                <span>Lider Ergonomia</span>
                                            </div> <!-- /.text -->
                                        </div> <!-- /.team-member -->
                                    </div> <!-- /.col- -->
                                </div> <!-- /.row -->
                            </div> <!-- /.wrapper -->
                        </div> <!-- /.container -->
                    </div> <!-- /.our-team -->
                    <!--
            =====================================================
                Theme Counter
            =====================================================
            -->
                    <div class="theme-counter section-spacing">
                        <div class="container">
                            <div class="bg">
                                <h6>Nuestra Experiencia</h6>
                                <h2>Algunos hechos de nuestra compañia</h2>

                                <div class="cunter-wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-6">
                                            <div class="single-counter-box">
                                                <div class="number"><span class="timer" data-from="0" data-to="22" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                                                <p>Años de Excelencia</p>
                                            </div> <!-- /.single-counter-box -->
                                        </div>  <!-- /.col- -->
                                        <div class="col-md-3 col-6">
                                            <div class="single-counter-box">
                                                <div class="number"><span class="timer" data-from="0" data-to="900" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                                                <p>Empresas asesoradas</p>
                                            </div> <!-- /.single-counter-box -->
                                        </div>  <!-- /.col- -->
                                        <div class="col-md-3 col-6">
                                            <div class="single-counter-box">
                                                <div class="number"><span class="timer" data-from="0" data-to="4000" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                                                <p>Profesionales Formados</p>
                                            </div> <!-- /.single-counter-box -->
                                        </div>  <!-- /.col- -->
                                        <div class="col-md-3 col-6">
                                            <div class="single-counter-box">
                                                <div class="number"><span class="timer" data-from="0" data-to="13000" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                                                <p>Pacientes atendidos</p>
                                            </div> <!-- /.single-counter-box -->
                                        </div>  <!-- /.col- -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.cunter-wrapper -->
                                <a href="#" class="theme-button-one">Ver casos de éxito</a>
                            </div> <!-- /.bg -->
                        </div> <!-- /.container -->
                    </div> <!-- /.theme-counter -->
                    <!--
            =====================================================
                Free Consultation
            =====================================================
            -->
                    <div class="consultation-form section-spacing">
                        <div class="container">
                            <div class="theme-title-one">
                                <h2>Consultenos</h2>
                                <p>Nuestra red de especialistas esta lista a atenderlo</p>
                            </div> <!-- /.theme-title-one -->
                            <div class="clearfix main-content no-gutters row">
                                <div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
                                <div class="col-xl-6 col-lg-7 col-12">
                                    <div class="form-wrapper">
                                        <form action="#" class="theme-form-one">
                                            <div class="row">
                                                <div class="col-md-6"><input type="text" placeholder="Name *"></div>
                                                <div class="col-md-6"><input type="text" placeholder="Phone *"></div>
                                                <div class="col-md-6"><input type="email" placeholder="Email *"></div>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>Servicio que esta buscando?</option>
                                                        <option>Consultoría</option>
                                                        <option>Auditoría </option>
                                                        <option>Entrenamiento</option>
                                                        <option>Ergonomia</option>
                                                    </select>
                                                </div>
                                                <div class="col-12"><textarea placeholder="Message"></textarea></div>
                                            </div> <!-- /.row -->
                                            <button class="theme-button-one">Consultenos</button>
                                        </form>
                                    </div> <!-- /.form-wrapper -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.main-content -->
                        </div> <!-- /.container -->
                    </div> <!-- /.consultation-form -->
                    <!--
            =====================================================
                Partner Slider
            =====================================================
            -->
                    <div class="partner-section bg-color">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <h6>Nuestros Aliados <br>Aliados</h6>
                                </div>
                                <div class="col-md-9 col-sm-8 col-12">
                                    <div class="partner-slider">
                                        <div class="item"><img src="images/logo/p-1.png" alt=""></div>
                                        <div class="item"><img src="images/logo/p-2.png" alt=""></div>
                                        <div class="item"><img src="images/logo/p-3.png" alt=""></div>
                                        <div class="item"><img src="images/logo/p-4.png" alt=""></div>
                                        <div class="item"><img src="images/logo/p-5.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.partner-section -->
                    <!--
            =====================================================
                Footer
            =====================================================
            -->
                    <footer class="theme-footer-one">
                        <div class="top-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
                                        <h6 class="title">Acerca de nuestras Consultorias</h6>
                                        <p>Contamos con una Red de Consultores especialistas guiados por una metodología orientada a resultados.</p>
                                        <div class="queries"><i class="flaticon-phone-call"></i> Preguntas : <a href="#">(+57) 3002022585</a></div>
                                    </div> <!-- /.about-widget -->
                                    <div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
                                        <h6 class="title">Últimos Webinars</h6>
                                        <ul>
                                            <li class="clearfix">
                                                <img src="images/blog/1sst.jpg" alt="" class="float-left">
                                                <div class="post float-left">
                                                    <a href="blog-details.html">Resoluciòn 1111-2017 màs alla de la norma</a>
                                                    <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Aug 06, 2018</div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="images/blog/2sst.jpg" alt="" class="float-left">
                                                <div class="post float-left">
                                                    <a href="blog-details.html">´Proteja su Patrimonio, y cumpla con la Resolución 1111-2017</a>
                                                    <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Mar 20, 2018</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> <!-- /.footer-recent-post -->
                                    <div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
                                        <h6 class="title">SOLUCIONES</h6>
                                        <ul>
                                            <li><a href="#">SGSST en su Residencia</a></li>
                                            <li><a href="#">Seguridad y salud en el Trabajo valor estratègico para Pymes</a></li>
                                            <li><a href="#">Aumento de la Productividad cuidando la salud de sus trabajadores</a></li>
                                            <li><a href="#">Auditoria del SGSST y mejora continua</a></li>
                                            <li><a href="#">Autoeevaluacion, Diagnostico y Plan de trabajo del SGSST</a></li>
                                            <li><a href="#">Monitoreo y Manteninimiento del SGSST </a></li>
                                        </ul>
                                    </div> <!-- /.footer-list -->
                                    <div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
                                        <h6 class="title">Webinars</h6>
                                        <form action="#">
                                            <input type="text" placeholder="Name *">
                                            <input type="email" placeholder="Email *">
                                            <button class="theme-button-one">Inscribase</button>
                                        </form>
                                    </div>
                                </div> <!-- /.row -->
                            </div> <!-- /.container -->
                        </div> <!-- /.top-footer -->
                        <div class="bottom-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-12"><p>&copy; Copyrights 2018. All Rights Reserved.</p></div>
                                    <div class="col-md-6 col-12">
                                        <ul>
                                            <li><a href="about.html">Acerca de Nosostros</a></li>
                                            <li><a href="service.html">Servicios</a></li>
                                            <li><a href="#">FAQ’s</a></li>
                                            <li><a href="contact.html">Contacto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.bottom-footer -->
                    </footer> <!-- /.theme-footer -->
                    <!-- Scroll Top Button -->
                    <button class="scroll-top tran3s">
                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                    </button>



                    <!-- Optional JavaScript _____________________________  -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <!-- jQuery -->
                    <script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
                    <!-- Popper js -->
                    <script src="{{ asset('vendor/popper.js/popper.min.js') }}"></script>
                    <!-- Bootstrap JS -->
                    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
                    <!-- Camera Slider -->
                    <script src='{{ asset('vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}'></script>
                    <script src='{{ asset('vendor/Camera-master/scripts/jquery.easing.1.3.js') }}'></script>
                    <script src='{{ asset('vendor/Camera-master/scripts/camera.min.js') }}'></script>
                    <!-- menu  -->
                    <script src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
                    <!-- WOW js -->
                    <script src="{{ asset('vendor/WOW-master/dist/wow.min.js') }}"></script>
                    <!-- owl.carousel -->
                    <script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
                    <!-- js count to -->
                    <script src="{{ asset('vendor/jquery.appear.js') }}"></script>
                    <script src="{{ asset('vendor/jquery.countTo.js') }}"></script>
                    <!-- Fancybox -->
                    <script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

                    <!-- Theme js -->
                    <script src="{{ asset('js/theme.js') }}"></script>
                </div> <!-- /.main-page-wrapper -->
</body>
</html>