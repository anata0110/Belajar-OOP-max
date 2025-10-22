<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Maxwell";
$manager->sayHello("Anata");

$vp = new VicePresident();
$vp->name = "Anata";
$vp->sayHello("Maxwell");
