<?php

function randomProgramingLanguages($no){
    $languages = array('PHP ', 'Pascal ', 'Go ', 'C++ ', 'JAVA ', 'Phyton ');
    shuffle($languages);
    $languageSet = '';
    for($x=1; $x<=$no; $x++){      
        $languageSet .= $languages[$x];
    }
    return $languageSet;    
}
    
$languageArray = explode(" ",trim(randomProgramingLanguages(3)));
shuffle($languageArray);
// $skillsArray = array($languageArray[0], $languageArray[1]);
