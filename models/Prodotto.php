<?php
//definisco la classe prodotto
class Prodotto{
    public $prezzo;
    public $immagine;
    public $sconto;
    //prodotto "ha una"Categoria 
    public $categoria;

    public function __construct($prezzo,$immagine,$sconto, Categoria $categoria)
    {$this->prezzo=$prezzo;
     $this->immagine=$immagine;
     $this->sconto=$sconto;
     $this->categoria=$categoria;
    }
};
?>