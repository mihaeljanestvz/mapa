<?php
    $title = "Da Vincijev kod";
    $linkBase = "https://hr.wikipedia.org/";
    $link = $linkBase . str_replace(" ", "_", $title);
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Opis knjige <?php echo $title; ?> autora Dana Browna">
    <meta name="keywords" content="<?php echo $title; ?>, knjiga, kriminalistički triler, Dan Brown">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $title; ?> je kriminalistički triler američkog pisca Dana Browna.</p>
    <p>
        <a href="<?php echo $link; ?>" target="_blank">Pročitajte više na Wikipediji</a>
    </p>
</body>
</html>

<!-- Naziv dokumenta: vjezba 3.php -->
