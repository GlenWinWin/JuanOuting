<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/resortOwner.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
         <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <title>@yield('title')</title>
    <style media="screen">
    #noti_Counter {
      display: block;
      position: relative;
      background: #E1141E;
      color: #FFF;
      font-size: 12px;
      font-weight: normal;
      padding: 1px 3px;
      margin: 0px -7px -17px 10px;
      border-radius: 2px;
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      z-index: 1;
    }
#notifications {
        display:none;
        width:430px;
        position:absolute;
        top:30px;
        margin-left: -398px;
        left:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 0;
    }
    /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
    #notifications:before {
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:409px;
    }
    h3 {
        display:block;
        color:#333;
        background:#FFF;
        font-weight:bold;
        font-size:13px;
        padding:8px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }

    .seeAll {
        background:#F6F7F8;
        padding:8px;
        font-size:12px;
        font-weight:bold;
        border-top:solid 1px rgba(100, 100, 100, .30);
        text-align:center;
    }
    .seeAll a {
        color:#3b5998;
    }
    .seeAll a:hover {
        background:#F6F7F8;
        color:#3b5998;
        text-decoration:underline;
    }
    </style>
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
            <li id="countNotif" style="cursor:pointer">
              <a style="font-size:17px;" id="anchorNotif" onclick="notifyMe()">
                <div id="noti_Counter">11</div>
                <i class="fa fa-bell-o" id="numNotif" aria-hidden="true"></i>
              </a>
              <div id="notifications" hidden onclick="hideNotif()">
                    <h3>Notifications</h3>
                    <div style="height:300px;"></div>
                    <div class="seeAll"><a href="#">See All</a></div>
              </div>
            </li>
            <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:17px;">Settings<span class="caret"></span></a>
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
          <li class="visible-xs visible-md visible-sm" style="cursor:pointer">
            <a style="padding-top: 25px;font-size:17px;" id="anchorNotifMobile" onclick="notifyMeMobile()">
              Notifications <i class="fa fa-bell-o badge1" id="numNotifMobile" value="3" aria-hidden="true"></i>
            </a>
            <div id="notifications" hidden>
                  <h3>Notifications</h3>
                  <div style="height:300px;"></div>
                  <div class="seeAll"><a href="#">See All</a></div>
            </div>
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
<script type="text/javascript">
  function notifyMeMobile(){
    var i = document.getElementById("numNotifMobile").getAttribute("value");
    document.getElementById("numNotifMobile").setAttribute("value",99);
    $('#numNotifMobile').fadeOut('slow');
    document.getElementById("anchorNotifMobile").innerHTML = '<i class="fa fa-bell-o badge1" id="numNotif" aria-hidden="false"></i>';
    $('#notifications').fadeIn('slow');
    $('#notifications').css('float','left');
  }
  function notifyMe() {
    var i = document.getElementById("numNotif").getAttribute("value");
    document.getElementById("numNotif").setAttribute("value",99);
    $('#numNotif').fadeOut('slow');
    document.getElementById("anchorNotif").innerHTML = '<i class="fa fa-bell-o badge1" id="numNotif" aria-hidden="false"></i>';
    $('#notifications').fadeIn('slow');
    $('#notifications').css('float','left');
  }
  function hideNotif(){
    $('#notifications').fadeOut('slow');
  }
</script>
