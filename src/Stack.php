<?php

namespace PHPForth;

class Stack
{
    protected $data = array();

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function pop()
    {
        $item = array_pop($this->data);

        if (is_null($item)) {
            throw new StackUnderflowException();
        }
        return $item;
    }

    public function push($item)
    {
        array_push($this->data, $item);
    }

    public function peek()
    {
        if (count($this->data) == 0) {
            throw new StackUnderflowException();
        } else {
            return current($this->data);
        }
    }

    public function __toString()
    {
        return implode(" ", $this->data) . " <- Top ";
    }
}
