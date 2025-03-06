<?php

namespace App;


class Developer extends Worker {

    use HasRest;
    
    protected string $position = "developer";
    public function work() {
        // print_r("I'm developing");
    }



}