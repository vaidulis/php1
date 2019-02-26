<?php
namespace Company;

class Programmer extends SoftwareCompany {
    protected $skills;
    protected $name;
    public function __construct()
    {
        parent::__construct();
        $skills = randomProgramingLanguages(2);
        $name = randomName();
    }

}