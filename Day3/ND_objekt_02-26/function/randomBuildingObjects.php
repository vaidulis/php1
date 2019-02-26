<?php
namespace Company;

function randomBuildingObjects($no){
    $objects = array('Houses ', 'Bridges ', 'Offices ', 'Roads ', 'Gardens ', 'Railroads ', 'Canals ', 'Aqueduct ', 'Stadions ');
    shuffle($objects);
    $objectSet = '';
    for($x=1; $x<=$no; $x++){
        $objectSet .= $objects[$x];
    }
    return $objectSet;
}

