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
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">

    <!-- Personalized styles -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
        <div class="page-container">
        <!--Navbar-->
        <nav class="secondary-color-dark navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar wow fadeIn">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                New Year's Jar
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('journal.index') }}">Personal Journal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('about') }}">How it works </a>
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
                            <a href="#"  class="nav-link dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                <a class="dropdown-item" href="{{ url('/logout') }}"                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    @endif
                </ul>
            </div>
        </nav>
        <!--/.Navbar-->

        <!--Main layout-->
        <main>
            <div class="container">
                @yield('content')     
            </div>
        </main>
        <!-- DIVIDER: SUPER IMPORTANT TO KEEP A NICE FOOTER -->
        <hr class="between-sections">
        <div class="row">
        </div>
        <!-- /DIVIDER -->

        <!--/.Main Layour-->
        <!--Footer: CTA, Social Media, Additional Info & Links-->
        <footer class="page-footer center-on-small-only footer">
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
        </div>
        <!--/.Footer: CTA, Social Media, Additional Info & Links-->
    </div>
    

    <!-- SCRIPTS -->
       
    <!-- JQuery -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <!-- Tooltips -->
    <script src="/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Cool animations -->
    <script src="/js/wow.js"></script>
    <script src="/js/mdb.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="/js/custom.js"></script>
    
    <!--Init WOW-->
    <script>
        new WOW().init();
    </script>     
  </body>
</html>
