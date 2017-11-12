<?php

namespace PHPForth\Tests;

use PHPUnit\Framework\TestCase;
use PHPForth\Stack;

class StackTest extends TestCase
{
    public function testSetStackName()
    {
        $stack = new Stack('Test stack');

        $this->assertEquals(
            'Test stack',
            $stack->getName()
        );
    }
}