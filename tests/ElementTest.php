<?php

namespace BinaryTorch\PhpDown\Tests;

use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\Element;

class DummyElement extends Element 
{
    protected $operand = "@";
}

class ElementTest  extends TestCase
{
    /** @test */
    public function it_renders()
    {
        $dummyElement = DummyElement::make('bla');

        $this->assertEquals('@ bla', $dummyElement->render());
    }
}
