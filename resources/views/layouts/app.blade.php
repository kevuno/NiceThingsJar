
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>New Year's Jar</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
        
        <div class="header">
            <div class="bg-color">                
                <header id="main-header">
                <nav class="navbar navbar-default navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">New Year's Jar</a>
                    </div>
                    <div class="collapse navbar-collapse" id="lauraMenu">
                      <ul class="nav navbar-nav navbar-right navbar-border">
                        <li class="active"><a href="#main-header">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#about">Contact</a></li>
                        <li class="divider"></li>
                        <li><a>|</a></li>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                      </ul>
                    </div>
                  </div>
                </nav>
                </header>
                
            <div class="container">
                @yield('cover')
            </div>
            </div>
        </div>
    </div>
@yield('content')      
  
  
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
          <div class="col-md-6">
              <div class="footer">
                  © Made by Kevin Bastian
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Laura
                        -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
                    </div>
              </div>
          </div>
          <div class="col-md-6 text-right">
              <ul class="social-list">
                  <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-dribbble"></i>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-vimeo"></i>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </li>
              </ul>
          </div>
          
      </div>
      <!--end row-->
    </div>
  </footer>
  
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>
