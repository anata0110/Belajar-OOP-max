<?php

require_once "data/Person.php";

$eko = new Person("Maxwell", "Anata");
$eko->name = "Eko";
$eko->sayHello("ANATA");

$maxwell = new Person("Anata", "Maxwell");
$maxwell->name = "Maxwell";
$maxwell->sayHello(null);

$anata->info();
$maxwell->info();