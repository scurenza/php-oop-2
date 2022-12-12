<?php

require_once __DIR__ . "/Product.php";

class Game extends Product
{
    public $material;

    public function __construct($name, $price, $category, $type, $poster, $material)
    {
        parent::__construct($name, $price, $category, $type, $poster, $material);
        $this->material = $material;
    }
}
