<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Link;
use BinaryTorch\PhpDown\Image;
use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\Markdown;

class MarkdownTest extends TestCase
{
    /** @test */
    public function it_renders_all_elements_correctly()
    {
        $markdown = Markdown::make([
            Link::make('title', 'url'),
            Image::make('title2', 'url2')
        ]);

        $this->assertEquals(" \n[title](url)\n![title2](url2)", $markdown->render());
    }
}
