<?php
class Publikum extends Person
{
    private $billettype;
    public function set_billettype($billettype) {$this->billettype = $billettype;}
    public function get_billettype() {return $this->billettype;}
    public function valider_billettype($billettype)
    {   
        if(!preg_match("/[a-åA-Å. ]{2,40}/",$billettype))
        {
            return "Kun bokstaver godtas.<br/>";
        }
        else
        {
            $this->billettype=$billettype;
        }
    }
}