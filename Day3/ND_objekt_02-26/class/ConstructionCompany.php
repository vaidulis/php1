<?php
namespace Company;

class ConstructionCompany extends Company {
    protected $buildingObjects;
    public function __construct()
    {
        parent::__construct();
        require __DIR__.'/function/randomBuildingObjects.php';
        $buildingObjects = randomBuildingObjects(4);
    }
}

   
