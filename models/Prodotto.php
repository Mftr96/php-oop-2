<?php
//definisco la classe prodotto
class Product{
    public $prezzo;
    public $immagine;
    public $sconto;
    public $categoria;

    public function __construct($prezzo,$immagine,$sconto, Categoria $categoria)
    {$this->prezzo=$prezzo;
     $this->immagine=$immagine;
     $this->sconto=$sconto;
     $this->categoria=$categoria;
    }
};
?>