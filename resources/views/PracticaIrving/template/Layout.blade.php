<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practica Introduccion a Laravel</title>
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
   <link href="css/ionicons.min.css" rel="stylesheet">
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link href="css/animate.css" rel="stylesheet">
</head>

<body class="box-layout">

   <!-- Page Loader -->
   <div class="page-loader">
      <div class="loader">
         <span class="cssload-loading"></span>
      </div>
   </div>
   <!-- End Page Loader -->
   <div class="inner-conterner">
      <!-- inner-conterner -->
      <header class="site-header">
         <div class="header-inner">
            <!-- navigation panel -->
            <div class="container">
               <div class="row">
                  <div class="header-table col-md-12">
                     <div class="brand">
                        <a href="index.html">
                           Blog Personal
                        </a>
                     </div>
                     <nav id="nav-wrap" class="main-nav">
                        <div id="mobnav-btn"> </div>
                        <ul class="sf-menu">
                           <li class="current">
                              <a href="{{Route('Inicio')}}">Inicio</a>
                           </li>
                           <li>
                              <a href="{{Route('Desarrollo')}}">Desarrollo</a>                             
                           </li>
                           <li>
                              <a href="{{Route('Fin')}}">Fin</a>
                           </li>
                           
                           <li class="menu-search-bar">
                              <a id="search-label"><i class="ion-search"></i></a>
                              <form class="search-bar" id="searchform">
                                 <input type="text" placeholder="Search..." name="s">
                              </form>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- End navigation panel -->
            </div>
            <!-- End navigation panel -->
         </div>
      </header>
   


        
      <!-- End Slider -->
      <!-- About Section -->
      <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">@yield('TituloInicio') @yield('TituloDesarrollo') @yield('TituloFin')</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-flame-outline"></i></div>
                  <p class="title-un-des">@yield('DescripcionIni') @yield('DescripcionDes') @yield('DescripcionFin') </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp">
                     @yield('Inicio') @yield('Desarrollo') @yield('Fin')
                     <div class="service-info">
                        <h5>@yield('TituloIzquierdaIni') @yield('TituloIzquierda') @yield('TituloIzquierdaFin')</h5>
                        <div class="desc">
                            <p>@yield('DescripcionIzquierdaIni') @yield('DescripcionIzquierda') @yield('DescripcionIzquierdaFin')</p>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp" data-wow-delay=".2s">
                     @yield('Inicio1') @yield('Desarrollo1') @yield('Fin1')
                     <div class="service-info">
                        <h5>@yield('TituloMedioIni') @yield('TituloMedio') @yield('TituloMedioFin')</h5>
                        <div class="desc">
                            <p>@yield('DescripcionMedioIni') @yield('DescripcionMedio') @yield('DescripcionMedioFin')</p>
                           
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                     @yield('Inicio2') @yield('Desarrollo2') @yield('Fin2')
                     <div class="service-info">
                        <h5>@yield('TituloDerechaIni') @yield('TituloDerecha') @yield('TituloDerechaFin')</h5>
                        <div class="desc">
                            <p>@yield('DescripcionDerechaIni') @yield('DescripcionDerecha') @yield('DescripcionDerechaFin')</p>
                           
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
            </div>
         </div>
      </div>
      <!-- End About Section -->
      <!-- Story Section -->
     

      
      <!-- End Fact box Section -->
      <!-- Footer area -->
      <div class="footer-area-container">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="footer-widget">
                    
                     <p></p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget widget_nav_menu">
                     <h4 class="footer-widget-title">Ponte en Contacto</h4>
                     <p></p>
                     <div> <i class="ion-ios-location-outline"></i> Monte Caucaso, Jardines de Morelos Ecatepec, Ecatepec, Mexico
                        <br>
                        <i class="ion-ios-telephone-outline"></i> 55-30-79-87-25
                        <br>
                        <i class="ion-paper-airplane"></i> <a href="first.last@email.com"> irvingalberto09@gmail.com</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget widget_nav_menu">
                     <h4 class="footer-widget-title">LINKS</h4>
                     <ul>
                        <li class="menu-item"><a href="#"> Brand Creation  </a></li>
                        <li class="menu-item"><a href="#"> Press inquiries</a></li>
                        <li class="menu-item"><a href="#"> Corporate Identity </a></li>
                        <li class="menu-item"><a href="#"> Company Analysis </a></li>
                        <li class="menu-item"><a href="#"> Creative homepage </a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget">
                     <h4 class="footer-widget-title">Flickr stream</h4>
                     <ul id="cbox" class="popup-gallery flickr-thumbs"></ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer area -->
      <!-- Footer -->
      <div class="footer-holder">
         <div class="container">
            <footer class="site-footer">
               <div class="row">
                  <div class="col-md-6">
                     <p>© Copyright 2022 | <a href="http://templatestock.co" target="_blank"></a></p>
                  </div>
                  <div class="col-md-6">
                     <ul class="footer-nav">
                        <li><a href="#">Soporte</a></li>
                        <li><a href="#">Soy Irving el Crack</a></li>
                        <li><a href="#">Terminos</a></li>
                        <li><a href="#">Privacidad</a></li>
                     </ul>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- End Footer -->
   </div>
   <!-- End inner-conterner -->
   <!-- ================================================== -->
   <!-- Placed js files at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/superfish.js"></script>
   <script src="js/jquery.easing.js"></script>
   <script src="js/wow.js"></script>
   <script src="js/jquery.isotope.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/jflickrfeed.min.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/jquery.fractionslider.min.js"></script>
   <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
   <script type="text/javascript" src="js/SmoothScroll.js"></script>
   <script src="js/main.js"></script>
</body>
</html>