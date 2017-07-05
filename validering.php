<?php
function valider_og_set_ovelse($ovelse)
{
        $feilstring = null; // bygg evt. feilmelding(er) inn i denne variablen
        if($ovelse->valider_dato($_REQUEST["dato"]))
        {
            $ovelse->set_dato($_REQUEST["dato"]);
        }
        else
        {
            $feilstring .="Datoen er ikke gyldig <br/>";
        }
        if($ovelse->valider_navn($_REQUEST["navn"]))
        {
            $ovelse->set_navn($_REQUEST["navn"]);
        }
        else
        {
            $feilstring.= "Navnet må være mellom 2 og 40 tegn<br/>";
        }
        if($ovelse->valider_gren($_REQUEST["gren"]))
        {
            $ovelse->set_gren($_REQUEST["gren"]);
        }
        else
        {
            $feilstring .= "Grenen må være mellom 2 og 50 tegn<br/>";
        }
        if($ovelse->valider_sted($_REQUEST["sted"]))
        {
            $ovelse->set_sted($_REQUEST["sted"]);
        }
        else
        {
            $feilstring .= "Stedet må være på 8 siffer <br/>";
        }
        return $feilstring;
}
function valider_og_set_personinfo($publikum)
{
        $feilstring = null; // bygg evt. feilmelding(er) inn i denne variablen
        if($publikum->valider_fornavn($_REQUEST["fornavn"]))
        {
            $publikum->set_fornavn($_REQUEST["fornavn"]);
        }
        else
        {
            $feilstring .="Fornavnet må ha mellom 2 og 20 tegn <br/>";
        }
        if($publikum->valider_etternavn($_REQUEST["etternavn"]))
        {
            $publikum->set_etternavn($_REQUEST["etternavn"]);
        }
        else
        {
            $feilstring .="Etternavnet må være mellom 2 og 20 tegn. <br/>";
        }
        if ($publikum->valider_adresse($_REQUEST["adresse"]))
        {
            $publikum->set_adresse($_REQUEST["adresse"]);
        }
        else
        {
            $feilstring .="Adressen må ha mellom 2 og 20 tegn <br/>";
        }
        if ($publikum->valider_postnr($_REQUEST["postnr"]))
        {
            $publikum->set_postnr($_REQUEST["postnr"]);
        }
        else
        {
            $feilstring .="Postnummer må være fire tall. <br/>";
        }
        if ($publikum->valider_poststed($_REQUEST["poststed"]))
        {
            $publikum->set_poststed($_REQUEST["poststed"]);
        }
        else
        {
            $feilstring .="Poststedet må være mellom 2 og 20 tegn<br/>";
        }
        if ($publikum->valider_tlf($_REQUEST["tlf"]))
        {
            $publikum->set_tlf($_REQUEST["tlf"]);
        }
        else
        {
            $feilstring .="Telefonnummeret må være 8 siffer.<br/>";
        }
        return $feilstring;
}
