<?php
class Person
{
    protected $personId;
    protected $fornavn;
    protected $etternavn;
    protected $adresse;
    protected $postnr;
    protected $poststed;
    protected $tlf;
    
    
    public function set_personId($personId) {$this->personId = $personId;}
    public function get_personId() {return $this->personId; }
    public function set_fornavn($fornavn) {$this->fornavn = $fornavn;}
    public function get_fornavn() {return $this->fornavn;}
    public function valider_fornavn($fornavn) {return preg_match("/[a-åA-Å. ]{2,40}/",$fornavn);}
    public function set_etternavn($etternavn) {$this->etternavn = $etternavn;} 
    public function get_etternavn() {return $this->etternavn;}
    public function valider_etternavn($etternavn) {return preg_match("/[a-åA-Å. ]{2,40}/",$etternavn);}
    public function set_adresse($adresse) {$this->adresse = $adresse;}
    public function get_adresse() {return $this->adresse;}
    public function valider_adresse($adresse) {return preg_match("/[a-åA-Å. ]{2,50}/",$adresse);}
    public function set_postnr($postnr) {$this->postnr = $postnr;}
    public function get_postnr() {return $this->postnr;}
    public function valider_postnr($postnr) {return preg_match("/[0-9]{4}/",$postnr);}
    public function set_poststed($poststed) {$this->poststed = $poststed;}
    public function get_poststed() {return $this->poststed;}
    public function valider_poststed($poststed) {return preg_match("/[a-åA-Å. ]{2,20}/",$poststed);}
    public function set_tlf($tlf) {$this->tlf = $tlf;}
    public function get_tlf() {return $this->tlf;}
    public function valider_tlf($tlf) {return preg_match("/[0-9]{8}/",$tlf);}
}
