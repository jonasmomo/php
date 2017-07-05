<?php
class Ovelse
{
    private $ovelseId;
    private $dato;
    private $gren;
    private $navn;
    private $sted;
    
    public function set_ovelseId($ovelseId) {$this->ovelseId = $ovelseId;}
    public function get_ovelseId() {return $this->ovelseId; }
    public function set_dato($dato) {$this->dato = $dato;}
    public function get_dato() {return $this->dato;}
    public function valider_dato($dato)
    {return preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dato); }
    public function set_navn($navn) {$this->navn = $navn;}
    public function get_navn() {return $this->navn;}
    public function valider_navn($navn) {return preg_match("/[a-åA-Å. ]{2,20}/",$navn);}
    public function set_gren($gren) {$this->gren = $gren;}
    public function get_gren() {return $this->gren;}
    public function valider_gren($gren) {return preg_match("/[a-åA-Å0-9. ]{2,30}/",$gren);}
    public function set_sted($sted) {$this->sted = $sted;}
    public function get_sted() {return $this->sted;}
    public function valider_sted($sted) {return preg_match("/[a-åA-Å0-9. ]{2,30}/",$sted);}
}
