<?php

namespace BinaryTorch\PhpDown;

class Table extends Element 
{
    /**
     * @var array
     */
    protected $header;

    /**
     * @var array
     */
    protected $rows;

    /**
     * The class constructor.
     * 
     * @param $content
     */
    public function __construct($header = [], $rows = [])
    {
        $this->header = $header;
        $this->rows = $rows;
    }

    /**
     * @param $alignment
     * @return string
     */
    protected function getHeaderAlignment($alignment)
    {
        if($alignment == 'center') {
            return ':-:';
        }

        if($alignment == 'right') {
            return '-:';
        }

        return ':-';
    }

    /**
     * @return string
     */
    public function generateHeader()
    {
        $headerRow = "| ";
        $alignmentRow = "| ";

        foreach($this->header  as $columnName => $alignment) {
            $headerRow .= "{$columnName} | ";
            $alignmentRow .= "{$this->getHeaderAlignment($alignment)} | ";
        }

        return "{$headerRow}\n{$alignmentRow}";
    }

    /**
     * @return string
     */
    public function generateRows()
    {
        $rows = "";

        foreach($this->rows  as $row) {
            $rows .= $row->withNewLine()->render();
        }

        return $rows;
    }

    /**
     * @return mixed
     */
    public function render()
    {
        // die(var_dump($this->generateRows()));
        return "{$this->generateHeader()}\n{$this->generateRows()}";
    }
}