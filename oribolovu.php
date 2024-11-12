<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribolov - Početna stranica</title>
    <link rel="stylesheet" href="styleoribolovu.css">
   
    <style>
        /* Stilovi za vremensku prognozu */
        .weather {
            background-color: #2d3436;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }
        .weather h3 {
            margin-bottom: 10px;
        }
        .weather p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
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
    <div class="container">

        <!-- Vremenska prognoza -->
        <div class="weather">
            <h3>Vremenska prognoza za ribolov</h3>
            <p id="city-name">Grad: Zagreb</p> <!-- Prikaz grada -->
            <p id="weather-desc">Učitavanje vremenskih podataka...</p>
            <p id="temperature"></p>
            <p id="wind"></p>
            <p id="humidity"></p>
        </div>

     <!-- Slika prilagođena ribolovu -->
     <div class="image-container">
            <img src="images/banner.jpg" alt="Ribolov na jezeru" class="main-image">
            <div class="image-overlay">
                <h1>Dobrodošli u svijet ribolova</h1>
                <p>Otkrijte prirodne ljepote i uživajte u nezaboravnom iskustvu ribolova</p>
            </div>
        </div>
        </header>

        <!-- Sadržaj stranice -->
<section class="content">
    <h2>O ribolovu</h2>
    <p>
        Ribolov je aktivnost koja povezuje ljude s prirodom već tisućama godina. U prošlosti, ribolov je bio presudan za preživljavanje, dok je danas postao omiljeni hobi i sport za mnoge ljude. Bez obzira radi li se o mirnom pecanju na jezeru, dinamičnom ribolovu u rijeci ili uzbudljivom ribolovu na otvorenom moru, ribolov nudi priliku za bijeg od svakodnevnih obaveza, povezivanje s prirodom i uživanje u miru.
    </p>
    
    <h3>Različite vrste ribolova</h3>
    <p>
        Postoje mnoge vrste ribolova koje privlače ljude diljem svijeta. Svaka vrsta zahtijeva specifičnu opremu, vještine i prilagodbu prirodnom okruženju:
    </p>
    <ul>
        <li><strong>Slatkovodni ribolov</strong> - Ova vrsta ribolova uključuje ribolov u rijekama, jezerima i potocima, gdje su najčešći ulovi vrste poput šarana, štuke i smuđa.</li>
        <li><strong>Morski ribolov</strong> - Ribolov na otvorenom moru nudi mogućnost ulova većih i snažnijih vrsta poput tune, sabljarke i morskog psa, što je veliki izazov za ribolovce.</li>
        <li><strong>Sportski ribolov</strong> - Usmjeren je na izazov i natjecanje, gdje ribolovci love različite vrste riba s ciljem postizanja što većeg ulova, a često se koristi tehnika "ulovi i pusti".</li>
        <li><strong>Mušičarenje</strong> - Specijalizirana tehnika koja koristi umjetne mušice kao mamce. Ova tehnika zahtijeva preciznost i vještinu, a popularna je među ribolovcima u planinskim rijekama i potocima.</li>
    </ul>

    <h3>Ekološka važnost ribolova</h3>
    <p>
        Održivi ribolov igra važnu ulogu u očuvanju ekosustava. Ribolovci sve više koriste metode poput "ulovi i pusti" kako bi smanjili pritisak na riblje populacije. Također, mnoge ribolovne zajednice aktivno sudjeluju u očuvanju staništa riba i edukaciji novih generacija ribolovaca o važnosti očuvanja prirode.
    </p>
    
    <h3>Utjecaj ribolova na kulturu i zajednicu</h3>
    <p>
        Ribolov nije samo sport, već i važan dio kulturnog naslijeđa mnogih naroda. U mnogim zajednicama ribolov je dio tradicije i okuplja obitelji, prijatelje i ljubitelje prirode. Ribolov potiče osjećaj zajedništva i pruža priliku za dijeljenje znanja i iskustava između generacija.
    </p>
    
    <p>
        Bilo da ste iskusni ribolovac ili početnik, ribolov nudi jedinstvenu priliku za povezivanje s prirodom, razvijanje strpljenja i uživanje u ljepotama našeg planeta. Pridružite se zajednici ribolovaca i otkrijte strast prema ribolovu!
    </p>
</section>


        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Ribolov</p>
        </footer>
    </div>

    <!-- JavaScript za dohvaćanje vremenskih podataka iz OpenWeather API-ja -->
    <script>
        const apiKey = 'e3b6e0bbda13422c434b9a77a747ac1b'; // Zamijenite s vašim API ključem
const city = 'Zagreb'; // Grad za koji prikazujemo prognozu
const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric&lang=hr`;

async function fetchWeather() {
    try {
        const response = await fetch(apiUrl);
        if (!response.ok) throw new Error('Došlo je do problema s dohvaćanjem podataka.');

        const weatherData = await response.json();
        displayWeather(weatherData);
    } catch (error) {
        document.getElementById('weather-desc').textContent = 'Nije moguće dohvatiti vremenske podatke.';
        console.error(error);
    }
}

function displayWeather(data) {
    document.getElementById('weather-desc').textContent = `Opis: ${data.weather[0].description}`;
    document.getElementById('temperature').textContent = `Temperatura: ${data.main.temp} °C`;
    document.getElementById('wind').textContent = `Vjetar: ${data.wind.speed} m/s`;
    document.getElementById('humidity').textContent = `Vlažnost: ${data.main.humidity}%`;
}

// Poziv funkcije za dohvaćanje vremenskih podataka
fetchWeather();

    </script>
</body>
</html>
