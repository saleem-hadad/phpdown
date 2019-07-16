<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $image = Image::make('google', 'www.google.com');

        $this->assertEquals('![google](www.google.com)', $image->render());
    }
}
