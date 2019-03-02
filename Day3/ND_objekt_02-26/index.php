<?php
require __DIR__.'/autoload.php';

$statyb = new Company\Builder;
echo $statyb->printInfo();
echo '<br><br>';
$programersi = new Company\Programmer;
echo $programersi->printInfo();