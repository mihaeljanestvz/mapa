<?php
// Brisanje kolačića "user" postavljanjem vremena isticanja u prošlost
setcookie("user", "", time() - 3600, "/");

// Redirekcija na login stranicu nakon odjave
header("Location: login.php");
exit();
?>
