<?php
$servername = "localhost";
$username = "Donnie3V";  // Käyttäjän nimi ja samalla tietokanta-alueen nimi; korvaa omallasi
$password = "lima123";     // Käyttäjän salasana; korvaa omallasi
try {
       $yhteys = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
       $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Ei yhteyttä tietokantaan!<br> " . $e->getMessage();
    }
?>