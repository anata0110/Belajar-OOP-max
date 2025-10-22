<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Maxwell");
var_dump($company);

$company->programmer = new BackendProgrammer("Maxwell");
var_dump($company);

$company->programmer = new FrontendProgrammer("Maxwell");
var_dump($company);

sayHelloProgrammer(new Programmer("anata"));
sayHelloProgrammer(new BackendProgrammer("anata"));
sayHelloProgrammer(new FrontendProgrammer("anata"));