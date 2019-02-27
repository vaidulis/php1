<?php
namespace Company;

class Company {
    protected $name, $employees, $turnover;
        public function __construct() //automatiskai pasileidzia iskvietus klase
    {
        require __DIR__.'/function/randomName.php';
        $name = randomName();
        $employees = rand(3,100);
        $turnover = rand(10000,10000000);
    }
}