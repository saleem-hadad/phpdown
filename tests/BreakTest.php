<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Breaks;
use PHPUnit\Framework\TestCase;

class BreaksTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $break = Breaks::make();

        $this->assertEquals('---', $break->render());
    }
}
