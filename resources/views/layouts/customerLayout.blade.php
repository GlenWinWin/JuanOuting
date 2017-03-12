<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanOuting | Helping You Book a Private Resort</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/styleCustomer.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" media="screen" title="no title">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  </head>
  <body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="header-container">
          <div class="navbar-header page-scroll">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>
              <a class="navbar-brand page-scroll" href="index.php">JuanOuting</a>
              <i class="fa fa-search search-show" aria-hidden="true"  onClick="openSearch();visibleSearch();"></i>
                <div id="searchOffset">
                  <i class="fa fa-search search-header-icon" aria-hidden="true" id="yey"></i><input id="resort1" onkeyup="AutoComplete1()" class="ui-autocomplete-input search-header" placeholder="Search" autocomplete="off" >
                </div>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a href="#Maps">Help</a>
                  </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#registerModal">Sign Up</a>
                  </li>
                  <li>
                      @if(Auth::check())
                        <a href="logout">LOGOUT</a>
                      @else
                        <a style="cursor:pointer" data-toggle="modal" data-target="#loginModal">LOGIN</a>
                      @endif
                  </li>

                      </ul>
          </div>
                  </div>

  </nav>
<div class="parent-header">
        <div class="child-header"></div>
        <div class="container search-container search-container-responsive search-bar-hide" >
          <div class="row">
          <div class="search-bar">
            <div class="overlay overlay-search" id="mySearch">
              <div class="overlay-content overlay-content-search" id="content-search">
                <div class=" search-bar">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeSearch();hideSearch();">&times;</a>
                    {!! Form::open(array('action' => 'ResortController@filterSearch' , 'method' => 'post'))!!}
                    <div class="search-content search-location ">
                      <div class="search-title">
                        Where do you want to go?
                      </div>
                      <input id="resort" onkeyup="AutoComplete()" class="input-content" placeholder="Enter a destination">
                    </div>
                    <div class="dropdown search-content search-day" id="dropdown">
                      <div class="search-title">
                        Day
                      </div>
                      <button class="btn btn-default dropdown-toggle input-content" id="btntypeOfReservation" type="button" data-toggle="dropdown">Halfday- Day
                        <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                        <ul id="typeOfReservation" class="dropdown-menu" style="cursor:pointer">
                          <li><a>Halfday- Day</a></li>
                          <li><a>Halfday - Night</a></li>
                          <li><a>Wholeday</a></li>
                        </ul>
                      </div>
                      <div class="date search-content search-date">
                        <div class="search-title">
                          Check-in
                        </div>
                        <div class="has-feedback">
                          <input id="FromDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                        </div>
                      </div>
                      <div class="date search-content search-date">
                        <div class="search-title">
                          Check-out
                        </div>
                        <div class="has-feedback">
                          <input id="ToDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                        </div>
                      </div>
                      <div class="dropdown search-content search-day" >
                        <div class="search-title">
                          Guest
                        </div>
                        <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown" id="btnPax">1-15 persons
                          <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                          <ul class="dropdown-menu" id="paxNum" style="cursor:pointer">
                            <li><a>1-15 persons</a></li>
                            <li><a>1-20 persons</a></li>
                            <li><a>1-25 persons</a></li>
                            <li><a>1-30 persons</a></li>
                            <li><a>1-40 persons</a></li>
                            <li><a>1-50 persons</a></li>
                          </ul>
                        </div>

                        <div class="submit-btn search-content search-submit" ><p>&nbsp;</p>
                          <button type="submit" class="btn btn-default input-content search-button">Search</button>
                        </div>
                        {!! Form::close()!!}
                  </div>
              </div>
            </div>
          </div>
        </div>
</div>
</div>
<div class="container">
    <div class="row deck-row">
      <div class="featured-title">
        Featured Destinations
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/1.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><b class="off-r-price">₱5500 </b>  <small>24% off</small><span class="indiv-rating">★★★★</span></p>
        <p class="r-content"></p>
        <p class="r-name"> 88 Forest and Hotspring abcd asdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Pogi akoasdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/3.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Jason Patrick S Lopez Resort </p>
      </div>
    </div>
    <div class="row deck-row">
      <div class="featured-title">
        Calamba, Laguna
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/1.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> 88 Forest and Hotspring abcd asdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Pogi akoasdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/3.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Jason Patrick S Lopez Resort </p>
      </div>
    </div>
  </div>
  <div class="footer">
  <div class="container" >
    <div class="row footer-container footer-hr">
      <div class="footer-content">
        <div class="footer-title">
          Book with us
        </div>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Refund Policy</a></p>
        <p><a href="#">Terms and Conditions</a></p>
        <p><a href="#">Frequently Asked Questions</a></p>
      </div>
      <div class="footer-content">
        <div class="footer-title">
          JuanOuting
        </div>
        <p><a href="#">About</a></p>
        <p><a href="#">Careers</a></p>
        <p><a href="#">Policies</a></p>
        <p><a href="#">Customer Service</a></p>
        <p><a href="#">Partners</a></p>
      </div>
      <div class="footer-content">
        <div class="footer-title">
          Book with us
        </div>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Refund Policy</a></p>
        <p><a href="#">Terms and Conditions</a></p>
        <p><a href="#">Frequently Asked Questions</a></p>
      </div>


      <div class="footer-content">
        <div class="footer-title">
          Partner with Us
        </div>
        <p><a href="#">Why Partner with Us</a></p>
        <p><a href="#">Properties</a></p>
        <p><a href="#">Affiliates</a></p>
      </div>
  </div>

    </div>
    <div class="row footer-container">
        <div class="footer2-title">
          Connect With Us
        </div>
        <div class="social-media">
          <a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook-square" aria-hidden="true" col-md-4></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true" col-md-4></i></a>
          <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true" col-md-4></i></a>
        </div>
        <div class="footer2">
            <p> Copyright © 2017 NiceSwan. All Rights Reserved</p>
        </div>
    </div>
    </div>
    @include('users.modals')
</body>
</html>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/utilities/functions.js"></script>
<script type="text/javascript" src="assets/js/utilities/ease.js"></script>
<script type="text/javascript" src="assets/js/utilities/header.js"></script>
<script type="text/javascript" src="assets/js/utilities/search.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#resort").autocomplete({
    source: "resort",
    minlength:1,
    autoFocus:true,
    select:function(event,ui){
      event.preventDefault();
      if(ui.item.value == ''){
        $('#resort').val('No results found');
      }
      else{
        $('#resort').val(ui.item.value);
      }
    }
  });
});
</script>
<script type="text/javascript">
function visibleSearch(){
  $('.search-container-responsive').removeClass("search-bar-hide").addClass("search-bar-show");

}
function hideSearch(){
  $('.search-container-responsive').removeClass("search-bar-show").addClass("search-bar-hide");

}
$( "#spinner" ).spinner();
$( "#spinner1" ).spinner();
$( "#spinner2" ).spinner();
</script>
<script type="text/javascript">
if (screen && screen.width < 768) {
  document.write('<script type="text/javascript" src="assets/js/utilities/search1.js"><\/script>');

}
else {
  document.write('<script type="text/javascript" src="assets/js/utilities/search2.js"><\/script>');

    // document.getElementById("myFilter").style.height = "100%";
    // $("#myFilter").removeAttr('class');
    // $("#content-filter").removeAttr('class');

}
$('#typeOfReservation li').on('click', function(){
    $('#btntypeOfReservation').text($(this).text()).append('<span class="fa fa-chevron-circle-down search-dropdown"></span>');
});
$('#paxNum li').on('click', function(){
    $('#btnPax').text($(this).text()).append('<span class="fa fa-chevron-circle-down search-dropdown"></span>');
});
</script>
