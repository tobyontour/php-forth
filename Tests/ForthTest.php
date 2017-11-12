<?php

namespace PHPForth\Tests;

use PHPUnit\Framework\TestCase;
use PHPForth\Forth;

class ForthTest extends TestCase
{
    public function testForthClassCanBeInstantiated()
    {
        $forth = new Forth();
        $this->assertTrue(
            $forth != null
        );
    }

    public function testInitialOutputContainsExitInstructions()
    {
        $forth = new Forth();

        $this->assertContains(
            'Type \'bye\' to exit',
            $forth->getOutput(),
            'Inital prompt contains exit instructions'
        );        

        $this->assertEquals(
            0,
            count($forth->getStack()),
            'Stack is initially empty'
        );
    }

    public function testEmptyCodeOutput()
    {
        $forth = new Forth();

        $result = $forth->exec('');

        $this->assertEquals(
            '',
            $result
        );

        $this->assertEquals(
            'ok',
            $forth->getOutput(),
            'Ok returned for no command'
        );

        $this->assertEquals(
            0,
            count($forth->getStack()),
            'Stack is empty after empty command'
        );        
    } 
}