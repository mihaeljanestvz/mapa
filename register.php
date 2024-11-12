<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<nav>
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="login3.php">Prijava</a></li>
                <li><a href="register.php">Registracija</a></li>
                <li><a href="oribolovu.php">O ribolovu</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
    <div class="container">
        <h1>Registracija</h1>
        <form action="register_user.php" method="post">
            <label for="first_name">Ime:</label>
            <input type="text" id="first_name" name="first_name" required>
            
            <label for="last_name">Prezime:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Korisničko ime:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Lozinka:</label>
            <input type="password" id="password" name="password" required>

            <label for="country_id">Država:</label>
            <select name="country_id" required>
                <option value="1">Hrvatska</option>
                <option value="2">Srbija</option>
                <option value="3">Bosna i Hercegovina</option>
                <option value="4">Slovenija</option>
                <option value="5">Italija</option>
            </select>

            <input type="submit" value="Registriraj se">
        </form>
    </div>
</body>
</html>
