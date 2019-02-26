<?php
namespace Company;

class ConstructionCompany extends Company {
    protected $buildingObjects;
    public function __construct()
    {
        parent::__construct();
        $buildingObjects = randomBuildingObjects(4);
    }
}

   
