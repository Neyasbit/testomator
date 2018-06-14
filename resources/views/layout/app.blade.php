<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Testomator - сервис тестирования</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta content="Сервис проведения тестирования и анализа результатов" name="description"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <!-- App favicon -->
  <link rel="shortcut icon" href="/images/favicon.ico">

  <!-- App css -->
  {{ Html::style(mix('css/bootstrap.min.css')) }}
  {{ Html::style(mix('css/icons.css')) }}
  {{ Html::style(mix('css/styles.css')) }}

  {{ Html::script(mix('js/modernizr.min.js')) }}

</head>

<body>

<!-- Navigation Bar-->
<header id="topnav">
  <div class="topbar-main">
    <div class="container-fluid">

      <div class="menu-extras topbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">

          <li class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle nav-link">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </li>

          <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
               role="button"
               aria-haspopup="false" aria-expanded="false">
              <img src="/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ti-user m-r-5"></i> Profile
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ti-settings m-r-5"></i> Settings
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ti-lock m-r-5"></i> Lock screen
              </a>

              <!-- item-->
              {{ Form::open(['route' => 'logout', 'method' => 'post']) }}
              <button type="submit" class="dropdown-item notify-item">
                <i class="ti-power-off m-r-5"></i> Logout
              </button>
              {{ Form::close() }}

            </div>
          </li>

        </ul>
      </div>
      <!-- end menu-extras -->

      <div class="clearfix"></div>

    </div> <!-- end container -->
  </div>
  <!-- end topbar-main -->

  <div class="navbar-custom">
    <div class="container-fluid">
      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
          <li class="has-submenu">
            <a href="{{ URL::route('theme.index') }}">
              <i class="mdi mdi-view-dashboard"></i> <span> Темы </span>
            </a>
          </li>
        </ul>
        <!-- End navigation menu -->
      </div> <!-- end #navigation -->
    </div> <!-- end container -->
  </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
  <div class="container-fluid">

    @yield('content')

  </div>

</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        2018 © Testomator.
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

{{ Html::script(mix('js/scripts.js')) }}

</body>
</html>