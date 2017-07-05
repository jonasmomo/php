<?php include 'header.inc.php'; 

  function connect(){
      mysql_connect('cube.cs.hioa.no','s162273','') or die ("Kunne ikke koble til.");
      mysql_select_db('s162273');
    }
  
  connect();
?>
  
  <h2>Legg publikum til øvelse</h2>
  <?php 
  echo '<form name="form1" method="post" action="registrerovelsepublikum.php">';
    
      echo '<select name="person">';
          $myData = mysql_query("SELECT idPerson, fornavn, etternavn from person WHERE persontype=2");
          while($record = mysql_fetch_array($myData)){
          echo '<option value="' .$record['idPerson'] . '">' . $record['fornavn'] . ' ' . $record['etternavn'] . '</option>' ;
          }
      echo '</select>';

      echo '<select name="ovelse">';
          $myData2 = mysql_query("SELECT idOvelse, navn from ovelse");
          while($record2 = mysql_fetch_array($myData2)){
          echo '<option value="' .$record2['idOvelse'] . '">' . $record2['navn'] .  '</option>' ;
      }
      echo '</select>';
    
      echo '<input type="submit" name="Submit" value="Registrer">';
      echo '</form>';

include 'footer.inc.php'; 