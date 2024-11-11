<?php
// Pokretanje sesije kako bi se moglo pohraniti podatke o korisniku ako je prijava uspješna
session_start();

// Uključivanje datoteke za povezivanje s bazom podataka
include 'db_connect.php';

// Provjera je li forma poslana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Uzimanje podataka iz forme
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];

    // SQL upit za dohvaćanje korisnika s danim korisničkim imenom
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    // Provjera da li korisnik postoji u bazi
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Provjera lozinke
        if (password_verify($password, $user['password'])) {
            // Postavljanje sesije za prijavljenog korisnika
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // Preusmjeravanje na početnu stranicu
            header("Location: index.php");
            exit(); // Zaustavljanje skripte nakon preusmjeravanja
        } else {
            $error = "Netočna lozinka!";
        }
    } else {
        $error = "Korisničko ime nije pronađeno!";
    }
}

// Zatvaranje konekcije s bazom
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
        <h1>Prijava</h1>
        <?php
        // Ispis greške ako postoji
        if (!empty($error)) {
            echo "<p class='error-message'>$error</p>";
        }
        ?>
        <form action="login.php" method="post">
            <label for="username">Korisničko ime:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Lozinka:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Prijavi se">
        </form>
    </div>
</body>
</html>
