<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun konačne ocjene</title>
    <link rel="stylesheet" type="text/css" href="style vjezba7.css">
    
</head>
<body>
    <div class="form-container">
        <h1>Izračun konačne ocjene</h1>

        <form method="post" action="">
            <label for="kolokvij1">Unesite ocjenu I. kolokvija (1-5):</label><br>
            <input type="number" id="kolokvij1" name="kolokvij1" min="1" max="5" required><br><br>

            <label for="kolokvij2">Unesite ocjenu II. kolokvija (1-5):</label><br>
            <input type="number" id="kolokvij2" name="kolokvij2" min="1" max="5" required><br><br>

            <input type="submit" value="Izračunaj konačnu ocjenu">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kolokvij1 = $_POST['kolokvij1'];
            $kolokvij2 = $_POST['kolokvij2'];

            // Provjera da li su ocjene unutar dopuštenog raspona
            if ($kolokvij1 < 1 || $kolokvij1 > 5 || $kolokvij2 < 1 || $kolokvij2 > 5) {
                echo "<p class='error'>Ocjene moraju biti između 1 i 5!</p>";
            } else {
                // Ako je bilo koji kolokvij negativan, konačna ocjena je negativna
                if ($kolokvij1 == 1 || $kolokvij2 == 1) {
                    echo "<p class='result'>Konačna ocjena: 1 (negativno)</p>";
                } else {
                    // Izračun prosjeka
                    $prosjek = ($kolokvij1 + $kolokvij2) / 2;
                    echo "<p class='result'>Prosjek ocjena: " . number_format($prosjek, 2) . "</p>";

                    // Zaokružena konačna ocjena
                    $konacnaOcjena = round($prosjek);
                    echo "<p class='result'>Konačna ocjena: $konacnaOcjena</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
