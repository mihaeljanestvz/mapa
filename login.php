<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];

    
    setcookie("user", $username, time() + 3600, "/");

    header("Location: welcome.php");
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
