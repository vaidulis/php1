<?php
namespace Vaidas;

class Priziuretojas extends Zveris {
    public function __construct() //automatiskai pasileidzia iskvietus klase
    {
        echo 'pasileido Priziuretojas ';
    }
    protected $name;
    function setVardas($priziuretojo_vardas){
        $lenght = strlen($priziuretojo_vardas);
        if ($lenght>20 || $lenght<2){
            echo 'Blogas vardas <br>';
        }
        else $this->name = $priziuretojo_vardas;
    }
    // protected $priziurimas_zveris;
    // function setZveri ($zveries_tipas){
    //     if ($zveries_tipas == $tipas){
    //         $zveries_tipas = $tipas
    //     }
    // }
}