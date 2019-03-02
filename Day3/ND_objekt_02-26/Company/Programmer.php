<?php
namespace Company;

class Programmer extends SoftwareCompany {
    protected $skills, $programmerName;
    public function __construct()
    {
        parent::__construct();
        $this->programmerName = randomName();
        $this->skills = $skillsArray;
    }
    // public function programmerSkills()
    // {
    //     shuffle(parent::$array_ProgramingLanguages);
    //     $this->skills = array(parent::$array_ProgramingLanguages[0], parent::$array_ProgramingLanguages[1]);
    //     return $this->skills;
    // }
   
    public function printInfo() 
    {
        print_r($skills);
        echo 'Programmer name: '.$this->programmerName;
        echo '<br> Skills: '.$this->skills;
        echo '<br> Programming languages: '.$this->programingLanguages;
        echo '<br> Company Name: '.$this->name;
        echo '<br> Employees No: '.$this->employees;
        echo '<br> Turnover: '.$this->turnover;
    }

}

