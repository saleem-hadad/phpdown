<?php

namespace BinaryTorch\PhpDown;

class Mutations extends Element 
{
    /**
     * @return this
     */
    public function strike()
    {
        $this->operand = "~~";
        $this->endOperand = "~~";

        return $this;
    }

    /**
     * @return this
     */
    public function bold()
    {
        $this->operand = "**";
        $this->endOperand = "**";

        return $this;
    }

    /**
     * @return this
     */
    public function italic()
    {
        $this->operand = "*";
        $this->endOperand = "*";

        return $this;
    }

    /**
     * @return this
     */
    public function inlineCode()
    {
        $this->operand = "`";
        $this->endOperand = "`";

        return $this;
    }

    /**
     * @return this
     */
    public function mark()
    {
        $this->operand = "<mark>";
        $this->endOperand = "</mark>";

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
                $result .= "{$this->content()->render()}";
            }else {
                $result .= "{$this->content()}";
            }
        }
        
        $result .= "{$this->endOperand()}";

        if($this->newLine) {
            $result .= "\n";
        }

        return $result;
    }
}