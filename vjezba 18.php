<?php

$con = mysqli_connect("localhost", "root", "", "user_country_db");


if (mysqli_connect_errno()) {
    die("Povezivanje s bazom podataka nije uspjelo: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $country_id = $_POST['country_id'];

    
    $update_query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', country_id = '$country_id' WHERE id = '$user_id'";
    mysqli_query($con, $update_query);
    echo "Korisnik je uspješno ažuriran!";
}


$query = "SELECT users.id, users.first_name, users.last_name, countries.name AS country_name, users.country_id
          FROM users
          JOIN countries ON users.country_id = countries.id";
$result = mysqli_query($con, $query);


$countries_query = "SELECT * FROM countries";
$countries_result = mysqli_query($con, $countries_query);
$countries = [];
while ($country_row = mysqli_fetch_assoc($countries_result)) {
    $countries[] = $country_row;
}


if (mysqli_num_rows($result) > 0) {
    echo "<h1>Lista korisnika</h1><ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo "👤 " . htmlspecialchars($row['first_name']) . " <strong style='color:green'>" . htmlspecialchars($row['last_name']) . "</strong> (" . htmlspecialchars($row['country_name']) . ")";

        
        echo "<form method='post' action='' style='margin-top:10px;'>";
        echo "<input type='hidden' name='user_id' value='" . htmlspecialchars($row['id']) . "'>";
        echo "<label>Ime: <input type='text' name='first_name' value='" . htmlspecialchars($row['first_name']) . "'></label><br>";
        echo "<label>Prezime: <input type='text' name='last_name' value='" . htmlspecialchars($row['last_name']) . "'></label><br>";

        
        echo "<label>Država: <select name='country_id'>";
        foreach ($countries as $country) {
            $selected = $country['id'] == $row['country_id'] ? "selected" : "";
            echo "<option value='" . htmlspecialchars($country['id']) . "' $selected>" . htmlspecialchars($country['name']) . "</option>";
        }
        echo "</select></label><br>";

        echo "<input type='submit' value='Ažuriraj'>";
        echo "</form>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "Nema podataka za prikaz.";
}


mysqli_close($con);
?>
