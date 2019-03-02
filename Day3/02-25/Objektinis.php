<!DOCTYPE HTML>  
<html>
<head>
<style>
.red {
    color: red;
}
div.container {
    display: flex;
}
.cont {
    margin-left: 3rem;
    margin-right: 1rem;
}
</style>
</head>

<?php

class ObjektProgr
{
    public $var = 'Labas rytas'; //savybė
    protected $var2 = "Sveiki"; //nekeiciama savybe
    protected $kiausiniai = 3;

    public function h1() //metodas, public nebutinai rasyti, by default public iskart priskiriama
    {
        $naujas = '<h1>'.$this->var.'</h1>';
        return $naujas;
    }
    public function getKiausiniai () //geteris
    {
        return $this->kiausiniai;
    }
     public function setKiausiniai ($kiekis) //seteris
    {
        if($kiekis<3){
            echo 'nemazink kiekio';
        }
        else {
            $this->kiausiniai = $kiekis;
        }
        return $this->kiausiniai;
    }
}

$varNew = new ObjektProgr; //Naujas objektas

// dc($varNew);

// // echo $varNew -> var;
// // $varNew -> var = 'Labas Vakaras';
// // echo '<br>';
// // echo $varNew -> h1();
// // echo '<br>';
// $kitas = new ObjektProgr;
// echo $kitas->getKiausiniai;
// echo '<br>';

?> ////////////////////////////////////////////////////////////////////////////////////////////////<br><?php


class Receptas { //// TEVAS
    protected $druska = 5;
    public $kazkas = 'labas visi';
    public function getDruska()
    {
        return $this->druska;
    }
    public function setDruska($kiekis)
    {
        if($kiekis>5){
            echo 'persuru';
        }
        if($kiekis<3){
            echo 'nevog!!!';
        }
        else {
            $this->druska = $kiekis;
            echo $kiekis;
        }
    }
    private $vertybes = 'keisti negalima';
}

$valgis = new Receptas;

echo $valgis ->setDruska(4);
echo '<br>';

?> ////////////////////////////////////////////////////////////////////////////////////////////////<br><?php

class Vaikas extends Receptas // Vaikas, paveldeja visas tevo savybes; galima dadeti papildomai savybiu, f-ju
{
    public function setDruska($kiekis){
         $this->druska = $kiekis;
    }
    public function keistiVertybes(){
        $this->vertybes = 'niekas';
        echo $this->$vertybes;
    }
}

// echo new Vaikas