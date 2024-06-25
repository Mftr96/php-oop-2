<?php
//dichiaro la classe Cibo che "è un" Prodotto
class Cibo extends Prodotto{
    public $peso;
    public $composizione;
    public $ingredienti;
    /*dichiaro la funzione construct 
    nella quale vado ad inserire come argomenti 
    tutto il necessario(ossia i valori di Cibo ma anche di Prodotto)
    */

    public function __construct($peso,$composizione,$ingredienti,$nome,$prezzo,$sconto,$categoria) {
        $this->peso = $peso;
        $this->composizione = $composizione;
        $this->ingredienti = $ingredienti;
        $this->nome = $nome;        
        $this->prezzo = $prezzo;
        $this->sconto = $sconto;
        $this->categoria = $categoria;
    }

}


?>