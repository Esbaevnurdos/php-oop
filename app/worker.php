<?php

namespace App;
abstract class Worker implements WorkerInterface {
    // фиксированные значения
    // string
    // float
    // boolean
    // Null
    public string $name;
    public int $age;
    public array $hours;

    protected string $position;
    private string $experience; 

    public function __construct($name, $age, $hours) {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
}
 

    // public function work() {

    //     print_r("I'm working");
    // }




    // динамичные значения
    // functions
        public function setPosition($value) {
        $this->position = $value;
    } 

    public function getPosition() { 
        return $this->position;
    }

    public function setHours($value) {
        $this->hours = $value;
    }


    public function getHours() {
        return $this->hours;
    }
}