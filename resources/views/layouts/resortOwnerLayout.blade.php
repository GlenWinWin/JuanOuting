<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/resortOwner.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="nav-title">
      <div class="navbar-header">
        <a id="menu-toggle" href="#" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </a>
          <a class="navbar-brand" href="home">
            JuanOuting
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 25px;font-size:17px;">Settings<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="edit_profile">Edit Profile</a></li>
                            <li><a href="logout" onclick=" return confirm('Are you sure you want to logout?')">Logout</a></li>
                          </ul>
                        </li>

          </ul>
        </div>
      </div>
    </nav>
    	<div class=" col-lg-3">
    	<div id="sidebar-wrapper" class="sidebar-toggle">
    			<div class="profile-userpic">
    				<img src="{{ Auth::user()->profile_path }}" class="img-responsive" alt="">
    			</div>
    			<div class="profile-usertitle">
    				<div class="profile-usertitle-name">
    					Resort Owner
    				</div>
    			</div>
    		<ul class="nav">
    			<li>
    				<a href="home" >
    				<i class="fa fa-bar-chart"></i>
    				Analytics </a>
    			</li>
    			<li >
    				<a href="monitor_reservations">
    				<i class="fa fa-calendar"></i>
    			Reservations</a>
    			</li>
    			<li>
    				<a href="monitor_payments">
    				<i class="fa fa-money"></i>
    			Payments</a>
    			</li>

          <li class="visible-xs visible-md visible-sm">
            <a href="edit_profile" >
            <i class="fa fa-pencil"></i>
          Edit Profile</a>
          </li>
          <li class="visible-xs visible-md visible-sm">
            <a href="logout" onclick=" return confirm('Are you sure you want to logout?')">
            <i class="fa fa-sign-out"></i>
          Log Out</a>
          </li>
          <br>
          <br>
          <br>
        </ul>
    	</div>
    </div>
    @yield('body-content')
  </body>
</html>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/file/upload.js"></script>
<script src="assets/js/utilities/sidebar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
@yield('graphs')
