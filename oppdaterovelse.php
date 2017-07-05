<?php include 'header.inc.php'; 

  mysql_connect("cube.cs.hioa.no", "s162273", "")or die("får ikke koblet til server"); 
  mysql_select_db("s162273")or die("får ikke velge database");
  
  //Henter databasen for å legge inn i tekstfeltene.
  $id=$_GET['id'];

  $sql="SELECT * FROM ovelse WHERE idOvelse = '$id'";
  $result=mysql_query($sql);
  $rows=mysql_fetch_array($result);
?>

<form name="form1" method="post" action="oppdater.inc.php">

<table>
  <tr>
    <td align="center"><strong>Dato</strong></td>
    <td align="center"><strong>Gren</strong></td>
    <td align="center"><strong>Navn</strong></td>
    <td align="center"><strong>Sted</strong></td>
  </tr>
  
  <tr>
    <td align="center">
      <input name="Dato" type="text" id="dato" value="<?php echo $rows['dato']; ?>" size= "15"/>
    </td>
    <td align="center">
      <input name="Gren" type="text" id="gren" value="<?php echo $rows['gren']; ?>" size="15"/>
    </td>
    <td align="center">
      <input name="Navn" type="text" id="navn" value="<?php echo $rows['navn']; ?>" size="15"/>
    </td>
    <td align="center">
      <input name="Sted" type="text" id="sted" value="<?php echo $rows['sted']; ?>" size="15"/>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <input name="idOvelse" type="hidden" id="idOvelse" value="<?php echo $rows['idOvelse']; ?>"/>
       <a href="oppdater.inc.php?id=<?php echo $rows['idOvelse']; ?>"><input type="submit" name="Submit" value="Registrer" /></a>
    </td>
  </tr>
</table>

</form>

</body>
</html>

