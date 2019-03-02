<?php
namespace Company;

class ConstructionCompany extends Company {
    protected $buildingObjects;    
    public function __construct()
    {
        require_once __DIR__.'/function/randomBuildingObjects.php';
        parent::__construct();
        $this->buildingObjects = randomBuildingObjects(4);
    }
}

   
