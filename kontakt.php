<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="stylekontakt.css">
</head>
<body>
    <div class="container">
        <!-- Navigacija -->
        <nav>
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="login3.php">Prijava</a></li>
                <li><a href="register.php">Registracija</a></li>
                <li><a href="oribolovu.php">O ribolovu</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </nav>

        <!-- Sadržaj kontakt stranice -->
        <section class="contact-content">
            <h1>Kontaktirajte nas</h1>
            <p>Imate pitanje, prijedlog ili trebate pomoć? Ispunite obrazac i javit ćemo vam se u najkraćem mogućem roku!</p>
            
            <form action="#" method="post" class="contact-form">
                <label for="name">Ime:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Poruka:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" class="contact-submit">Pošalji poruku</button>
            </form>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Ribolov</p>
        </footer>
    </div>
</body>
</html>
