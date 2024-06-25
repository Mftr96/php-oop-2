<?php
//dichiaro la classe cuccia che "è un" Prodotto
class Cuccia extends Prodotto{
     public $dimensioni;
     public $materiale;
     public function __construct($dimensioni,$materiale) {
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;

     }

}

?>