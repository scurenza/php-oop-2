<?php

require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $ingredient;

    public function __construct($name, $price, $category, $type, $poster, $ingredient)
    {
        parent::__construct($name, $price, $category, $type, $poster, $ingredient);
        $this->ingredient = $ingredient;
    }
}
