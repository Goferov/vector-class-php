<?php
require_once 'src/Vector.php';

$v1 = new Vector(5,4);
$v2 = new Vector(1,2);
var_dump($v1->dot($v2));
