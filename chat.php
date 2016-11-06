<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Chatit</title>
        <link rel="stylesheet" type="text/css" href="./css/normalize.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
        <script type="text/javascript" src="./js/chat.js"></script>
    </head>
    <body>
    	<br/>
        <p align="center">
            Hey, <big><b> username <!--<?php echo $_SESSION['user_name']; ?> -->  </b></big>. You are logged in. Try to close this browser tab and open it again. Still logged in! ;)
            &nbsp; &nbsp;
			<button type="button" class="btn btn-primary" >LOG OUT</button>

       </p>
        <div class="ui">
            <div class="left-menu">
                <form action="#" class="search">
                    <input placeholder="search..." type="search" name="" id="search_box" onfocus="toBlur()" onblur="toNormal()" onKeyPress="search()" onKeyUp="search()">
                </form>
                <menu class="list-friends" id="convo_list">
                </menu>
            </div>
            <div class="chat">
                <div class="top">
                    <div class="avatar"  >
                        <img class="images" src="./img/dp3.jpg" style = "margin-top: -70px;">
                    </div>
                    <div class="info" >
                        <div class="name" style = "margin-top: 25px;">Daniel Isaac
                        	<a href="" onclick="prompt('Enter email id')";> <img src='./img/ic_email_black_24dp_2x.png' style = "margin-left: 380px; margin-top: -35px;"  /> </a>
                        </div>
                    </div>
                    <i class="fa fa-star"></i>
                </div>
                <ul class="messages" id="mess"></ul>
                <div class="write-form">
                    <textarea placeholder="Type your message" name="e" id="texxt"  rows="2"></textarea>
                    <i class="fa fa-picture-o"> </i> &nbsp; &nbsp; &nbsp;
                    <i class="fa fa-file-image-o"> </i>
                    <span class="send" onclick = "insertMsg()">Send</span>
                </div>
            </div>
        </div>
    </body>
</html>
