<?php

namespace BinaryTorch\PhpDown;

class Markdown extends Element 
{
    /**
     * @return mixed
     */
    public function content()
    {
        $content = "";

        foreach($this->content  as $element) {
            $content .= "\n{$element->render()}";
        }

        return $content;
    }
}