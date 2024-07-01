<?php 

require_once "modeli/baza.php";
$rezultat = $baza->query("SELECT * FROM proizvodi");
$proizvodi = $rezultat ->fetch_all(MYSQLI_ASSOC);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach($proizvodi as $proizvodi):  ?>
        <div>
            <h1><?= $proizvodi['ime']?></h1>
            <p><?= $proizvodi['opis']?></p>
            <p>Cijena proizvoda:<?= $proizvodi['cijena']?></p>
            <p>Na stanju<?= $proizvodi['kolicina']?></p>

            <?php if($proizvodi['kolicina']==0): ?>
                <p>Nema na stanju</p>
            <?php  else:  ?>
                <p>Ima na stanju</p>
            <?php endif;?>

            <a href="proizvod.php?id=<?=$proizvodi['id']?>">Pogledaj proizvod</a>

        </div>

    <?php endforeach; ?>

    
</body>
</html>