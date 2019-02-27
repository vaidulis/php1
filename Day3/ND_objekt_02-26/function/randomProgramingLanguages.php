<?php
namespace Company;

function randomProgramingLanguages($no){
    $languages = array('PHP ', 'Pascal ', 'Go ', 'C++ ', 'JAVA ', 'Phyton ');
    shuffle($languages);
    $languageSet = '';
    for($x=1; $x<=$no; $x++){
        $languageSet .= $languages[$x];
    }
     return $languageSet;
}
// echo randomProgramingLanguages(4);