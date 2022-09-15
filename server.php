<?php
session_start();

// initializing variables
$etunimi = "";
$sukunimi = "";
$email    = "";
$koulutalo = "";
$kurssi = "";
$texti = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'donnie3v');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $etunimi = mysqli_real_escape_string($db, $_POST['etunimi']);
  $sukunimi = mysqli_real_escape_string($db, $_POST['sukunimi']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $koulutalo = mysqli_real_escape_string($db, $_POST['koulutalo']);
  $kurssi = mysqli_real_escape_string($db, $_POST['kurssi']);
  $texti = mysqli_real_escape_string($db, $_POST['texti']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($etunimi)) { array_push($errors, "Etunimi is required"); }
  if (empty($sukunimi)) { array_push($errors, "Sukunimi is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($koulutalo)) { array_push($errors, "Koulutalo is required"); }
  if (empty($kurssi)) { array_push($errors, "Kurssi is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  	$query = "INSERT INTO users (tunniste, etunimi, sukunimi, email, koulutalo, kurssi, texti) 
  			  VALUES(NULL, '$etunimi', '$sukunimi', '$email', '$koulutalo', '$kurssi', '$texti')";
  	mysqli_query($db, $query);
  	header('location: register.php');
  }
