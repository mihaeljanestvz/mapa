<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izbor vozila</title>
    <link rel="stylesheet" type="text/css" href="style vjezba8.css">
</head>
<body>
    <div class="form-container">
        <h1>Izbor vozila</h1>

        <form method="post" action="">
            <label for="vozilo">Označi vozilo:</label><br>
            <input type="radio" id="audi" name="vozilo" value="Audi" required>
            <label for="audi">Audi</label><br>
            
            <input type="radio" id="bmw" name="vozilo" value="BMW">
            <label for="bmw">BMW</label><br>
            
            <input type="radio" id="renault" name="vozilo" value="Renault">
            <label for="renault">Renault</label><br>
            
            <input type="radio" id="citroen" name="vozilo" value="Citroen">
            <label for="citroen">Citroen</label><br><br>

            <input type="submit" value="Pošalji">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prikupljanje i ispis odabranog vozila
            if (isset($_POST['vozilo'])) {
                $vozilo = $_POST['vozilo'];
                echo "<p class='result'>Odabrano vozilo: $vozilo</p>";
            }
        }
        ?>
    </div>
</body>
</html>>
