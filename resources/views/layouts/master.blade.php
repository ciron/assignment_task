<!doctype html>
<html class="no-js" lang="en">

<head>
        <!-- title -->
        <title>Assignment of recruitement</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">

        <!-- description -->

        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('User') }}/images/custom/logo.png">
        <link rel="apple-touch-icon" href="{{ asset('User') }}/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('User') }}/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('User') }}/images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/bootstrap.min.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/magnific-popup.css" />

        <!-- bootsnav -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('User') }}/css/responsive.css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- start header -->

        <header>

            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top header-dark background-transparent white-link sticky navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="" title="assignment" class="logo"><img src="{{ asset('User') }}/images/custom/logo.png" data-rjs="{{ asset('User') }}/images/logo@2x.png" class="logo-dark" alt="APBN"><img src="{{ asset('User') }}/images/custom/logo.png" data-rjs="{{ asset('User') }}/images/logo-white@2x.png" alt="APBN 2" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0 pr-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal">
                                <!-- start menu item -->

                                @guest
                                <li class="dropdown simple-dropdown"><a href="#">User</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">

                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                    </ul>
                                </li>


                                @endguest
                                @if (Auth::user())
                                <li class="dropdown simple-dropdown"><a href="#">User</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="nav-item dropdown">


                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" target="_blank" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class=" dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class=" error dropdown-item" style="color:red;" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>


                                    </ul>
                                </li>


                                @endif


                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
       @yield('frontend_content')
        <!-- start footer -->
        <footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom sm-padding-30px-bottom">


            <div class="container">
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top" style="text-align: -webkit-center;">
                    <div class="col-lg-6 col-md-6 text-small  text-center">All rights reserved | copyright © 2021 | Design & Development:: <a href="https://github.com/ciron" target="_blank" >Chironjit Roy</a></div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->


        <script type="text/javascript" src="{{ asset('User') }}/js/modernizr.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/skrollr.min.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/bootsnav.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('User') }}/js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('User') }}/js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="{{ asset('User') }}/js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="{{ asset('User') }}/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('User') }}/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="{{ asset('User') }}/js/classie.js"></script>
        <script type="text/javascript" src="{{ asset('User') }}/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="{{ asset('User') }}/js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="{{ asset('User') }}/js/skill.bars.jquery.js"></script>
        <!-- justified gallery  -->
        <script type="text/javascript" src="{{ asset('User') }}/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="{{ asset('User') }}/js/jquery.easypiechart.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="{{ asset('User') }}/js/retina.min.js"></script>

        <script>
            $( function() {
              $( "#datepicker" ).datepicker();
            } );
            </script>
          <script>
            $( function() {
          $( "#datepickerss" ).datepicker();
        } );
        </script>

    </body>

</html>
