<?php

  include 'header.inc.php'; ?>
  
  <form action="" method ="post">
  <table>
    <tr>
      <td>Dato:</td>
      <td><input type="text" name="dato" value="yyyy-mm-dd"></td>
    </tr>
    <tr>
      <td>Gren:</td>
      <td>
        <select name="gren">
          <option value="Langrenn">Langrenn</option>
          <option value="Kombinert">Kombinert</option>
          <option value="Hopp">Hopp</option>
        </select>
      </td>
	  </tr>
    <tr>
      <td>Navn:</td>
      <td><input type="text" name="navn"></td>
	  </tr>
	      <tr>
      <td>Sted:</td>
      <td>
        <select name="sted">
          <option value="Hoppbakken">Hoppbakken</option>
          <option value="Skistadion">Skistadion</option>
          <option value="Hoppbakken og skistadion">Hoppbakken og skistadion</option>
        </select>
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
include("class_ovelse.php");
include("validering.php");

if(isset($_REQUEST["Submit"]))
{
        $ovelse= new Ovelse();
        $feilstring = valider_og_set_ovelse($ovelse);
        $Ovelse_db = new DB_class_ovelse_person();
        $Ovelse_db->lagreOvelse($ovelse);
}
  
  include 'footer.inc.php';
  
?>
