<?php

require_once "data/Person.php";

$person = new Person("Maxwell", "Anata");
$person->name = "anata";
$person->address = "maxwell";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("ANATA", null);
$person2->name = "MAXWELL";
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];
