<?php  

if( !isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste unjeli email");
}

if( !isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die("Niste unjeli sifru");
}


require_once "baza.php";

$email = $_POST['email'];
$sifra = $_POST ['sifra'];

$rezultat = $baza ->query("SELECT * FROM korisnici WHERE email='$email'");

if ($rezultat->num_rows == 1)
{
    $korisnik = $rezultat->fetch_assoc();
    $verifikovanaSifra = password_verify($sifra, $korisnik['sifra']);

    if ($verifikovanaSifra == true)
    {
        echo "Dobrodošli nazad";
    }
    else
    {
        echo "Šifra nije tačna";
    }
} 
else{
    echo "kORSINIK NE POSTOJI";
}


