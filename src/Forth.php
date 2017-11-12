<?php

namespace PHPForth;

class Forth
{
    protected $output = "Type 'bye' to exit";

    public function exec($code)
    {
        $this->output = 'ok';
    }

    public function getOutput()
    {
        return $this->output;
    }

    public function getStack()
    {
        return [];
    }
}