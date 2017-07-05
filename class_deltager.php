<?php
class Deltager extends Person
{
    private $nasjonalitet;
    public function set_nasjonalitet($nasjonalitet) {$this->nasjonalitet = $nasjonalitet;}
    public function get_nasjonalitet() {return $this->nasjonalitet;}
    public function valider_nasjonalitet($nasjonalitet)
    {  
        if(!preg_match("/[a-åA-Å. ]{2,40}/",$nasjonalitet))
        {
            return "Kun bokstaver godtas.<br/>";
        }
        else
        {
            $this->nasjonalitet=$nasjonalitet;
        }
    }
}