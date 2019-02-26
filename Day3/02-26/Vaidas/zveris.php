<?php
namespace Vaidas; //tai nurodo kam tai priklauso

class Zveris {
    protected $tipas;
    function setTipas($zveries_tipas){
        $lenght = strlen($zveries_tipas);
        if ($lenght>10 || $lenght<2){
            echo 'Blogas pavadinimas <br>';
        }
        else $this->tipas = $zveries_tipas;
    }
}