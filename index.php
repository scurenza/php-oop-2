<?php

require_once __DIR__ . "/Models/Product.php";

echo "ciao";

$acana = new Product("Acana", 13.99, "dog");
var_dump($acana);
