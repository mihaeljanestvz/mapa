<?php
// Funkcija koja provjerava da li je broj prost
function jeProst($broj) {
    if ($broj <= 1) {
        return false; // Prost broj mora biti veći od 1
    }

    // Prolazimo kroz sve brojeve od 2 do kvadratnog korijena broja
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false; // Ako je broj djeljiv sa bilo kojim brojem osim 1 i samim sobom
        }
    }

    return true; // Ako nije djeljiv ni sa jednim brojem osim 1 i samim sobom
}

// Ispis svih prostih brojeva manjih od 100
echo "Prosti brojevi manji od 100 su: <br>";

for ($i = 2; $i < 100; $i++) {
    if (jeProst($i)) {
        echo $i . " ";
    }
}
?>
