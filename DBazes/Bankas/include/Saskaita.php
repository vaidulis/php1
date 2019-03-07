<?php

class Saskaita {
    public $firstName, $secondName, $sum;
    public function newSaskaita()
    {
        $this->sum = 0;
        $this->firstName = $_POST['vardas'];
        $this->secondName = $_POST['pavarde'];
        $sql = "INSERT INTO `table1` (`firstname`, `lastname`, `sum`)
        VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$firstName, $secondName, $sum]);
        $stmt = $pdo->query($sql);
    }  
    
    public function deleteSaskaita()
    {
        if($this->sum = 0){
            $sql = "DELETE FROM `table1` WHERE `firstname` = $this->firstname";
        }     
        else echo 'Sąskaitoje yra lėšų!!!';
    }  
    
    public function addToAccount()
    {
        $sql = "SELECT `sum` FROM `table1`"
        $this->sum += $_POST['addSum'];
    }
     public function chargeAccount()
    {
        if(($this->sum - $_POST['chargeSum'])>0){
            $this->sum -= $_POST['chargeSum'];
        }
        else echo 'Sąskaitoje nepakanka lėšų!!!';
    }
} 

