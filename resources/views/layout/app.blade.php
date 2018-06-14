<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Mood stat - статистика твоего настроения</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta content="Сервис мониторинга настроения и событий в жизни. Визуализация взлётов и падений." name="description"/>
  <meta content="Trabaho" name="author"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

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

      <!-- Logo container-->
      <div class="logo">
        <!-- Text Logo -->
        <!--<a href="index.html" class="logo">-->
        <!--<span class="logo-small"><i class="mdi mdi-radar"></i></span>-->
        <!--<span class="logo-large"><i class="mdi mdi-radar"></i> Adminto</span>-->
        <!--</a>-->
        <!-- Image Logo -->
        <a href="index.html" class="logo">
          <img src="/images/logo-sm.png" alt="" height="26" class="logo-small">
          <img src="/images/logo.png" alt="" height="24" class="logo-large">
        </a>
      </div>
      <!-- End Logo container-->

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
          <li class="hide-phone">
            <form class="app-search">
              <input type="text" placeholder="Search..."
                     class="form-control">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </li>
          <li>
            <!-- Notification -->
            <div class="notification-box">
              <ul class="list-inline mb-0">
                <li>
                  <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-bell-outline noti-icon"></i>
                  </a>
                  <div class="noti-dot">
                    <span class="dot"></span>
                    <span class="pulse"></span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Notification bar -->
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
            <a href="index.html"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
          </li>
          <li class="has-submenu">
            <a href="#"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> </a>
            <ul class="submenu megamenu">
              <li>
                <ul>
                  <li><a href="ui-buttons.html">Buttons</a></li>
                  <li><a href="ui-cards.html">Cards</a></li>
                  <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                  <li><a href="ui-typography.html">Typography </a></li>
                  <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                  <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                  <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                  <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                </ul>
              </li>
              <li>
                <ul>
                  <li><a href="ui-dripicons.html">Dripicons</a></li>
                  <li><a href="ui-modals.html">Modals</a></li>
                  <li><a href="ui-notification.html">Notification</a></li>
                  <li><a href="ui-range-slider.html">Range Slider</a></li>
                  <li><a href="ui-components.html">Components</a>
                  <li><a href="ui-sweetalert.html">Sweet Alert</a>
                  <li><a href="ui-treeview.html">Tree view</a>
                  <li><a href="ui-widgets.html">Widgets</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="has-submenu">
            <a href="#"><i class="mdi mdi-texture"></i><span> Forms </span> </a>
            <ul class="submenu">
              <li><a href="form-elements.html">General Elements</a></li>
              <li><a href="form-advanced.html">Advanced Form</a></li>
              <li><a href="form-validation.html">Form Validation</a></li>
              <li><a href="form-wizard.html">Form Wizard</a></li>
              <li><a href="form-fileupload.html">Form Uploads</a></li>
              <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
              <li><a href="form-xeditable.html">X-editable</a></li>
            </ul>
          </li>

          <li class="has-submenu">
            <a href="#"><i class="mdi mdi-view-list"></i> <span> Tables </span> </a>
            <ul class="submenu">
              <li><a href="tables-basic.html">Basic Tables</a></li>
              <li><a href="tables-datatable.html">Data Table</a></li>
              <li><a href="tables-responsive.html">Responsive Table</a></li>
              <li><a href="tables-editable.html">Editable Table</a></li>
              <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
            </ul>
          </li>

          <li class="has-submenu">
            <a href="#"><i class="mdi mdi-chart-donut-variant"></i><span> Charts </span> </a>
            <ul class="submenu">
              <li><a href="chart-flot.html">Flot Chart</a></li>
              <li><a href="chart-morris.html">Morris Chart</a></li>
              <li><a href="chart-chartist.html">Chartist Charts</a></li>
              <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
              <li><a href="chart-other.html">Other Chart</a></li>
            </ul>
          </li>

          <li class="has-submenu">
            <a href="#"><i class="mdi mdi-google-pages"></i><span> Pages </span> </a>
            <ul class="submenu">
              <li><a href="page-starter.html">Starter Page</a></li>
              <li><a href="page-login.html">Login</a></li>
              <li><a href="page-register.html">Register</a></li>
              <li><a href="page-recoverpw.html">Recover Password</a></li>
              <li><a href="page-lock-screen.html">Lock Screen</a></li>
              <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
              <li><a href="page-404.html">Error 404</a></li>
              <li><a href="page-500.html">Error 500</a></li>
            </ul>
          </li>

          <li class="has-submenu">
            <a href="#"><i class="mdi mdi-layers"></i><span>Extra Pages </span> </a>
            <ul class="submenu megamenu">
              <li>
                <ul>
                  <li><a href="extras-projects.html">Projects</a></li>
                  <li><a href="extras-tour.html">Tour</a></li>
                  <li><a href="extras-taskboard.html">Taskboard</a></li>
                  <li><a href="extras-inbox.html">Mail</a></li>
                  <li><a href="extras-taskdetail.html">Task Detail</a></li>
                  <li><a href="extras-maps.html">Maps</a></li>
                  <li><a href="extras-calendar.html">Calendar</a></li>
                  <li><a href="extras-contact.html">Contact list</a></li>
                  <li><a href="extras-pricing.html">Pricing</a></li>
                </ul>
              </li>
              <li>
                <ul>
                  <li><a href="extras-timeline.html">Timeline</a></li>
                  <li><a href="extras-invoice.html">Invoice</a></li>
                  <li><a href="extras-profile.html">Profile</a></li>
                  <li><a href="extras-faq.html">FAQ</a></li>
                  <li><a href="extras-gallery.html">Gallery</a></li>
                  <li><a href="extras-email-template.html">Email template</a></li>
                  <li><a href="extras-maintenance.html">Maintenance</a></li>
                  <li><a href="extras-comingsoon.html">Coming soon</a></li>
                </ul>
              </li>
            </ul>
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

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-20">
          <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                  aria-expanded="false">Settings
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">Action</a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
          </div>
        </div>
        <h4 class="page-title">Starter</h4>
      </div>
    </div>
    <!-- end page title end breadcrumb -->


  </div> <!-- end container -->


  <!-- Right Sidebar -->
  <div class="side-bar right-bar">
    <a href="javascript:void(0);" class="right-bar-toggle">
      <i class="mdi mdi-close-circle-outline"></i>
    </a>
    <h4 class="">Notifications</h4>
    <div class="notification-list nicescroll">
      <ul class="list-group list-no-border user-list">
        <li class="list-group-item">
          <a href="#" class="user-list-item">
            <div class="avatar">
              <img src="/images/users/avatar-2.jpg" alt="">
            </div>
            <div class="user-desc">
              <span class="name">Michael Zenaty</span>
              <span class="desc">There are new settings available</span>
              <span class="time">2 hours ago</span>
            </div>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#" class="user-list-item">
            <div class="icon bg-info">
              <i class="mdi mdi-account"></i>
            </div>
            <div class="user-desc">
              <span class="name">New Signup</span>
              <span class="desc">There are new settings available</span>
              <span class="time">5 hours ago</span>
            </div>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#" class="user-list-item">
            <div class="icon bg-pink">
              <i class="mdi mdi-comment"></i>
            </div>
            <div class="user-desc">
              <span class="name">New Message received</span>
              <span class="desc">There are new settings available</span>
              <span class="time">1 day ago</span>
            </div>
          </a>
        </li>
        <li class="list-group-item active">
          <a href="#" class="user-list-item">
            <div class="avatar">
              <img src="/images/users/avatar-3.jpg" alt="">
            </div>
            <div class="user-desc">
              <span class="name">James Anderson</span>
              <span class="desc">There are new settings available</span>
              <span class="time">2 days ago</span>
            </div>
          </a>
        </li>
        <li class="list-group-item active">
          <a href="#" class="user-list-item">
            <div class="icon bg-warning">
              <i class="mdi mdi-settings"></i>
            </div>
            <div class="user-desc">
              <span class="name">Settings</span>
              <span class="desc">There are new settings available</span>
              <span class="time">1 day ago</span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>
  <!-- /Right-bar -->

</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        2016 - 2018 © Adminto. Coderthemes.com
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

{{ Html::script(mix('js/scripts.js')) }}

</body>
</html>