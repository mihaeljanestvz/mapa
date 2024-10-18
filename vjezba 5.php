<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igra - Pogodi broj</title>
    <style>
        .correct { color: green; }
        .wrong { color: red; }
    </style>
</head>
<body>
    <h1>Igra (pogodi broj)</h1>
    <form method="post" action="">
        <label for="broj">Upiši jedan broj od 1 do 9:</label><br>
        <input type="number" id="broj" name="broj" min="1" max="9" required><br><br>
        <input type="submit" value="Pogodak, probaj ponovo!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Zamišljeni broj (nasumično generisan broj između 1 i 9)
        $zamisljeniBroj = rand(1, 9);
        // Korisnikov broj iz forme
        $korisnikovBroj = $_POST['broj'];

        echo "<p>Zamišljeni broj je $zamisljeniBroj</p>";

        // Provjera da li je korisnik pogodio broj
        if ($korisnikovBroj == $zamisljeniBroj) {
            echo "<p class='correct'>Pogodili ste!</p>";
        } else {
            echo "<p class='wrong'>Krivo, probaj ponovo!</p>";
        }
    }
    ?>
</body>
</html>
