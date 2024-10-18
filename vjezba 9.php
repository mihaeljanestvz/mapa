<?php
// Postavljamo trenutno vrijeme i dan
$trenutnoVrijeme = new DateTime();
$trenutniDan = $trenutnoVrijeme->format('N'); // N = 1 (Ponedjeljak) do 7 (Nedjelja)
$trenutniSat = $trenutnoVrijeme->format('H'); // H = Sat u 24-satnom formatu

// Lista državnih praznika (u formatu mjesec-dan)
$drzavniPraznici = [
    '01-01', // Nova godina
    '05-01', // Praznik rada
    '12-25', // Božić
    '12-26'  // Sveti Stjepan
];

// Provjera je li danas državni praznik
$trenutniDatum = $trenutnoVrijeme->format('m-d');
$jePraznik = in_array($trenutniDatum, $drzavniPraznici);

// Provjera radnog vremena dućana
if ($jePraznik) {
    echo "Danas je državni praznik. Dućan je zatvoren.";
} else {
    if ($trenutniDan == 7) {
        // Nedjelja - zatvoreno
        echo "Danas je nedjelja. Dućan je zatvoren.";
    } elseif ($trenutniDan == 6) {
        // Subota - radno vrijeme od 9:00 do 14:00
        if ($trenutniSat >= 9 && $trenutniSat < 14) {
            echo "Dućan je otvoren. Radno vrijeme subotom je od 9:00 do 14:00.";
        } else {
            echo "Dućan je zatvoren. Radno vrijeme subotom je od 9:00 do 14:00.";
        }
    } else {
        // Ostali dani - radno vrijeme od 8:00 do 20:00
        if ($trenutniSat >= 8 && $trenutniSat < 20) {
            echo "Dućan je otvoren. Radno vrijeme je od 8:00 do 20:00.";
        } else {
            echo "Dućan je zatvoren. Radno vrijeme je od 8:00 do 20:00.";
        }
    }
}
?>
