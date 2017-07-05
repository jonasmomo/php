<?php
Class DB_class_ovelse_person
{
    function lagreOvelsePublikum($publikum)
    {
        $fornavn=$publikum->get_fornavn();
        $etternavn=$publikum->get_etternavn();
        $adresse=$publikum->get_adresse();
        $postnr=$publikum->get_postnr();
        $poststed=$publikum->get_poststed();
        $tlf=$publikum->get_tlf();
        $billettype=$publikum->get_billettype();
        $db = new mysqli('cube.cs.hioa.no', 's162273', '', 's162273');
        if(!$db){
          die("Får ikke koblet til");
        }
           
        $sql = "INSERT INTO person (fornavn,etternavn,adresse,postnr,poststed,tlf,spesial,persontype)";
        $sql.= "VALUES ('$fornavn','$etternavn','$adresse','$postnr','$poststed','$tlf','$billettype','2')";
        $resultat=$db->query($sql);
        if(!$resultat)
        {
            echo "Feil i databseinnsetting!<br/>";
            trigger_error($db->error);
        }
        else
        {
            $antallRader = $db->affected_rows;
            if($antallRader==0)
            {
                trigger_error("Insert return 0 rows");
                echo "Kunne ikke sette inn dataene i databasen!";
            }
        }
    } 
    function lagreOvelseDeltager($deltager)
    {
        $fornavn=$deltager->get_fornavn();
        $etternavn=$deltager->get_etternavn();
        $adresse=$deltager->get_adresse();
        $postnr=$deltager->get_postnr();
        $poststed=$deltager->get_poststed();
        $tlf=$deltager->get_tlf();
        $nasjonalitet=$deltager->get_nasjonalitet();
        $db = new mysqli('cube.cs.hioa.no', 's162273', '', 's162273');
        if(!$db){
          die("Får ikke koblet til");
        }
           
        $sql = "INSERT INTO person (fornavn,etternavn,adresse,postnr,poststed,tlf,spesial,persontype)";
        $sql.= "VALUES ('$fornavn','$etternavn','$adresse','$postnr','$poststed','$tlf','$nasjonalitet','1')";
        $resultat=$db->query($sql);
        if(!$resultat)
        {
            echo "Feil i databseinnsetting!<br/>";
            trigger_error($db->error);
        }
        else
        {
            $antallRader = $db->affected_rows;
            if($antallRader==0)
            {
                trigger_error("Insert return 0 rows");
                echo "Kunne ikke sette inn dataene i databasen!";
            }
        }
    }
    function lagreOvelse($ovelse)
    {
        $navn=$ovelse->get_navn();
        $gren=$ovelse->get_gren();
        $dato=$ovelse->get_dato();
        $sted=$ovelse->get_sted();
        $db = new mysqli('cube.cs.hioa.no', 's162273', '', 's162273');
        if(!$db){
          die("Får ikke koblet til");
        }
           
        $sql = "INSERT INTO ovelse (dato,navn,gren,sted)";
        $sql.= "VALUES ('$dato','$navn','$gren','$sted')";
        $resultat=$db->query($sql);
        if(!$resultat)
        {
            echo "Feil i databseinnsetting!<br/>";
            trigger_error($db->error);
        }
        else
        {
            $antallRader = $db->affected_rows;
            if($antallRader==0)
            {
                trigger_error("Insert return 0 rows");
                echo "Kunne ikke sette inn dataene i databasen!";
            }
        }
    }
}
