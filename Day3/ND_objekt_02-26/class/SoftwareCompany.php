<?php
namespace Company;

class SoftwareCompany extends Company {
    protected $programingLanguages;
    public function __construct()
    {
        parent::__construct();
        $programingLanguages = randomProgramingLanguages(3);
    }
}