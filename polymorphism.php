<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("annas zam zam");
var_dump($company);

$company->programmer = new BackendProgrammer("annas zam zam");
var_dump($company);

$company->programmer = new FrontendProgrammer("annas zam zam");
var_dump($company);

sayHelloProgrammer(new Programmer("annas zam zam"));
sayHelloProgrammer(new BackendProgrammer("annas zam zam"));
sayHelloProgrammer(new FrontendProgrammer("annas zam zam"));
