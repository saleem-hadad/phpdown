<?php

namespace BinaryTorch\PhpDown\Tests;

use BinaryTorch\PhpDown\Table;
use PHPUnit\Framework\TestCase;
use BinaryTorch\PhpDown\TableRow;

class TableTest extends TestCase
{
    /** @test */
    public function it_renders_correctly()
    {
        $tableHeader = Table::make([
            'col1' => 'center',
            'col2' => 'left',
            'col3' => 'right',
        ], [
            TableRow::make(['data', 'data', 'data']),
        ]);

        $this->assertEquals("| col1 | col2 | col3 | \n| :-: | :- | -: | \n| data | data | data | \n", $tableHeader->render());
    }
}
