<?php

namespace App;

class salary {
    static public function count(array $hours) {
        return array_sum($hours) * 2000;
    }
}