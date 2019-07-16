<?php

namespace BinaryTorch\PhpDown;

class Todo extends Element
{
    /**
     * Set the starting operand for the element.
     * 
     * @var string
     */
    protected $isCompleted = false;

    /**
     * @return mixed
     */
    public function complete()
    {
        $this->isCompleted = true;

        return $this;
    }

    /**
     * @return mixed
     */
    public function operand()
    {
        return $this->isCompleted ? "- [x]" : "- [ ]";
    }
}