<?php

session_start();


if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    
    header("Location: login2.php");
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
    <a href="logout2.php">Odjavi se</a>
</body>
</html>
