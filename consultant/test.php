<?php
require_once ('classes/mysql.php');
$db = new Mysql();
$db->connect();
/**
require_once("config/mysql.php");
require('classes/Database.class.php');
$db = new Database();
$db->getDatabaseConnection();
 * 
 */

echo 'Hello';
//$query= "SELECT ad.Adv_id, ad.Ap_id, ad.Adv_title, ap.Ap_name FROM applicant_jobs, advert, applicant ";
$query = "SELECT Adv_id, Adv_title FROM adverts";
$result = mysql_query($query) or die(mysql_error());

while ($row = mysql_fetch_row($result)) {
          echo "<table border=\"1\" align=\"center\">";
                            echo "<tr><th>Advert ID</th>";
                            echo "<th>Advert Title</th></tr>";
                            while ($row = mysql_fetch_assoc($result)) {
                                for ($i = 0; $i<=1 ; $i++) {
                                    //  printf("%s (%s) <br/>", $row[0], $row[1]);
                                    //echo"Job id: $row[$i] &nbsp;";                                               // echo "Job title: $title <br/>";
                                    echo "<tr><td>";
                                    echo $row["Adv_id"];
                                    echo "</td><td>";                                    
                                    echo $row["Adv_title"];
                                    echo "</td></tr>";
                                }
                            }
                            }