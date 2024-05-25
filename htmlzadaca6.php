<?php 
$postaniProgramer = "PostaniProgramer";

$Navigation = [
    "nav"=>[
        "main" => "Glavna",
        "about us" => "O nama",
        "contact" => "Kontakt"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $postaniProgramer ?></title>
</head>
<body>
    <h1><?= $postaniProgramer ?></h1>
    <nav>
        <?php foreach ($Navigation["nav"] as $nav => $menu): ?>
            <a href="<?= str_replace(' ', '-', $nav) ?>.php"><?= $menu ?></a>
        <?php endforeach; ?>
    </nav>
</body>
</html>
