<?php

namespace BinaryTorch\PhpDown\Tests;

use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\Blockquote;

class BlockquoteTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $blockquote = Blockquote::make('Hello');

        $this->assertEquals('> Hello', $blockquote->render());
    }
}
