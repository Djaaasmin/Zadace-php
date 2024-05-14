<?php
if(isset($_GET["cijena"]) && isset($_GET["proizvod"])){
    $cijena = $_GET["cijena"];
    $proizvod = $_GET["proizvod"];
    $izracunajPorez = isset($_GET["izracunajPorez"]) ? true : false;

    if($proizvod == "Hrana"){
        $ukupnaCijena = $cijena + 100;
    }
    else if ($proizvod == "Oprema za racunare"){
        $ukupnaCijena = $cijena + 150;
    }

    if($izracunajPorez){
        $ukupnaCijena += $ukupnaCijena * 0.1;
    }

    echo $ukupnaCijena;
}
?>

