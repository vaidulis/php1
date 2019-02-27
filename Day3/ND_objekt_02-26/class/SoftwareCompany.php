<?php
namespace Company;

class SoftwareCompany extends Company {
    protected $programingLanguages;
    public function __construct()
    {
        parent::__construct();
        require __DIR__.'/function/randomProgramingLanguages.php';
        $programingLanguages = randomProgramingLanguages(3);
    }
}