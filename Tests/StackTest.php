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

    /**
     * @expectedException PHPForth\StackUnderflowException
     */
    public function testPopNonExistentItem()
    {
        $stack = new Stack('Test stack');
        
        $stack->pop();
    }

    public function testPushAndPopItem()
    {
        $stack = new Stack('Test stack');
        
        $stack->push(7);
        
        $this->assertEquals(
            7,
            $stack->pop()
        );
    }

    /**
     * @expectedException PHPForth\StackUnderflowException
     */
    public function testPopTwiceAfterOnePushItem()
    {
        $stack = new Stack('Test stack');
        
        $stack->push(7);
        
        $this->assertEquals(
            7,
            $stack->pop()
        );

        $stack->pop();
    }

    public function testPushAndPeekItem()
    {
        $stack = new Stack('Test stack');
        
        $stack->push(9);
        
        $this->assertEquals(
            9,
            $stack->peek()
        );

        $this->assertEquals(
            9,
            $stack->pop()
        );
    }

    public function testDoublePushAndPop()
    {
        $stack = new Stack('Test stack');
        
        $stack->push(5);
        $stack->push(6);

        $this->assertEquals(
            6,
            $stack->pop()
        );

        $this->assertEquals(
            5,
            $stack->pop()
        );
    }
}