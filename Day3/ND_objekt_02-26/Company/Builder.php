<?php
namespace Company;

class Builder extends ConstructionCompany {
    protected $buildName, $skills;    
    public function __construct()
    {
        require_once __DIR__.'/function/randomBuilderSkills.php';
        parent::__construct();
        $this->buildName = randomName();
        $this->skills = randomBuilderSkills(1);
    }
    public function printInfo() 
    {
        echo 'Builder name: '.$this->buildName;
        echo '<br> Skills: '.$this->skills;
        echo '<br> Objects: '.$this->buildingObjects;
        echo '<br> Company Name: '.$this->name;
        echo '<br> Employees No: '.$this->employees;
        echo '<br> Turnover: '.$this->turnover;
    }
}