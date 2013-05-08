<?php
session_start();
?>
<html>
    <head>
        <style>
            div{background:#B1B1B1;
                width:100%;
                position:absolute;
                right:4%;
                left:4%;
                height:60px;}

            .clearWhite{background:#B1B1B1;
                        color:blue;
                        border:0px solid #0000FF lucida console;
                        font-size:23px;
                        position:absolute;
                        left:2%;
                        top:26%;}

            .loginLeft {position:absolute;
                        right:2%;
                        font-size:23px;
                        color:blue;
                        font-family:lucida console;
                        top:30%;
                        text-decoration:none;}
            </style>
        </head>
        <body>
            <div class="div">
            <input class="clearWhite" type="text" name="dateAndTime" value="Date and Time"/>
            <a class="loginLeft" href="loginPage.php" target="mainPage">Login</a>
        </div>
    </body>
</html>