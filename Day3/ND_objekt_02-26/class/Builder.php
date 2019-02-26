<?php
namespace Company;

class Builder extends ConstructionCompany {
    protected $name, $skills;
    public function __construct()
    {
        parent::__construct();
        $name = randomName();
        $skills = randomBuildingObjects(1);
    }
}