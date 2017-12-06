<?php

require_once 'robot.php';
require_once 'hewan.php';

$hewan = new hewan('auauauau',15);

// $robot->setSuara('auuu auuu');
// $robot->setBerat(30);

echo 'robot bersuara '.$hewan->getSuara().'<br> dan mempunyai berat '.$hewan->getBerat();




 ?>
