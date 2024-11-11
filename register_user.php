<?php
// Uključivanje skripte za povezivanje s bazom podataka
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preuzimanje podataka iz forme
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashiranje lozinke za sigurnost
    $country_id = mysqli_real_escape_string($con, $_POST['country_id']);

    // SQL upit za unos korisnika
    $query = "INSERT INTO users (first_name, last_name, email, username, password, country_id)
              VALUES ('$first_name', '$last_name', '$email', '$username', '$password', '$country_id')";

    if (mysqli_query($con, $query)) {
        echo "Registracija uspješna!";
    } else {
        echo "Greška: " . mysqli_error($con);
    }
}

// Zatvaranje konekcije
mysqli_close($con);
?>
