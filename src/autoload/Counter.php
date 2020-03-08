<?php

class Counter
{
    private $count = 0;

    public function get() {
        return $this->count++;
    }
}