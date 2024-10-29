<?php
// Povezivanje s bazom podataka
$con = mysqli_connect("localhost", "root", "", "user_country_db");

// Provjera konekcije
if (mysqli_connect_errno()) {
    die("Povezivanje s bazom podataka nije uspjelo: " . mysqli_connect_error());
}

// SQL upit za dohvaćanje podataka o korisnicima i njihovim državama
$query = "SELECT users.first_name, users.last_name, countries.name AS country_name
          FROM users
          JOIN countries ON users.country_id = countries.id";
$result = mysqli_query($con, $query);

// Prikaz podataka
if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>👤 " . htmlspecialchars($row['first_name']) . " <strong style='color:green'>" . htmlspecialchars($row['last_name']) . "</strong> (" . htmlspecialchars($row['country_name']) . ")</li>";
    }
    echo "</ul>";
} else {
    echo "Nema podataka za prikaz.";
}

// Zatvaranje konekcije
mysqli_close($con);
?>
