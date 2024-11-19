<?php

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 
    $country_id = mysqli_real_escape_string($con, $_POST['country_id']);

    
    $query = "INSERT INTO users (first_name, last_name, email, username, password, country_id)
              VALUES ('$first_name', '$last_name', '$email', '$username', '$password', '$country_id')";

    if (mysqli_query($con, $query)) {
        echo "Registracija uspješna!";
    } else {
        echo "Greška: " . mysqli_error($con);
    }
}


mysqli_close($con);
?>
