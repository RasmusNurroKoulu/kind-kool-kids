<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ilmoittautuminen</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Ilmoittautuminen</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Etunimi</label>
  	  <input type="text" name="etunimi" value="<?php echo $etunimi; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Sukunimi</label>
  	  <input type="text" name="sukunimi" value="<?php echo $sukunimi; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Sähköposti</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Koulutalo</label>
  	  <input type="text" name="koulutalo" value="<?php echo $koulutalo; ?>">
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
  	  <input type="text" name="texti" value="<?php echo $texti; ?>">
    </div>
      <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>