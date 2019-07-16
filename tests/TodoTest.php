<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Todo;
use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $todo = Todo::make('go to market');
        $this->assertEquals('- [ ] go to market', $todo->render());

        $todo->complete();
        $this->assertEquals('- [x] go to market', $todo->render());
    }
}
