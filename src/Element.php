<?php

namespace BinaryTorch\PhpDown;

abstract class Element
{
    /**
     * Set the starting operand for the element.
     * 
     * @var string
     */
    protected $operand;

    /**
     * @var string
     */
    protected $content;

    /**
     * Set the ending operand for the element.
     * 
     * @var string
     */
    protected $endOperand;

    /**
     * The class constructor.
     * 
     * @param $content
     */
    public function __construct($content = null)
    {
        $this->content = $content;
    }

    /**
     * Create a new element.
     *
     * @return static
     */
    public static function make(...$arguments)
    {
        return new static(...$arguments);
    }

    /**
     * @return mixed
     */
    public function operand()
    {
        return $this->operand;
    }

    /**
     * @return mixed
     */
    public function content()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function endOperand()
    {
        return $this->endOperand;
    }

    /**
     * @return bool
     */
    public function canRenderContent()
    {
        return true;
    }

    /**
     * @return mixed
     */
    public function render()
    {
        $result = "{$this->operand()}";

        if($this->content() && $this->canRenderContent()) {
            $result .= " {$this->content()}";
        }

        if($this->endOperand()) {
            $result .= " {$this->endOperand()}";
        }

        return $result;
    }
}
