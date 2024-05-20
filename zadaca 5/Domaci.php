<?php
$imenik = array("Toma", "Petar", "Marko");
$imeProsljedjeno = isset($_POST["ime"]);
if ($imeProsljedjeno == false)
{
    die("Ime nije proslijeđeno");
}

$ime = trim($_POST["ime"]);
if ($ime == "")
{
    die("Morate unijeti ime");
}

$duzinaIme = strlen($_POST["ime"]);
if ($duzinaIme < 4 || $duzinaIme > 6)
{
    die("Ime mora biti duže od 4 karaktera, ali manje od 6 karaktera"); 
}

$imenikLowercase = array_map("strtolower", $imenik); 
$imeLowercase = strtolower($ime); 

if (in_array($imeLowercase, $imenikLowercase)){
    echo "Uspješno ste unjeli korisnika";
}else{
    echo "Nismo pronašli ime u listi korisnika";
}
?>

