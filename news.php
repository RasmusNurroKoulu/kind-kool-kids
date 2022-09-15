<?php
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("connect.php"); // Sisällyttää aiemmin tehdyn yhteys.php-tiedoston tähän
// Taulun nimi on jasenet, ei esim Jäsenet tai Jasenet
// Listataan kaikki = *
$sql_lause = "SELECT * FROM news";
try {
$kysely = $yhteys->prepare($sql_lause);
$kysely->execute();
}
catch (PDOException $e) {
die("VIRHE: " . $e->getMessage());
}
$tulos = $kysely->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body {
            margin: 0 auto;
            background-position:center;
            background-size: contain;
        }
      
        .menu { 
            position: sticky;
            top: 0;
            background-color: #0267ff;
            padding:10px 0px 10px 0px;
            color:white;
            margin: 0 auto;
            overflow: hidden;
        }
        .menu a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        footer {
            width: 100%;
            bottom: 0px;
            background-color: #000;
            color: #fff;
            position: absolute;
            padding-top:20px;
            padding-bottom:50px;
            text-align:center;
            font-size:30px;
            font-weight:bold;
        }

        .formi {
                position: sticky;
                top: 0;
                background-color: white;
                padding:50px 0px 10px 0px;
                color:white;
                margin: 0 auto;
                overflow: hidden;
            }

        html {
          zoom: .8;
        }

    </style>
    
    <body>
        <nav class="menu">
            <a href="home.html">Etusivu</a>
            <a href="news.php">Uutiset</a>
            <a href="register.php">Ilmottautuminen</a>
        </nav>
        <?php
        echo "<table border='2' width='100%' height='79%'>";
            foreach($tulos as $rivi) {
            echo "<tr>";
                echo "<td>";
                    echo "<h1>{$rivi['otsikko']}</h1> <p>{$rivi['teksti']}</p> <p>Julkaistu: {$rivi['aika']} <div/>";
                echo "</td>";
            echo "</tr>";
            }
        echo "</table>";
            ?>
        <footer>Copyright 2022 Donnie Kanerva, Rasmus Nurro, Valtteri Kujala</footer>
    </body>
</html>
