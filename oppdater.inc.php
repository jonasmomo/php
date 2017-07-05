<?php

  include 'header.inc.php';


  mysql_connect("cube.cs.hioa.no", "s162273", "")or die("får ikke koblet til server"); 
  mysql_select_db("s162273")or die("får ikke velge database");

  $sql="UPDATE ovelse SET Dato='".$_POST['Dato']."', Gren='".$_POST['Gren']."', Sted='".$_POST['Sted']."', Navn='".$_POST['Navn']."' WHERE idOvelse='".intval($_REQUEST['idOvelse'])."'";
  $result=mysql_query($sql) or die ("Fikk ikke resulater fra databasen");

  if($result){
  echo "Suksess!";
  echo "<BR>";
  echo "<a href='index.php'>Tilbake til hovedside</a>";
  }

  else {
  echo "Det oppsto en feil. Prøv igjen.<br><a href='endreovelse.php'>Endre øvelse</a><br><a href='index.php'>Tilbake til hovedside</a> ";
}
