<?php

function randomProgramingLanguages(){
    $languages = array('PHP ', 'Pascal ', 'Go ', 'C++ ', 'JAVA ', 'Phyton ');
    shuffle($languages);
    $languageSet = [$languages[0], $languages[1], $languages[3]];
    return $languageSet;    
}
    
// $languageArray = explode(" ",trim(randomProgramingLanguages(3)));
// shuffle($languageArray);
// $skillsArray = array($languageArray[0], $languageArray[1]);
print_r(randomProgramingLanguages());