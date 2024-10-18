<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak - str_word_count</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
        }
        label, p {
            font-size: 16px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            font-size: 18px;
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Zadatak <code>str_word_count</code></h1>
        <p>U zadatku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu <code>str_word_count</code>.</p>
        
        <form method="post" action="">
            <label for="ulazni-niz">Ulazni niz:</label><br>
            <input type="text" id="ulazni-niz" name="ulazni_niz" placeholder="Unesite rečenicu" required><br>
            <input type="submit" value="Ispiši broj riječi">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Preuzimanje unesenog niza iz forme
            $ulazniNiz = $_POST['ulazni_niz'];
            // Korištenje funkcije str_word_count za brojanje riječi
            $brojRijeci = str_word_count($ulazniNiz);

            // Ispis rezultata
            echo "<p class='result'>Ulazni niz: <strong>" . htmlspecialchars($ulazniNiz) . "</strong> sadrži <strong>$brojRijeci</strong> riječi.</p>";
        }
        ?>
    </div>
</body>
</html>
