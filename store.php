<?php
//vado ad includere le classi nel file store.php
//includo la classe  Prodotto
include_once __DIR__ . '/models/Prodotto.php';
//includo la classe Categoria 
include_once __DIR__ . '/models/Categoria.php';
//includo le classi Cuccia e Cibo che "sono" dei Prodotti
include_once __DIR__ . '/models/Cibo.php';
include_once __DIR__ . '/models/Cuccia.php';
//--------------------------------------------
// dichiaro le Categorie 
$categoria_cani= new Categoria("per cani");
$categoria_gatti= new Categoria("per gatti");
//---------------------------------------------
//dichiaro le variabili presenti nello store(ipotetici articoli di negozio e-commerce)
$crocchette= new Cibo("1kg","cibo secco","carne","crocchette","20€","-20%",$categoria_cani );
$lettino= new Cuccia("20*20cm","piumino","lettino","10€",null,$categoria_gatti);

//dichiaro le variabili in un array
//forse sono da mettere in due array separati i prodotti Cibo e Prodotti Cuccia per eventuali cicli
$prodotti=[$crocchette,$lettino];
?>