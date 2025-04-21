<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/FavIcon.jpg" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

          
  <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
            <div class="site-logo">
              <a href="index.html">pill &mdash; point</a>
            </div>
          </div>
  <form method="post" action="register_1.php">
  	<?php include('errors.php'); ?>
    <div class="login-box">
        <h1>Register Here</h1>
          <p>Full Name</p>
          <input
            id="name"
            placeholder="Enter your fullname "
            type="text"
            name="username" required   
            
            />
          <p>E-mail</p>
          <input
            type="email"
            id="name"
            placeholder="Enter your e-mail id"
            name="email" required  
            />
          <p>Password</p>
          <input placeholder="Enter your password" type="password" name="password_1"/>
          <p>Confirm Password</p>
          <input placeholder="Confirm your password" type="password" name="password_2"/>
          <p>Mobile number</p>
          <input
            id="name"
            placeholder="Enter mobile number"
            type="number"
            name="no" 
          />
         <label for="gender"><b>Gender :</b></label>
          <br /><br>
          <label for="Male"
            ><input type="radio" name="gender" value="M" />Male</label
          >
          <label for="Female"
            ><input type="radio" name="gender" value="F" />Female</label
          >
          <label for="Transgender"
            ><input type="radio" name="gender" value="T" />Transgender</label
          >
  
          <input id="name" type="submit" name="reg_user" value="Register" />

          <p>
            Already a member? <a href="login.php">Sign in</a>
          </p>
        </form>
      </div>
    </body>
  </html>
  
</body>
</html>