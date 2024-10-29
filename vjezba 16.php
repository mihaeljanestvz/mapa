<?php

$con = mysqli_connect("localhost", "root", "", "vjezba_16");


if (mysqli_connect_errno()) {
    die("Povezivanje s bazom podataka nije uspjelo: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashiranje lozinke
    $country = mysqli_real_escape_string($con, $_POST['country']);

    
    $query = "INSERT INTO users (first_name, last_name, email, username, password, country) VALUES ('$first_name', '$last_name', '$email', '$username', '$password', '$country')";

    if (mysqli_query($con, $query)) {
        echo "Registracija uspješna!";
    } else {
        echo "Došlo je do greške: " . mysqli_error($con);
    }
}


mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        
        body { font-family: Arial, sans-serif; }
        .container { max-width: 400px; margin: 0 auto; padding: 20px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="email"], input[type="password"], select {
            width: 100%; padding: 8px; margin-bottom: 10px;
            border: 1px solid #ccc; border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50; color: white;
            border: none; padding: 10px; width: 100%;
            cursor: pointer; border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="post" action="">
            <label for="first_name">First Name *</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name *</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Your E-mail *</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username* (5-10 characters)</label>
            <input type="text" id="username" name="username" required pattern=".{5,10}">

            <label for="password">Password* (min 4 characters)</label>
            <input type="password" id="password" name="password" required pattern=".{4,}">

            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="">molimo odaberite</option>
                <option value="Croatia">Croatia</option>
                <option value="Serbia">Serbia</option>
                <option value="Bosnia">Bosnia</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
