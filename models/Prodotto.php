<?php
//definisco la classe prodotto
class Prodotto{
    public $nome;
    public $prezzo;
    public $sconto;
    //prodotto "ha una"Categoria 
    public $categoria;

    public function __construct($nome,$prezzo,$sconto, Categoria $categoria)
    {
     $this->nome=$nome;
     $this->prezzo=$prezzo;
     $this->sconto=$sconto;
     $this->categoria=$categoria;
    }
};
?>