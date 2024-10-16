<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun varijable c</title>
</head>
<body>
    <h1>Izračun varijable c</h1>
    <p>Formula: <strong>c = (3a – b) / 2</strong></p>
    
    <form method="post" action="">
        <label for="a">Vrijednost a:</label><br>
        <input type="number" id="a" name="a" required><br><br>
        
        <label for="b">Vrijednost b:</label><br>
        <input type="number" id="b" name="b" required><br><br>
        
        <input type="submit" value="Pošalji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Preuzimanje vrijednosti a i b
        $a = $_POST['a'];
        $b = $_POST['b'];
        
        // Izračunavanje varijable c
        $c = (3 * $a - $b) / 2;
        
        // Ispis rezultata
        echo "<h2>IZLAZ:</h2>";
        echo "<p>Vrijednost c: " . $c . "</p>";
    }
    ?>
</body>
</html>
