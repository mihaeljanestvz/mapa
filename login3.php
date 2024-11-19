<?php

session_start();


include 'db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];

    
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $query);

  
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

       
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            
            header("Location: index.php");
            exit(); 
        } else {
            $error = "Netočna lozinka!";
        }
    } else {
        $error = "Korisničko ime nije pronađeno!";
    }
}


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
