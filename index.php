<?php

require_once "./fighters/SpearmenClass.php";
require_once "./fighters/ShootersClass.php";
require_once "./fighters/SwordsmenClass.php";

$fighters = new SpearmenClass(5,5,5);
var_dump($fighters->OutputValues());

$fighters = new ShootersClass(5,5,5);
var_dump($fighters->OutputValues());

$fighters = new SwordsmenClass(5,5,5);
var_dump($fighters->OutputValues());
