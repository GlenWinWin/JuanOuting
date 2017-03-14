@extends('layouts.resortOwnerLayout')

@section('title')
  Inquiries
@stop

@section('body-content')
<div class="col-lg-9 body-container" style="margin-top:15px">
  <div class="r-title">
    <div class="col-sm-12 deck" >
      <div class="resort-name">
        Inquiries
      </div>
    </div>
    <div class="dashboard-header-name">
    </div>
  </div>
  <center>
  <div id="chatbox">
    <div id="friendslist">
        <div id="topmenu">
            <span class="friends"></span>
            <span class="chats"></span>
            <span class="history"></span>
        </div>

        <div id="friends">
            <div class="friend">
                <img src="assets/images/profile_pictures/glen.jpg" />
                <p>
                    <strong>Miro Badev</strong>
                    <span>mirobadev@gmail.com</span>
                </p>
                <div class="status"></div>
            </div>

            <div class="friend">
                <img src="assets/images/profile_pictures/jason.jpg" />
                <p>
                    <strong>Martin Joseph</strong>
                    <span>marjoseph@gmail.com</span>
                </p>
                <div class="status"></div>
            </div>

            <div class="friend">
                <img src="assets/images/profile_pictures/joyce.jpg" />
                <p>
                    <strong>Tomas Kennedy</strong>
                    <span>tomaskennedy@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>

            <div class="friend">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4_copy.jpg" />
                <p>
                    <strong>Enrique Sutton</strong>
                    <span>enriquesutton@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>

            <div class="friend">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5_copy.jpg" />
                <p>
                <strong>    Darnell Strickland</strong>
                    <span>darnellstrickland@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>

            <div id="search">
                <input type="text" id="searchfield" value="Search contacts..." />
            </div>

        </div>

    </div>
  </center>
  <center>
    <div id="chatview" class="p1" style="width:100%;padding-left:8px;padding-right:8px;">
        <div id="profile">

            <div id="close">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>

            <p>Miro Badev</p>
            <span>miro@badev@gmail.com</span>
        </div>
        <div id="chat-messages">
            <label>Thursday 02</label>

            <div class="message">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                <div class="bubble">
                    Magkano po ang babayaran kapag Whole Day?
                    <div class="corner"></div>
                    <span>3 min</span>
                </div>
            </div>

            <div class="message right">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <div class="bubble">
                    5000 pesos po.
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>

            <div class="message">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                <div class="bubble">
                    Ganun po ba, Salamat po.
                    <div class="corner"></div>
                    <span>Now</span>
                </div>
            </div>

            <div class="message right">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <div class="bubble">
                    Wala pong anuman. <emoji class="happy"/>
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>
        </div>

        <div id="sendmessage">
            <input type="text" value="Send message..." />
            <button id="send"></button>
        </div>

    </div>
  </center>
</div>
</div>
@stop
