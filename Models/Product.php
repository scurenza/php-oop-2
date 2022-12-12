<?php

require_once __DIR__ . "/Models/Animal.php";

echo "ciao";
class Product
{
    public $name;
    public $price;
    public $animals;

    /**
     * costruttore per l'istanza Prodotto
     */
    public function __construct(string $name, float $price, string $animals)
    {
        $this->name = $name;
        $this->price = $price;
        $this->animals = $animals;
    }

    /**
     * funzione per ricevere i dettagli del prodotto
     */
    public function getDetails()
    {
        return "Nome Prodotto: {$this->name}; Prezzo: {$this->price} €; Consigliato per: {$this->animals}";
    }
}

$acana = new Product("Acana", 13.99, "dog");
var_dump($acana);
