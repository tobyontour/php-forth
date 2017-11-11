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
}