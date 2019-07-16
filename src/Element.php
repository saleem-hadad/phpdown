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
     * @var bool
     */
    protected $newLine = false;

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
    public function withNewLine()
    {
        $this->newLine = true;

        return $this;
    }

    /**
     * @return mixed
     */
    public function render()
    {
        $result = "{$this->operand()}";

        if($this->content() && $this->canRenderContent()) {
            // handle the indented elements.
            if($this->content() instanceof Element) {
                $result .= " {$this->content()->render()}";
            }else {
                $result .= " {$this->content()}";
            }
        }

        if($this->endOperand()) {
            $result .= " {$this->endOperand()}";
        }

        if($this->newLine) {
            $result .= "\n";
        }

        return $result;
    }

    /**
     * @return bool
     */
    protected function canRenderContent()
    {
        return true;
    }
}
