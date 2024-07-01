<?php

if (!isset ($_POST ['ime']) || empty ($_POST ['ime']))
{
   die("Niste proslijedili ime ");
}


if (!isset ($_POST ['opis']) || empty ($_POST ['opis']))
{
   die("Niste proslijedili opis ");
}


if (!isset ($_POST ['cijena']) || empty ($_POST ['cijena']))
{
   die("Niste proslijedili cijena ");
}


if (!isset ($_POST ['slika']) || empty ($_POST ['slika']))
{
   die("Niste proslijedili slika ");
}


if (!isset ($_POST ['kolicina']) || empty ($_POST ['kolicina']))
{
   die("Niste proslijedili kolicina ");
}

require_once "baza.php";

$ime = $_POST ['ime'];
$opis = $_POST ['opis'];
$cijena = $_POST ['cijena'];
$slika = $_POST ['slika'];
$kolicina = $_POST ['kolicina'];

$q = "INSERT INTO proizvodi (ime,opis,cijena,slika,kolicina) VALUES ('$ime','$opis',$cijena,'$slika',$kolicina)";
$baza->query($q);

