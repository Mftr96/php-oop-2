<?php
//dichiaro la classe Cibo che "è un" Prodotto
class Cibo extends Prodotto{
    public $peso;
    public $composizione;
    public $ingredienti;
    public function __construct($peso,$composizione,$ingredienti) {
        $this->peso = $peso;
        $this->composizione = $composizione;
        $this->ingredienti = $ingredienti;
    }

}


?>