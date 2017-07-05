<?php 

  include 'header.inc.php'; 

?>
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
      <td>Nasjonalitet:</td>
      <td>
        <select name="spesial">
          <option value="Norge">Norge</option>
          <option value="Sverige">Sverige</option>
          <option value="Finland">Finland</option>
          <option value="Russland">Russland</option>
          <option value="Ukraina">Ukraina</option>
          <option value="Estland">Estland</option>
          <option value="Polen">Polen</option>
          <option value="Tyskland">Tyskland</option>
          <option value="Østerrike">Østerrike</option>
          <option value="Tsjekkia">Tsjekkia</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Italia">Italia</option>
          <option value="Sveits">Sveits</option>
          <option value="Frankrike">Frankrike</option>
          <option value="USA">USA</option>
          <option value="Canada">Canada</option>
          <option value="Japan">Japan</option>
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
include("class_person.php");
include("class_deltager.php");
include("validering.php");

if(isset($_REQUEST["Submit"]))
{
        $person= new Deltager();
        $feilstring = valider_og_set_personinfo($person);
        $Publikum_db = new DB_class_ovelse_person();
        $person->set_nasjonalitet($_REQUEST["spesial"]);
        $Publikum_db->lagreOvelseDeltager($person);
}

include 'footer.inc.php'; 

