<?php
namespace Company;

class Company {
    protected $name, $employees, $turnover;
    public function __construct(){
        require_once __DIR__.'/function/randomName.php';
        $this->name = randomName();
        $this->employees = rand(3,100);
        $this->turnover = rand(10000,10000000);
    }
}
