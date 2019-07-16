<?php

namespace BinaryTorch\PhpDown;

class Image extends Link 
{
    /**
     * @return mixed
     */
    public function render()
    {
        return "!" . parent::render();
    }
}