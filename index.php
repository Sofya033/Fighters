<?php

require_once "./fighters/SpearmenClass.php";
require_once "./fighters/ShootersClass.php";
require_once "./fighters/SwordsmenClass.php";

$fighters = new SpearmenClass("Копейщик",9,7,5);
var_dump($fighters);

$fighters = new ShootersClass("Стрелок",7,6,2);
var_dump($fighters);

$fighters = new SwordsmenClass("Мечник",8,10,7);
var_dump($fighters);
