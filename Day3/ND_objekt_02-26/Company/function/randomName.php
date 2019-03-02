<?php

function randomName(){
    $length = rand(5,12);
    $random_string=chr(rand(65,90));
    while(strlen($random_string)<$length) {
        $random_string .= chr(rand(97,122));           
    }
    return $random_string;
}

        
// echo randomName();
                

