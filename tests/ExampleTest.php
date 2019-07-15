<?php

namespace BinaryTorch\PhpDown\Tests;

use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\Element;

class DummyElement extends Element 
{
    public function render()
    {
        return 'value';
    }
}

class ElementTest  extends TestCase
{
    /** @test */
    public function it_renders()
    {
        $dummyElement = new DummyElement;

        $this->assertEquals('value', $dummyElement->render());
    }
}
