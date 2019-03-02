<?php

class Oras {
    public $temp;
    public static $metuLaikas = 'vasara';
    public function temperatura($laipsn){
        $this->temp = $laipsn;
        return $this->temp;
    }
}