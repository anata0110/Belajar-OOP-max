<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Max");
$person->hello("well");

$person->name = "Maxwell";
var_dump($person);

$person->run();