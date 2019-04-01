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
    <div id="home">
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
        <div class="container" id="next">
            <div class="row">
                <div class="col-md-12 text-center" id="icons">
                    <i class="fa fa-plane fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-ship fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-bus fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-md-12 text-center">What's your next destination?</div>
                <div class="col-md-12 text-center"><a href="" title="Check our most popular tours">Check our most popular tours</a></div>
            </div>
            <div class="row" style="margin-top: 20px" id="destinations">
                <div class="col-md-3">
                    <img src="{{ asset('images/d1.jpg') }}" alt="" class="img-responsive">
                    <div>test</div>
                </div>
                <div class="col-md-3"><img src="{{ asset('images/d2.jpg') }}" alt="" class="img-responsive"></div>
                <div class="col-md-3"><img src="{{ asset('images/d3.jpg') }}" alt="" class="img-responsive"></div>
                <div class="col-md-3"><img src="{{ asset('images/d4.jpg') }}" alt="" class="img-responsive"></div>
            </div>
        </div>
    </div>
    <div class="container">
        {{--@yield('content')--}}
    </div>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/cat.js') }}"></script>
    @yield('js')
    @yield('scripts')
</body>
</html>