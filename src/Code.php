<?php

namespace BinaryTorch\PhpDown;

class Code extends Element 
{
    /**
     * Set the starting operand for the element.
     * 
     * @var string
     */
    protected $operand = "```";

    /**
     * Set the ending operand for the element.
     * 
     * @var string
     */
    protected $endOperand = "```";

    /**
     * @var string
     */
    protected $language;

    /**
     * The class constructor.
     * 
     * @param $content
     */
    public function __construct($content = null, $language)
    {
        $this->content = $content;
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return mixed
     */
    public function operand()
    {
        return "{$this->operand}{$this->language}\n";
    }

    /**
     * @return mixed
     */
    public function endOperand()
    {
        return "\n{$this->endOperand}";
    }
}