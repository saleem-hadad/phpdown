<?php

namespace BinaryTorch\PhpDown\Tests;

use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\Heading;

class HeadingTest extends TestCase
{
    /** @test */
    public function it_is_h1_by_default()
    {
        $heading = Heading::make('hello');

        $this->assertEquals('# hello', $heading->render());
    }

    /** @test */
    public function it_can_be_set_to_any_heading()
    {
        $heading = Heading::make('hello');

        $this->assertEquals('# hello', $heading->is1()->render());
        $this->assertEquals('## hello', $heading->is2()->render());
        $this->assertEquals('### hello', $heading->is3()->render());
        $this->assertEquals('#### hello', $heading->is4()->render());
        $this->assertEquals('##### hello', $heading->is5()->render());
        $this->assertEquals('###### hello', $heading->is6()->render());
    }
}
