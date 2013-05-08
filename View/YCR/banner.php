<?php
session_start();
?>
<html>
    <head>
        <style>
            .banner{width:170%;
                    height:200px;
                    position:absolute;
                    width:98%;
                    right:2%;
                    left:2%;
                    display:-webkit-box;}

            div{background:#B1B1B1;
                width:98%;
                position:absolute;
                right:2%;
                left:2%;
                height:40px;
                top:220px;
                display:-webkit-box;
                bottom:0px;
                
            }

            .clearWhite{background:#B1B1B1;
                        color:blue;
                        border:0px solid #0000FF lucida console;
                        font-size:23px;
                        position:absolute;
                        left:2%;
                        top:7%;}

            .loginLeft {position:absolute;
                        right:4%;
                        font-size:23px;
                        color:blue;
                        font-family:lucida console;
                        top:20%;
                        text-decoration:none;}	

            .loginLeft1 {position:absolute;
                         right:13%;
                         font-size:23px;
                         color:blue;
                         font-family:lucida console;
                         top:20%;
                         text-decoration:none;}
            </style>

        </head>
        <body >

           <!-- <a href="YCR.php" target="mainPage"><img class="banner" src="../images/logo3.jpg"/></a>-->

        <div class="div">
            <input class="clearWhite" type="text" name="dateAndTime" value="clock()"/>
            <!--<a class="loginLeft" href="../Log/Logout.php" target="_top">Logout</a>-->
            <a class="loginLeft1" href="../Log/index.php" target="banner" >Login</a>
        </div>
        <script>
            var int = self.setInterval(function() {
                clock();
            }, 1000);
            function clock()
            {
                var d = new Date();
                var t = d.toLocaleDateString();
                document.getElementById("dateAndTime").value = t;
            }
        </script>

    </body>
</html>