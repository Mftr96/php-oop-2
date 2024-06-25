<?php
//definisco la classe prodotto
class Prodotto{
    public $prezzo;
    public $sconto;
    //prodotto "ha una"Categoria 
    public $categoria;

    public function __construct($prezzo,$sconto, Categoria $categoria)
    {$this->prezzo=$prezzo;
     $this->sconto=$sconto;
     $this->categoria=$categoria;
    }
};
?>