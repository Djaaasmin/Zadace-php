<?php

 if (!isset ($_POST ['email']) || empty ($_POST ['email']))
 {
    die("Niste proslijedili email ");
 }

 if (!isset ($_POST ['sifra']) || empty ($_POST ['sifra']))
 {
    die("Niste proslijedili sifru ");
 }

 $email = $_POST ['email'];
 $sifra = password_hash($_POST['sifra'], PASSWORD_BCRYPT);

 require_once "baza.php";

 $rezultat = $baza->query(" SELECT * FROM korisnici WHERE email ='$email'");

 if($rezultat->num_rows ==1)
 {
   die("Vec postoji korisnik sa ovim emailom");
 }
 else
 {
   echo "uspjesno ste se registrovali";
   $baza -> query ("INSERT INTO korisnici (email,sifra) VALUES ('$email', '$sifra')");

 }
 ?>

 <!DOCTYPE html>
 


