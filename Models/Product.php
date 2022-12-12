<?php

require_once __DIR__ . "/Category.php";

class Product
{
    public $name;
    public $price;
    public $category;
    public $type;
    public $poster;

    /**
     * costruttore per l'istanza Prodotto
     */
    public function __construct(string $name, float $price, Category $category, string $type, string $poster)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->poster = $poster;
    }

    /**
     * funzione per ricevere i dettagli del prodotto
     */
    public function getDetails()
    {
        return "Nome Prodotto: {$this->name}; Prezzo: {$this->price} €; Consigliato per: {$this->category->name}; Tipo: {$this->type}";
    }
}
