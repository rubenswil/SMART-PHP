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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <!-- toastr -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
        <!-- daatable -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">

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
                            

                            @guest
                                <li class="quotes"><a href="{{ route('login') }}">Login</a></li>
                                <li class="quotes"><a href="{{ route('register') }}">Registrate</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
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
        <br>
        <br>
        <br>


        <div class="consultation-form section-spacing">
            <div class="container">
                @yield('content')
            </div>
            <!-- /.container -->
        </div>

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

        <!-- Toastr -->
        <script src='{{ asset('vendor/toastr/toastr.min.js') }}'></script>

        <!-- Datatable -->
        <script src='{{ asset('vendor/datatable/jquery.dataTables.min.js') }}'></script>
        
        <script>
          @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
          @endif
        </script>
        <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    </div> <!-- /.main-page-wrapper -->    
</body>
</html>
