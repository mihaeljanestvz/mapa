<?php

if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
} else {
    
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobrodošlica</title>
</head>
<body>
    <h1>Dobrodošli, <?php echo htmlspecialchars($user); ?>!</h1>
    <p>Sada ste prijavljeni.</p>
    <a href="logout.php">Odjavi se</a>
</body>
</html>
