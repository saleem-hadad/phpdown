<?php

namespace BinaryTorch\PhpDown\Tests;

use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\TableRow;

class TableRowTest extends TestCase
{
    /** @test */
    public function it_mutate_the_content()
    {
        $tableRow = TableRow::make(['col1', 'col2']);

        $this->assertEquals('| col1 | col2 | ', $tableRow->render());
    }
}
