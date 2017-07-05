<?php include 'header.inc.php'; ?>

<h2>Legg til person</h2>

<form action="" method ="post">
  <table>
    <tr>
      <td>Fornavn:</td>
      <td><input type="text" name="fornavn"></td>
    </tr>
    <tr>
      <td>Etternavn:</td>
      <td><input type="text" name="etternavn"></td>
	  </tr>
    <tr>
      <td>Adresse:</td>
      <td><input type="text" name="adresse"></td>
	  </tr>
	  <tr>
      <td>Postnr:</td>
      <td><input type="text" name="postnr"></td>
	  </tr>
	  <tr>
      <td>Poststed:</td>
      <td><input type="text" name="poststed"></td>
	  </tr>
	  <tr>
      <td>Telefonnr:</td>
      <td><input type="text" name="tlf"></td>
	  </tr>
    <tr>
      <td>Billettype:</td>
      <td>
        <input type="radio" name="spesial" value="Senior" /> Senior <br>
        <input type="radio" name="spesial" value="Voksen" /> Voksen <br>
        <input type="radio" name="spesial" value="Barn" /> Barn 
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
 </tr>
  </table>
</form>
<?php

include("DB_class_ovelse_person.php");
include("class_person.php");
include("class_deltager.php");
include("class_publikum.php");
include("class_ovelse.php");
include("validering.php");

if(isset($_REQUEST["Submit"]))
{
  $person= new Publikum();
  $feilstring = valider_og_set_personinfo($person);
  $Publikum_db = new DB_class_ovelse_person();
  $person->set_billettype($_REQUEST["spesial"]);
  $Publikum_db->lagreOvelsePublikum($person);
}

?>

<?php include 'footer.inc.php'; 

