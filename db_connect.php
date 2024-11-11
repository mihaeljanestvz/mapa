<?php
// Povezivanje s bazom podataka
$con = mysqli_connect("localhost", "root", "", "ribolov_db");

// Provjera uspješnosti povezivanja
if (mysqli_connect_errno()) {
    die("Neuspješno povezivanje s bazom podataka: " . mysqli_connect_error());
}
?>
