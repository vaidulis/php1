<?php
namespace Vaidas;

class Zoosodas extends Priziuretojas {

    public function __construct() //automatiskai pasileidzia iskvietus klase
    {
        parent::__construct();
        echo 'pasileido';
    }
    public function info()
    {
        echo 'Zveris: '.$this->tipas .'<br>';
        echo 'Priziuretojas: '.$this->name;
    }
}

