<?php

$con = mysqli_connect("localhost", "root", "", "ribolov_db");


if (mysqli_connect_errno()) {
    die("Neuspješno povezivanje s bazom podataka: " . mysqli_connect_error());
}
?>
