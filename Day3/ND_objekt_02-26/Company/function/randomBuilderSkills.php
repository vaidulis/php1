<?php

function randomBuilderSkills($no){
    $builderSkills = array('electrician ', 'plumber ', 'tractor driver ', 'engineer ');
    shuffle($builderSkills);
    $skillSet = '';
    for($x=1; $x<=$no; $x++){
        $skillSet .= $builderSkills[$x];
    }
    return $skillSet;
}

