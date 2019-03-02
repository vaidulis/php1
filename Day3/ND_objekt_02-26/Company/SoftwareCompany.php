<?php
namespace Company;
// include __DIR__.'/Company.php';
class SoftwareCompany extends Company {
    protected $programingLanguages;
    public $skillsArray;
    public function __construct()
    {
        parent::__construct();
        require_once __DIR__.'/function/randomProgramingLanguages.php';
        $this->programingLanguages = randomProgramingLanguages(3);
        $this->skillsArray=implode('',array($languageArray[0], $languageArray[1]));
    }
}

// $a = new SoftwareCompany;
// print_r($a->skillsArray);