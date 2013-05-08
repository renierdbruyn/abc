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

echo '<table>';
while($row = mysql_fetch_array($result))
{
   echo '<tr>
          <td>'.$row['Adv_id'].'</td><td>'.$row['Adv_title'].'</tr>';
}
echo '</table>';