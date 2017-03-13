<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/resortOwner.css" media="screen" title="no title" charset="utf-8">
                  <link rel="stylesheet" href="assets/css/calendar.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
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
        color:#696969;
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

* { margin: 0px; padding: 0px; }

emoji{
    display: inline-block;
    height: 18px;
    width: 18px;
    background-size: cover;
    background-repeat: no-repeat;
    margin-top: -7px;
    margin-right: 2px;
    transform: translate3d(0px, 3px, 0px);
}
emoji.please{background-image: url(http://imgur.com/ftowh0s.png);}
emoji.lmao{background-image: url(http://i.imgur.com/MllSy5N.png);}
emoji.happy{background-image: url(http://imgur.com/5WUpcPZ.png);}
emoji.pizza{background-image: url(http://imgur.com/voEvJld.png);}
emoji.cryalot{background-image: url(http://i.imgur.com/UUrRRo6.png);}
emoji.books{background-image: url(http://i.imgur.com/UjZLf1R.png);}
emoji.moai{background-image: url(http://imgur.com/uSpaYy8.png);}
emoji.suffocated{background-image: url(http://i.imgur.com/jfTyB5F.png);}
emoji.scream{background-image: url(http://i.imgur.com/tOLNJgg.png);}
emoji.hearth_blue{background-image: url(http://i.imgur.com/gR9juts.png);}
emoji.funny{background-image: url(http://i.imgur.com/qKia58V.png);}

#view-code{
  color:#89a2b5;
  opacity:0.7;
  font-size:14px;
  text-transform:uppercase;
  font-weight:700;
  text-decoration:none;
  position:absolute;top:660px;
  left:50%;margin-left:-50px;
  z-index:200;
}
#view-code:hover{opacity:1;}
#chatbox{
    width:100%;
    background:#fff;
    border-radius:6px;
    overflow:hidden;
    height:484px;
}

#friendslist{
    top:0;
    left:0;
    width:100%;
    height:484px;
}
#topmenu{
    height:69px;
    width:100%;
    border-bottom:1px solid #d8dfe3;
}
#topmenu span{
    float:left;
    width: 96px;
    height: 70px;
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/top-menu.png") -3px -118px no-repeat;
}
#topmenu span.friends{margin-bottom:-1px;}
#topmenu span.chats{background-position:-95px 25px; cursor:pointer;}
#topmenu span.chats:hover{background-position:-95px -46px; cursor:pointer;}
#topmenu span.history{background-position:-190px 24px; cursor:pointer;}
#topmenu span.history:hover{background-position:-190px -47px; cursor:pointer;}
.friend{
    height:70px;
    border-bottom:1px solid #e7ebee;
    position:relative;
}
.friend:hover{
    background:#f1f4f6;
    cursor:pointer;
}
.friend img{
    width:40px;
    border-radius:50%;
    margin:15px;
    float:left;
}
.floatingImg{
    width:40px;
    border-radius:50%;
    position:absolute;
    top:0;
    left:12px;
    border:3px solid #fff;
}
.friend p{
    padding:15px 0 0 0;
    float:left;
    width:220px;
}
.friend p strong{
  font-weight:600;
  font-size:15px;
    color:#597a96;

}
.friend p span{
    font-size:13px;
    font-weight:400;
    color:#aab8c2;
}
.friend .status{
    background:#26c281;
    border-radius:50%;
    width:9px;
    height:9px;
    position:absolute;
    top:31px;
    right:17px;
}
.friend .status.away{background:#ffce54;}
.friend .status.inactive{background:#eaeef0;}
#search{
    background:#e3e9ed url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/search.png") -11px 0 no-repeat;
    height:60px;
    width:100%;
    bottom:0;
    left:0;
}
#searchfield{
    background:#e3e9ed;
    margin:21px 0 0 55px;
    border:none;
    padding:0;
    font-size:14px;
    font-family:"Open Sans", sans-serif;
    font-weight:400px;
    color:#8198ac;
}
#searchfield:focus{
     outline: 0;
}
#chatview{
    width:95%;
    height:484px;
    position:absolute;
    top:0;
    left:0;
    display:none;
    background:#fff;
}
#profile{
    height:153px;
    overflow:hidden;
    text-align:center;
    color:#fff;
}
.p1 #profile{
    background-color:#fff;
    background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png");
    background-repeat: no-repeat;
    background-size: cover;
}
#profile .avatar{
    width:68px;
    border:3px solid #fff;
    margin:23px 0 0;
    border-radius:50%;
}
#profile  p{
    font-weight:600;
    font-size:15px;
    margin:118px 0 -1px;
    opacity:0;
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
       -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
         -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#profile  p.animate{
    margin-top:97px;
    opacity:1;
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
       -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
         -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#profile  span{
    font-weight:400;
    font-size:11px;
}
#chat-messages{
    opacity:0;
    margin-top:30px;
    width:100%;
    height:270px;
    overflow-y:scroll;
    overflow-x:hidden;
    padding-right: 20px;
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
       -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
         -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#chat-messages.animate{
    opacity:1;
    margin-top:0;
}
#chat-messages label{
    color:#aab8c2;
    font-weight:600;
    font-size:12px;
    text-align:center;
    margin:15px 0;
    width:100%;
    display:block;
}
#chat-messages div.message{
    padding:0 0 30px 58px;
    clear:both;
    margin-bottom:45px;
}
#chat-messages div.message.right{
      padding: 0 58px 30px 0;
      margin-right: -19px;
      margin-left: 19px;
}
#chat-messages .message img{
      float: left;
      margin-left: -38px;
      border-radius: 50%;
      width: 30px;
      margin-top: 12px;
}
#chat-messages div.message.right img{
    float: right;
    margin-left: 0;
    margin-right: -38px;
}
.message .bubble{
    background:#f0f4f7;
    font-size:13px;
    font-weight:600;
    padding:12px 13px;
    border-radius:5px 5px 5px 0px;
    color:#8495a3;
    position:relative;
    float:left;
}
#chat-messages div.message.right .bubble{
    float:right;
    border-radius:5px 5px 0px 5px ;
}
.bubble .corner{
    background:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-corner.png") 0 0 no-repeat;
    position:absolute;
    width:7px;
    height:7px;
    left:-5px;
    bottom:0;
}
div.message.right .corner{
    background:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-cornerR.png") 0 0 no-repeat;
    left:auto;
    right:-5px;
}
.bubble span{
      color: #aab8c2;
      font-size: 11px;
      position: absolute;
      right: 0;
      bottom: -22px;
}
#sendmessage{
    height:60px;
    border-top:1px solid #e7ebee;
    position:absolute;
    bottom:0;
    right:0px;
    width:100%;
    background:#fff;
    padding-bottm:50px;
}
#sendmessage input{
    border
}
#sendmessage input{
    background:#fff;
    margin:21px 0 0 21px;
    border:none;
    padding:0;
    font-size:14px;
    font-family:"Open Sans", sans-serif;
    font-weight:400px;
    color:#aab8c2;
}
#sendmessage input:focus{
     outline: 0;
}
#sendmessage button{
    background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/send.png") 0 -41px no-repeat;
    width:30px;
    height:30px;
    position:absolute;
    right: 15px;
    top: 23px;
    border:none;
}
#sendmessage button:hover{
    cursor:pointer;
    background-position: 0 0 ;
}
#sendmessage button:focus{
     outline: 0;
}

#close{
    position:absolute;
    top: 8px;
    opacity:0.8;
    right: 10px;
    width:20px;
    height:20px;
    cursor:pointer;
}
#close:hover{
    opacity:1;
}
.cx, .cy{
    background:#fff;
    position:absolute;
    width:0px;
    top:15px;
    right:15px;
    height:3px;
    -webkit-transition: all 250ms ease-in-out;
       -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
         -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
}
.cx.s1, .cy.s1{
    right:5px;
    width:20px;
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cy.s2{
    -ms-transform: rotate(50deg);
    -webkit-transform: rotate(50deg);
    transform: rotate(50deg);
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cy.s3{
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cx.s1{
    right:5px;
    width:20px;
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cx.s2{
    -ms-transform: rotate(140deg);
    -webkit-transform: rotate(140deg);
    transform: rotate(140deg);
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cx.s3{
    -ms-transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
    -webkit-transition: all 100ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
#chatview, #sendmessage {
overflow:hidden;
border-radius:6px;
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
            JuanderPool
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
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="edit_profile">Edit Profile</a></li>
                            <li><a href="logout" onclick=" return confirm('Are you sure you want to logout?')">Logout</a></li>
                          </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    	<div class=" col-lg-3 sidebar-container" >
    	<div id="sidebar-wrapper" class="sidebar-toggle">
    			<div class="profile-usertitle">
    				<div class="profile-usertitle-name">
    					Balinese Villa
    				</div>
    			</div>
    		<ul class="nav">
          <li>
            <a href="home" >
            <i class="fa fa-tachometer"></i>
            Dashboard </a>
          </li>
          <li>
    				<a href="inquiries">
    				<i class="fa fa-commenting"></i>
    			Inquiries</a>
    			</li>
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
<script src="assets/js/calendar.js"></script>
<script src="assets/js/utilities/chat.js"></script>
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
