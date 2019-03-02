<?php

class Miestas extends Oras{
    public $name;
    public function miestoPavadinimas($pav) {
        $this->name = $pav;
        return $this-> name;
    }
}