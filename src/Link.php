<?php

namespace BinaryTorch\PhpDown;

class Link extends Element 
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $url;

    /**
     * The class constructor.
     * 
     * @param $title
     * @param $url
     */
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function render()
    {
        return "[{$this->title}]({$this->url})";
    }
}