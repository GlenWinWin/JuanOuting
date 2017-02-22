<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/resortOwner.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/sidebar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script type="text/javascript">
Chart.defaults.global.legend.display = false;

var ctx = document.getElementById("canvasDoughnut");

  var data = {
    labels: [
      "Wrong Answers",
      "Correct Answers"
    ],
    datasets: [{
      data: [34,66],
      backgroundColor: [
        "#FF4949",
        "#30DC2F"
      ],
      hoverBackgroundColor: [
        "#F55252",
        "#49E048"
      ]

    }]
  };

  var canvasDoughnut = new Chart(ctx, {
    type: 'doughnut',
    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
    data: data
  });
</script>
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#blah').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
}
}
$("#imgInp").change(function(){
  readURL(this);
});
</script>
