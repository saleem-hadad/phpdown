<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Code;
use PHPUnit\Framework\TestCase;

class CodeTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $code = Code::make("echo 'hello';", 'php');
        
        $this->assertEquals("```php\n echo 'hello'; \n```", $code->render());
    }
}
