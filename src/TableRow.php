<?php

namespace BinaryTorch\PhpDown;

class TableRow extends Element 
{
    /**
     * Set the starting operand for the element.
     * 
     * @var string
     */
    protected $operand = "|";

    /**
     * @return mixed
     */
    public function content()
    {
        $content = "";

        foreach($this->content  as $row) {
            $content .= "{$row} | ";
        }

        return $content;
    }
}