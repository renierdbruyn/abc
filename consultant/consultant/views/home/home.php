<?php
//include_once ('../classes/mysql.php');


/**
  //$query= "SELECT ad.Adv_id, ad.Ap_id, ad.Adv_title, ap.Ap_name FROM applicant_jobs, advert, applicant ";
 * 
 */
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Consultant profile</title>
        <meta name="robots" content="index, follow" />

        <!-- CSS files -->
        <link rel="stylesheet" href="../css/reset.css" />
        <link rel="stylesheet" href="../css/nivo-slider.css" />
        <link rel="stylesheet" href="../css/prettyPhoto.css" />
        <link rel="stylesheet" href="../css/Sstyle.css" />
        <link rel="stylesheet" type="text/css" media="all" href="../css/jScrollPane.css" />
        <!-- JS files -->

        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="../js/jScrollPane.js"></script>


        <script type="text/javascript" src="../js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script><!--slider-->		


        <script type="text/javascript">

            $(function()
            {
                // this initialises the demo scollpanes on the page.
                $('#pane1, #pane2, #pane3').jScrollPane();

            });

        </script>
        <script>
            function validateForm()
            {
                var x = document.forms["job upload"]["adv_name"].value;
                if (x === null || x === "")
                {
                    alert("job advert must be filled out");
                    return false;
                }
                var y = document.forms["job upload"]["adv_desc"].value;
                if (y === null || y === "")
                {
                    alert("job description must be filled out");
                    return false;
                }
            }
        </script>
        <script type="text/javascript" src="../js/cufon-yui.js"></script>
        <script type="text/javascript" src="../js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="../js/jquery.tinycarousel.min.js"></script>
        <script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>

    </head>
    <body>
        <h1 class="color_orange">CONSULTANT PROFILE:</h1>


        <div id="main"> 
            <!-- header start -->
            <header>
                <a href="#" id="logo"><h1> <span class="color_white">You</span><span class="color_red">Choose</span><span class="color_white">Recruit</span></h1></a>
            </header>
            <!-- header end-->

            <!-- content start-->
            <dl id="content">

                <!-- main tab start-->
                <dt class="dt1"><a href="#"></a></dt>
                <dd id="page1">
                    <div class="inner">
                        <div id="slider">
                            <img src="../img/slider/group.jpg" alt=""  title="<h4>Welcome to Your Consultant Profile </h4>">
                            <img src="../img/slider/img01.jpg" alt=""  title="">

                        </div>
                </dd>
                <!-- main tab end-->

                <!-- Job list tab start-->
                <dt class="dt2"><a href="#"></a></dt>
                <dd id="page2">
                    <div class="inner">
                        <article>
                            <h1 class="color_orange">Job ID List:</h1>
                            <?php                            
                            $database = new Mysql();
                            $database->connect();                           
                            /** $query = "SELECT Adv_id, Adv_title FROM adverts";
                              $result = mysql_query($query) or die(mysql_error());

                              echo '<table>';
                              while ($row = mysql_fetch_array($result)) {
                              echo '<tr>
                              <td>' . $row['Adv_id'] . '</td><td>' . $row['Adv_title'] . '</tr>';
                              }
                              echo '</table>';
                             * 
                             */
                            ?>
                        </article>
                    </div>
                </dd>
                <!-- Joblist tab end-->       


                <!--Vacant Job tab start-->
                <dt class="dt3"><a href="#"></a></dt>
                <dd id="page3">
                    <div class="inner">
                        <article>
                            <h1 class="color_orange">List of Vacant Job Adverts:</h1>
                            <h6>The consultant is able to view the previously uploaded job adverts or Upload the new Job Adverts.
                            </h6>

                            <iframe width="500" height="400" name ="upload" src="upload.src.php" scrolling="no" frameborder="0" > </iframe>

                        </article>
                    </div>
                </dd>
                <!-- Vacant Job tab end-->

                <!-- Ranking tab start-->
                <dt class="dt4"><a href="#"></a></dt>
                <dd id="page4">
                    <div class="inner">
                        <article>
                            <h1 class="color_orange">Ranking of Applicants for that particular Job ID:</h1>

                            <div id="pane2" class="scroll-pane" >

                                <h6>Ranked List of Candidates</h6>                    



                            </div>

                        </article>
                    </div>
                </dd>
                <!-- Ranking tab end-->

                <!-- Comments tab start-->     
                <dt class="dt5"><a href="#"></a></dt>
                <dd id="page5">
                    <div class="inner" >
                        <article>
                            <h1 class="color_orange">Consultant Comments:</h1>
                            <?php
                            if (isset($_POST['save'])) {

                                $data = mysql_real_escape_string($_POST['comments']);
                                mysql_query("UPDATE consultant SET comments ='$data' WHERE user_name = '$_SESSION[user_name]' ") or die();
                                echo "<script> alert('comment added'); </script>";
                            }
                            ?>
                        </article>
                        <textarea rows="15" cols="80" name='comments'></textarea>
                        <input type='submit' name='save'/>
                    </div>
                </dd>
                <!-- Comments tab end-->    


            </dl>
            <!-- content end-->

        </div>

        <!-- footer start -->
        <footer>
            <p class="privacy "> <a href="#" rel="privacy"></a>  </p>
        </footer>
        <!-- footer end -->

        <script type="text/javascript" src="../js/general.js"></script>

    </body>
</html>