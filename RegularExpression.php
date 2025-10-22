<?php

$matches = [];
$result = preg_match_all("/Maxwell|anata|sitompul/i", "Maxwell Anata Sitompul", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/HELLO GUYS/i", "***", "HELLO GUYS!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Maxwell Anata Sitompul,Programmer,Musisi");

var_dump($result);