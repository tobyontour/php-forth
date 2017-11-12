<?php

namespace PHPForth;

class Stack
{
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}