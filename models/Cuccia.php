<?php
//dichiaro la classe cuccia che "è un" Prodotto
class Cuccia extends Prodotto{
     public $dimensioni;
     public $materiale;
     //dichiaro la funzione construct avendo cura di inserire tutto il materiale necessario
     public function __construct($dimensioni,$materiale,$nome,$prezzo,$sconto,$categoria) 
     {
       //chiamo la classe Prodotto per inserire le variabili di prodotto(prezzo,sconto,Categoria)
       parent::__construct($nome,$prezzo,$sconto,$categoria);
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;
     }

}

?>