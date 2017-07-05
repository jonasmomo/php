<?php

  include 'header.inc.php'; 
  
$username="s162273";  
$password="";  
$database="s162273";  

$person=mysql_real_escape_string($_POST['person']);  
$ovelse=mysql_real_escape_string($_POST['ovelse']);  
  
mysql_connect('cube.cs.hioa.no',$username,$password);  
mysql_select_db(s162273) or die( "Får ikke valgt database.");  

$query = "INSERT INTO deltagerliste VALUES ('','$ovelse','$person')";  
mysql_query($query);  

mysql_close();  

if(!$query){  
        echo 'Kunne ikke koble til databasen.';  
} else {  
        echo 'Deltager lagt til. <a href="ovelsedeltager.php">Legg til ny deltager i øvelse.</a><br><a href="index.php">Hovedsiden.</a>';  
}  
