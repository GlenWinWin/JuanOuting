<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanOuting | Helping You Book a Private Resort</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" media="screen" title="no title">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
    .ui-menu-item {
        display: block;
        padding: 3px 15px;
        clear: both;
        font-weight: normal;
        line-height: 18px;
        color: #555555;
        white-space: nowrap;

        .ui-state-active, .ui-state-hover {
          color: #ffffff;
          text-decoration: none;
          background-color: #0088cc;
          border-radius: 0;
          -webkit-border-radius: 0;
          -moz-border-radius: 0;
          background-image: none;
        }

      }
    </style>
  </head>
  <body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="header-container" >
          <div class="navbar-header page-scroll">
              <div class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" onclick="openNav();">

                  <i class="fa fa-bars"></i>
              </div>
              <a class="navbar-brand page-scroll" href="#page-top">JuanOuting</a>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a href="#Maps">Help</a>
                  </li>
                  <!-- <li>
                      <a href="#Maps">Sign Up</a>
                  </li> -->
                  <li>
                      <a href="logout">Log Out</a>
                  </li>

                      </ul>
          </div>
                  </div>
          <div id="myNav" class="overlay">

            <div class="overlay-content">
              <a href="#">Help</a>
              <!-- <a href="#">Sign Up</a> -->
              <a href="logout">Log Out</a>
            </div>
          </div>

  </nav>
  <div class="parent-header">
      <div class="child-header"></div>
      <div class="container search-container search-container-responsive">
        <div class="row">
        <div class="search-bar">
          <div class="search-content search-location-responsive ">
            <div class="search-title">
              Where do you want to go?
            </div>
            <input id="yey" onClick="openSearch()" class="input-content" placeholder="Enter a destination">
          </div>
          <div class="overlay overlay-search" id="mySearch">
            <div class="overlay-content overlay-content-search" id="content-search">
              <div class=" search-bar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeSearch()">&times;</a>
                {!! Form::open(array('action' => 'ResortController@filterSearch' , 'method' => 'post'))!!}

                  <div class="search-content search-location ">
                    <div class="search-title">
                      Where do you want to go?
                    </div>
                    <input id="resort" name="resortName" class="input-content" placeholder="Enter a destination"/>
                  </div>
                  <div class="dropdown search-content search-day" id="dropdown">
                    <div class="search-title">
                      Day
                    </div>
                      <select name="reservationType" class="btn dropdown-toggle input-content" style="background-color:white">
                        <option value="">Select...</option>
                        <option value="1">Halfday - Day</option>
                        <option value="2">Halfday - Night</option>
                        <option value="3">Whole Day</option>
                      </select>
                    </div>
                    <div class="date search-content search-date">
                      <div class="search-title">
                        Check-in
                      </div>
                      <div class="has-feedback">
                        <input id="FromDate" name="fromDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                      </div>
                    </div>
                    <div class="date search-content search-date">
                      <div class="search-title">
                        Check-out
                      </div>
                      <div class="has-feedback">
                        <input id="ToDate" name="toDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                      </div>
                    </div>
                    <div class="dropdown search-content search-day" >
                      <div class="search-title">
                        Guest
                      </div>
                        <select name="pax" class="btn dropdown-toggle input-content" style="background-color:white">
                          <option value="">Select...</option>
                          <option value="1-15 persons">1-15 persons</option>
                          <option value="1-20 persons">1-20 persons</option>
                          <option value="1-25 persons">1-25 persons</option>
                          <option value="1-30 persons">1-30 persons</option>
                          <option value="1-40 persons">1-40 persons</option>
                          <option value="1-50 persons">1-50 persons</option>
                        </select>
                      </div>

                      <div class="submit-btn search-content search-submit" ><p>&nbsp;</p>
                        <input type="submit" class="btn btn-default input-content search-button" value="Search">
                      </div>
                      {!! Form::close()!!}

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @yield('body-content')
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
  </body>
  </html>
  <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/utilities/header.js"></script>
  <script type="text/javascript" src="assets/js/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="assets/js/utilities/ease.js"></script>
  <script type="text/javascript" src="assets/js/utilities/functions.js"></script>
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
  <script>
  function openNav() {
      document.getElementById("myNav").style.height = "100%";
       document.getElementById( "navbar-toggle" ).setAttribute( "onClick", "javascript: closeNav();" );
  }

  function closeNav() {
      document.getElementById("myNav").style.height = "0%";
      document.getElementById( "navbar-toggle" ).setAttribute( "onClick", "javascript: openNav();" );
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
  }
  </script>
