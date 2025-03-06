<?php

use App\Developer;
use App\Visitor;
use App\Worker;

require_once ('../vendor/autoload.php');

$developer = new Developer("Boris", 15, [1,2,3]);



$salary = \App\salary::count($developer->getHours());
var_dump($salary);


// Abstraction
// Incapsulation
// Наследование
// Polimorfism


