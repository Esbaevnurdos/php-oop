<?php

namespace App;
class Visitor {
    // фиксированные значения
    // string
    // float
    // boolean
    // Null
    public string $name;
    public int $age;
    public array $hours;


    public function visit(): void {
        print_r(" I'm visiting");
    }




    // динамичные значения
    // functions
}