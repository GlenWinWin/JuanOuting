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
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript">
new Morris.Line({
// ID of the element in which to draw the chart.
element: 'myfirstchart',
// Chart data records -- each entry in this array corresponds to a point on
// the chart.
data: [
  { year: '2008', value: 20 },
  { year: '2009', value: 10 },
  { year: '2010', value: 5 },
  { year: '2011', value: 5 },
  { year: '2012', value: 20 }
],
// The name of the data record attribute that contains x-values.
xkey: 'year',
// A list of names of data record attributes that contain y-values.
ykeys: ['value'],
// Labels for the ykeys -- will be displayed when you hover over the
// chart.
labels: ['Value']
});
Morris.Bar({
  element: 'bar-example',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Booked", value: 12},
    {label: "Viewed", value: 30},
    {label: "Paid", value: 20}
  ],
  formatter: function (y, data) { return y + '%'}
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
