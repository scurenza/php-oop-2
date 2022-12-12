<?php

require_once __DIR__ . "/Product.php";

class Kennel extends Product
{
    public $size;

    public function __construct($name, $price, $category, $type, $poster, $size)
    {
        parent::__construct($name, $price, $category, $type, $poster, $size);
        $this->size = $size;
    }
}
