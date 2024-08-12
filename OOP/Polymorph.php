<?php

require_once "data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Fitrah");
var_dump($company);

$company->programmer = new BackendProgrammer("Fitrah");
var_dump($company);

$company->programmer = new FrontendProgrammer("Fitrah");
var_dump($company);


// Polymorph digunakan untuk function argument
sayHelloProgrammer(new Programmer("Fitrah"));
sayHelloProgrammer(new BackendProgrammer("Fitrah"));
sayHelloProgrammer(new FrontendProgrammer("Fitrah"));
