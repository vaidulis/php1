<?php
namespace Company;

class Builder extends ConstructionCompany {
    protected $buildName, $skills;
    public function __construct()
    {
        parent::__construct();
        require __DIR__.'/function/randomName.php';
        require __DIR__.'/function/randomBuildingObjects.php';
        $buildName = randomName();
        $skills = randomBuildingObjects(1);
    }
    public function printInfo() {
        echo 'Builder name: '.$this->buildName;
        echo '<br> Skills: '.$this->skills;
        echo '<br> Objects: '.$this->buildingObjects;
        echo '<br> Company Name: '.$this->name;
        echo '<br> Employees No: '.$this->employees;
        echo '<br> Turnover: '.$this->turnover;
    }
}