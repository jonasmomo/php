<?php include 'header.inc.php'; 

// Connect to server and select database.
mysql_connect("cube.cs.hioa.no", "s162273", "")or die("cannot connect"); 
mysql_select_db("s162273")or die("cannot select DB");


$sql="SELECT * FROM ovelse";
$result=mysql_query($sql);

?>

<table>
  <tr>
    <th colspan="8"><strong>Informasjon om øvelser</strong> </th>
  </tr>

  <tr>
    <td align="center"><strong>Dato</strong></td>
    <td align="center"><strong>Gren</strong></td>
    <td align="center"><strong>Navn</strong></td>
    <td align="center"><strong>Sted</strong></td>
    <td align="center"><strong>Utøvere</strong></td>
    <td align="center"><strong>Publikum</strong></td>
    <td align="center"><strong>Oppdater</strong></td>
    <td align="center"><strong>Slett</strong></td>
  </tr>

  <?php
    while($rows=mysql_fetch_array($result)){
  ?>
   <tr>
    <td><?php echo $rows['dato']; ?></td>
    <td><?php echo $rows['gren']; ?></td>
    <td><?php echo $rows['navn']; ?></td>
    <td><?php echo $rows['sted']; ?></td> 
    <td align="center"><a href="visdeltager.php?id=<?php echo $rows['idOvelse']; ?>">Vis</a></td>
    <td align="center"><a href="vispublikum.php?id=<?php echo $rows['idOvelse']; ?>">Vis</a></td>
    <td align="center"><a href="oppdaterovelse.php?id=<?php echo $rows['idOvelse']; ?>">Oppdater</a></td>
    <td align="center"><a href="slett.inc.php?id=<?php echo $rows['idOvelse']; ?>">Slett</a></td>
  </tr>

  <?php
  }
  ?>
</table>

<?php include 'footer.inc.php'; 