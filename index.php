<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
</head>

<!-- login form in begining and recheking the repo, but its already been one week to push it in github .. so sadden but ok-->
<body>
  <div class="background">
    <div class="box">
      <form action="login.php" method="post" >
        <div class="form">
          <h2>LOGIN</h2>

          <div class="input">
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input">
            <input type="password" name="password" placeholder="Password" required />
          </div>

          <div class="check">
            <input type="checkbox" required />Remember me

            <a href="">Forget Password</a>
          </div>

          <button type="submit">Login</button>
          <div class="register">
            <p>Don`t have an account..? <a href="register.php" target="register">Register</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
<?php



$server="localhost";
$username="root";
$password="";
$dbname="login";

$connection=mysqli_connect($server,$username,$password,$dbname);

if(!$connection){
    die("Connection failed to database" . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "Login is valid";
        header("Location: https://www.facebook.com/");
    } else {
        echo " Sorry!, Don`t have an account..? then register";
    }
}

mysqli_close($connection);
?>
