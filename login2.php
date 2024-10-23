<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['user'] = $_POST['username'];

   
    header("Location: welcome2.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Prijava</h1>
    <form method="post" action="">
        <label for="username">Korisničko ime:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" value="Prijavi se">
    </form>
</body>
</html>
