<?php

namespace BinaryTorch\PhpDown;

class Heading extends Element 
{
    /**
     * Set the default operand for the element.
     * 
     * @var string
     */
    protected $operand = "#";

    /**
     * @return mixed
     */
    public function is1()
    {
        $this->operand = "#";

        return $this;
    }

    /**
     * @return mixed
     */
    public function is2()
    {
        $this->operand = "##";

        return $this;
    }

    /**
     * @return mixed
     */
    public function is3()
    {
        $this->operand = "###";

        return $this;
    }

    /**
     * @return mixed
     */
    public function is4()
    {
        $this->operand = "####";

        return $this;
    }

    /**
     * @return mixed
     */
    public function is5()
    {
        $this->operand = "#####";

        return $this;
    }

    /**
     * @return mixed
     */
    public function is6()
    {
        $this->operand = "######";

        return $this;
    }
}