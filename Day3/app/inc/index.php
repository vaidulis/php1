<?php
defined('DIR') or exit;


$dir = [];
if ($handle = opendir(DIR.'files')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry == '.' || $entry == '..'){
            continue;
        }
        $link
        $dir[] =  $entry;
    }
    closedir($handle);
 }







?>