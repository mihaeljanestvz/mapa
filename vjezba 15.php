<?php

$con = mysqli_connect("localhost", "root", "", "test");


if (mysqli_connect_errno()) {
    die("Neuspjela povezanost s bazom: " . mysqli_connect_error());
}


$rezultati = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $search = mysqli_real_escape_string($con, $_POST['search']);

   
    $query = "SELECT firstname, lastname FROM users WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";
    $result = mysqli_query($con, $query);

   
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rezultati .= "<p>" . htmlspecialchars($row['firstname']) . " " . htmlspecialchars($row['lastname']) . "</p>";
        }
    } else {
        $rezultati = "<p>Nema rezultata pretrage.</p>";
    }
}


mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tražilica korisnika</title>
</head>
<body>
    <h1>Pretraga korisnika</h1>
    <form method="post" action="">
        <label for="search">Unesite ime ili prezime:</label><br>
        <input type="text" id="search" name="search" required><br><br>
        <input type="submit" value="Pretraži">
    </form>

    <h2>Rezultati pretrage:</h2>
    <?php
    echo $rezultati;
    ?>
</body>
</html>
