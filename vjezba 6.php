<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator (Switch naredba)</title>
</head>
<body>
    <h1>Kalkulator (Switch naredba)</h1>
    
    <form method="post" action="">
        <label for="broj1">Upiši prvi broj *</label><br>
        <input type="number" id="broj1" name="broj1" required><br><br>

        <label for="broj2">Upiši drugi broj *</label><br>
        <input type="number" id="broj2" name="broj2" required><br><br>

        <label for="operacija">Odaberite operaciju:</label><br>
        <input type="submit" name="operacija" value="+">
        <input type="submit" name="operacija" value="-">
        <input type="submit" name="operacija" value="*">
        <input type="submit" name="operacija" value="/"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $broj1 = $_POST['broj1'];
        $broj2 = $_POST['broj2'];
        $operacija = $_POST['operacija'];
        $rezultat = "";

        switch ($operacija) {
            case "+":
                $rezultat = $broj1 + $broj2;
                break;
            case "-":
                $rezultat = $broj1 - $broj2;
                break;
            case "*":
                $rezultat = $broj1 * $broj2;
                break;
            case "/":
                if ($broj2 != 0) {
                    $rezultat = $broj1 / $broj2;
                } else {
                    $rezultat = "Dijeljenje s nulom nije moguće!";
                }
                break;
            default:
                $rezultat = "Neispravna operacija!";
                break;
        }

        echo "<h2>Rezultat:</h2>";
        echo "<p>$broj1 $operacija $broj2 = $rezultat</p>";
    }
    ?>
</body>
</html>
