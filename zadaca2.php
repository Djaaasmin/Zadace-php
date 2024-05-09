<?php 
$postaniProgramer="Postani programer";
$navigacija = ["glavna","o nama","kontakt"];
$godina= date("Y");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title><?= $postaniProgramer   ?> </title>
</head>
<body>
    <h1><?= $postaniProgramer   ?> </h1>
    <nav>
        <a href="home.php"><?= $navigacija[0] ?> </a>
        <a href="about_us.php"><?= $navigacija[1] ?></a>
        <a href="contact.php"><?= $navigacija[2] ?></a>
    </nav>
    
<footer> 
Copy right moj site &copy; <?= $godina ?>
</footer>
</body>
</html>
