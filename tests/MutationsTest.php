<?php

namespace BinaryTorch\PhpDown\Tests;

use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\Mutations;

class MutationsTest extends TestCase
{
    /** @test */
    public function it_mutate_the_content()
    {
        $mutations = Mutations::make('Hello');

        $this->assertEquals('Hello', $mutations->render());
        $this->assertEquals('~~Hello~~', $mutations->strike()->render());
        $this->assertEquals('**Hello**', $mutations->bold()->render());
        $this->assertEquals('*Hello*', $mutations->italic()->render());
        $this->assertEquals('`Hello`', $mutations->inlineCode()->render());
        $this->assertEquals('<mark>Hello</mark>', $mutations->mark()->render());
    }
}
