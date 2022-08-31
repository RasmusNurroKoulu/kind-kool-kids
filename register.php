<?php include('server.php');
include('connect.php')?>
<!DOCTYPE html>
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

        formi {
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

<head>
  <title>Ilmoittautuminen</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
  <nav class="menu">
	<a href="home.html">Etusivu</a>
	<a href="news.html">Uutiset</a>
	<a href="register.html">Ilmottautuminen</a>
  </nav>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Etunimi</label>
  	  <input type="text" name="etunimi" value="">
  	</div>
  	<div class="input-group">
  	  <label>Sukunimi</label>
  	  <input type="text" name="sukunimi" value="">
  	</div>
  	<div class="input-group">
  	  <label>Sähköposti</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Koulutalo</label>
  	  <input type="text" name="koulutalo" value="">
    </div>
    <div class="input-group">
      <label>Kurssi valinta</label>
	  <p class="p1">
      <input type="radio" name="kurssi" value="peruskurssi">peruskurssi
      <input type="radio" name="kurssi" value="harrastejaoston">harrastejaoston
      <input type="radio" name="kurssi" value="kilpajaoston">kilpajaoston
	  </p>
	</div>
    <div class="input-group">
        <label>Tekstikenttä</label>
  	  <input type="text" name="texti" value="">
    </div>
      <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>

<footer>Copyright 2022 Donnie Kanerva, Rasmus Nurro, Valtteri Kujala</footer>
</body>
</html>
