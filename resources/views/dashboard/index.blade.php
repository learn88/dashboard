<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="iCRNiMx87VSAKksvxXspk18BO55gfEKtSXsDTpdw">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>Laravel Dashboard | @yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
    .btn-size-xs{
      padding: 3px 3px;
    }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"iCRNiMx87VSAKksvxXspk18BO55gfEKtSXsDTpdw"}    </script>
</head>

  <body>
    <div class="wrapper">
      <div class="sidebar" data-active-color="green" data-background-color="white">

          <div class="logo">
              <a href="#" class="simple-text">
                  Laravel Dashboard
              </a>
          </div>
          <div class="logo logo-mini">
              <a href="#" class="simple-text">
                  L D
              </a>
          </div>
          <div class="sidebar-wrapper">
              <div class="user">
                  <div class="photo">
                      <img src="/uploads/images/logo.jpg" />
                  </div>
                  {{-- <div class="info">
                      <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                          Sunny International
                          <b class="caret"></b>
                      </a>
                      <div class="collapse" id="collapseExample">
                          <ul class="nav">
                              <li>
                                  <a href="#">My Profile</a>
                              </li>
                              <li>
                                  <a href="#">Edit Profile</a>
                              </li>
                              <li>
                                  <a href="#">Settings</a>
                              </li>
                          </ul>
                      </div>
                  </div> --}}
              </div>
              <ul class="nav">
                  <li class="active">
                      <a href="./dashboard.html">
                          <i class="material-icons">dashboard</i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li>
                      <a data-toggle="collapse" href="#componentsExamples">
                          <i class="material-icons">apps</i>
                          <p>Components
                              <b class="caret"></b>
                          </p>
                      </a>
                      <div class="collapse" id="componentsExamples">
                          <ul class="nav">
                              <li>
                                  <a href="#">Buttons</a>
                              </li>
                              <li>
                                  <a href="#">Grid System</a>
                              </li>
                              <li>
                                  <a href="#">Panels</a>
                              </li>
                              <li>
                                  <a href="#">Sweet Alert</a>
                              </li>
                              <li>
                                  <a href="#">Notifications</a>
                              </li>
                              <li>
                                  <a href="#">Icons</a>
                              </li>
                              <li>
                                  <a href="#">Typography</a>
                              </li>
                          </ul>
                      </div>
                  </li>
                  <li>
                      <a href="#">
                          <i class="material-icons">date_range</i>
                          <p>Calendar</p>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
            <div class="content" style="margin-top:40px">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                         | <a href="#">Laravel Dashboard</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- <script src="/js/moment.js"></script> --}}
  {{-- <script src="/js/chart.js"></script> --}}
  {{-- <script src="/js/gmap.js"></script> --}}

</html>
