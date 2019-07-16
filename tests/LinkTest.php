<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $link = Link::make('google', 'www.google.com');

        $this->assertEquals('[google](www.google.com)', $link->render());
    }
}
