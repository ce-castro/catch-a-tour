<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/Ionicons/ionicons.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <link rel="stylesheet" href="{{ asset('css/cat.css') }}">
    @yield('css')

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TQLGSSZ');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQLGSSZ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">LOG IN</a></li>
                    <li style="padding-top: 6px">|</li>
                    <li><a href="#">SIGN UP</a></li>
                </ul>

                <div class="navbar-right" style="padding-top: 7px">
                    <a href="#" title="Search">
                        <span class="fa-stack">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-search fa-stack-1x"></i>
                        </span>
                    </a>
                    <a href="#" title="WhatsApp"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
                    <a href="#" title="Visit our Facebook page">
                        <span class="fa-stack">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x"></i>
                        </span>
                    </a>
                    <a href="#" title="Send us an email">
                        <span class="fa-stack">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-envelope-o fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="" class="form-control" id="search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div id="main">
        <div class="container" >
            <div class="row">
                <div class="col-md-12 text-center" id="top-menu">
                    <div id="menu-desktop">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#" title="Home">Home</a></li>
                            <li>|</li>
                            <li><a href="#" title="Catch a Tour">Catch a tour</a></li>
                            <li>|</li>
                            <li><a href="#" title="Destinations">Destinations</a></li>
                            <li>|</li>
                            <li><a href="#" title="Services">Services</a></li>
                            <li>|</li>
                            <li><a href="#" title="Gallery">Gallery</a></li>
                            <li>|</li>
                            <li><a href="#" title="Reviews">Reviews</a></li>
                            <li>|</li>
                            <li><a href="#" title="Contact us">Contact us</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div class="container-fluid" id="div-pre-logo">
            <div class="container">
                <div class="row" >
                    <div class="col-md-12 text-center" id="div-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Catch a Tour" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <div class="container">
        {{--@yield('content')--}}
    </div>
    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row" style="display: flex">
                    <div class="col-md-3" style="position: relative">
                        <a href="#" title="Mission" style="position: absolute; bottom: 0">CATCH A TOUR &copy; {{ date('Y') }}</a><br>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-3">
                            <span>Catch a Tour</span><br>
                            <a href="#" title="About Us">About Us</a><br>
                            <a href="#" title="Vision">Vision</a><br>
                            <a href="#" title="Mission">Mission</a><br>
                            <a href="#" title="Our Experts">Our Experts</a>
                        </div>
                        <div class="col-md-3">
                            <span>Destinations</span><br>
                            <a href="#" title="Central">Central America</a><br>
                            <a href="#" title="North">North America</a><br>
                            <a href="#" title="South America">South America</a><br>
                            <a href="#" title="Caribbean">Caribbean</a>
                        </div>
                        <div class="col-md-3">
                            <span>Services</span><br>
                            <a href="#" title="Private Tours">Private Tours</a><br>
                            <a href="#" title="Public Tours">Public Tours</a><br>
                            <a href="#" title="Accommodation">Accommodation</a><br>
                            <a href="#" title="Transport">Transport</a>
                        </div>
                        <div class="col-md-3">
                            <span>Gallery</span><br>
                            <a href="#" title="Reviews">Reviews</a><br>
                            <a href="#" title="Contact">Contact</a><br>
                        </div>
                    </div>
                    <div class="col-md-3" id="newsletter">
                        <div style="position: absolute; top: 20%;">
                            Don't miss our deals and offers <br>
                            <input type="text" placeholder="e-mail address" style="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/cat.js') }}"></script>
    @yield('js')
    @yield('scripts')
</body>
</html>