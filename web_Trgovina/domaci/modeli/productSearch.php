<?php

if (!isset($_GET['ime']) || empty($_GET['ime'])) {
    die("Niste unijeli ime proizvoda");
}

require_once "baza.php";

$ime = $_GET['ime'];


$rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$ime%' OR opis LIKE '%$ime%' ");

    if ($rezultat->num_rows >= 1) {
        echo "Uspješno smo pronašli " . $rezultat->num_rows . " proizvoda";
        while ($proizvod = $rezultat->fetch_assoc()) {
            echo '<a href="../proizvod.php?id=' . $proizvod['id'] . '">' . $proizvod['ime'] . '</a><br>';
        }
    } else {
        echo "Nismo pronašli nijedan proizvod";
    }

