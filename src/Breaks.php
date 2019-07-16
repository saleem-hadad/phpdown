<?php

namespace BinaryTorch\PhpDown;

class Breaks extends Element 
{
    /**
     * Set the default operand for the element.
     * 
     * @var string
     */
    protected $operand = "---";

    /**
     * @return bool
     */
    public function canRenderContent()
    {
        return false;
    }
}