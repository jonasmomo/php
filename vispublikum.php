<?php include 'header.inc.php'; 

  mysql_connect("cube.cs.hioa.no", "s162273", "")or die("får ikke koblet til server"); 
  mysql_select_db("s162273")or die("får ikke velge database");
  
  //Henter databasen for å legge inn i tekstfeltene.
  $id=$_GET['id'];

  $sql="SELECT P.fornavn, P.etternavn, P.spesial FROM ovelse as O, person as P, publikumliste as PL WHERE O.idOvelse = '$id' and P.persontype=2 and O.idOvelse = PL.ovelseId and PL.personId = P.idPerson;";
  $navn= mysql_result(mysql_query("SELECT Navn from ovelse where idOvelse='$id'"),0);
  
  $resultat=mysql_query($sql);
  $antall=mysql_num_rows($resultat);
?>

<form name="form1" method="post" action="oppdater.inc.php">

<table>
  <tr>
    <th colspan="3">
      <?php echo 'Publikum på ',  $navn ;?>
    </th>
  </tr>
  <tr>
    <td align="center"><strong>Fornavn</strong></td>
    <td align="center"><strong>Etternavn</strong></td>
    <td align="center"><strong>Billettype</strong></td>
  </tr>
  <?php
  for($j=0; $j <$antall; $j++)
		{
		$rad=mysql_fetch_row($resultat);

		echo '<tr><td>', $rad[0], '</td>';
		echo '<td>',     $rad[1], '</td>';
		echo '<td>',     $rad[2], '</td></tr>';
		}
	echo '</table><br>'; 	?>
</table>

</form>

<?php include 'footer.inc.php'; 