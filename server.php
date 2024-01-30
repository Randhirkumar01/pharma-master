<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'pharma-master');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $no = mysqli_real_escape_string($db, $_POST['no']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, no, gender) 
  			  VALUES('$username', '$email', '$password', '$no', '$gender')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$password_encry = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password_encry'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1)
     {
      $row = mysqli_fetch_assoc($results);
      $_SESSION['username'] = $row['username'];
      echo"<script>
      alert('Login Successfull');
      window.location.href='Home.php';
  </script>";
  	 }
    else 
    {
      echo"<script>
      alert('Invalid email & password');
      window.location.href='login.php';
  </script>";
  		
  	}
  }


?>