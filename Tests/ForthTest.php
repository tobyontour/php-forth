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

        $output = $forth->getOutput();

        $this->assertContains(
            'Type \'bye\' to exit',
            $forth->getOutput(),
            'Inital prompt contains exit instructions'
        );        
    }

    public function testEmptyCodeOutput()
    {
        $forth = new Forth();

        $forth->exec('');

        $this->assertEquals(
            'ok',
            $forth->getOutput(),
            'Ok returned for no command'
        );        
    }    
}