<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>New Years Jar</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{URL::asset('css/mdb.min.css')}}" rel="stylesheet">

    <!-- Personalized styles -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

    <style>
        html,
        body,
        .view {
            height: 100%;
            padding-top: 25px; 
        }

        /* Navigation*/

        .top-nav-collapse {
            background-color: #AA66CC !important;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #2E2E2E;
            }
        }
        /*Intro*/
        
        .view {
            background: url("https://mdbootstrap.com/images/regular/people/img%20(58).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        @media (max-width: 768px) {
            .full-bg-img,
            .view {
                position: relative;
            }
        }
        
        .description {
            padding-top: 25%;
            padding-bottom: 3rem;
            color: #fff
        }
        
        @media (max-width: 992px) {
            .description {
                padding-top: 7rem;
                text-align: center;
            }
            #app-mockup {
                max-height: 400px;
            }
        }
        /*Footer*/
        
        .page-footer {
            background-color: 
        }
    </style>

</head>

<body>
    <!--Navbar-->
    <nav class="secondary-color-dark navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                New Year's Jar
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav smooth-scroll mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#best-features">How it works </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#examples-of-use">Jars</a>
                    </li>
                </ul>
                <!--Display login options if visitor-->
                <ul class="navbar-nav">
                    @if (Auth::guest())                        
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{ url('/register') }}">Register</a>
                        </li>
                    @else
                        <div class="dropdown">
                                <a href="#"  class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                           <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Main layout-->
    <main>
        <div class="container">
                <div class="container">

                @yield('content')
          <!--Mask-->
        <!--/.Mask-->

            </div>
        </div>
    </main>

    <!--Footer: CTA, Social Media, Additional Info & Links-->
    <footer class="page-footer sticky center-on-small-only">
        <!--Social buttons-->
        <div class="social-section wow fadeIn" data-wow-delay="0.3s">
            <ul>
                <li><a href="https://www.facebook.com/mdbootstrap" target="_blank" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
                <li><a href="https://twitter.com/MDBootstrap" target="_blank" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
                <li><a href="https://plus.google.com/u/0/+Mdbootstrap" target="_blank" class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                <li><a href="https://www.linkedin.com/in/dawid-adach-97435534/pl" target="_blank" class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
                <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
                <li><a href="https://pl.pinterest.com/materialdesignf/" target="_blank" class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
                <li><a href="https://www.instagram.com/mdbootstrap/" target="_blank" class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 <a href="kevinbastian.me"> Kevin Bastian </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer: CTA, Social Media, Additional Info & Links-->
    

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="../../../js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="../../../js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../../js/mdb.min.js"></script>

    <!--Google Maps-->
    <script src="http://maps.google.com/maps/api/js"></script>
    
    <!--Init WOW-->
    <script>
        new WOW().init();
    </script>


</body>

</html>     
      
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.bxslider.min.js')}}"></script>
        <script src="{{URL::asset('js/wow.js')}}"></script>
        <script src="{{URL::asset('js/custom.js')}}"></script>
        <script src="{{URL::asset('contactform/contactform.js')}}"></script>
        
  </body>
</html>
