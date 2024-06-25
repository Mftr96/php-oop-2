<?php
/*importo lo store nell'index (solo lo store, perchè le classi sono 
già importate nello store)
*/
include_once __DIR__ . '/store.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop 2</title>
</head>

<body>
    <pre> <?php var_dump($crocchette) ?></pre>
    <ul>
        <!-- creazione ciclo su lista_film -->
        <?php foreach ($prodotti as $acquisti) { ?>
            <li><?= "$acquisti->nome $acquisti->prezzo " ?></li>
        <?php } ?>
    </ul>

</body>

</html>