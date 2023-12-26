
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>

  <div class="background">
    <div class="box">
      <form class="form" action="register.php" method="post">

        <h2>REGISTER</h2>

        <div class="input">
          <input type="text" name="name" placeholder="Name" required />
        </div>
        <div class="input">
          <input type="email" name="email" placeholder="Email" required />
        </div>
        <div class="input">
          <input type="password" name="password" placeholder="Password" required />
        </div>
        <div class="input">
          <input type="password" name="repass" placeholder="Confirm Password" required />
        </div>
        <button type="submit">SIGN UP</button>
        <div class="register">
          <p>Already have an account..? <a href="login.html" target="_blank">LOGIN</a></p><br>
       
        </div>
        
      </form>
    </div>
  </div>

</body>

</html>
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed to database: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];
    if ($password != $repass) {
        die("Re confirm...Passwords do not match");
    }

    
    
    $sql = "INSERT INTO `login`.`login` (`name`, `email`, `password`, `repass`) VALUES ('$name', '$email', '$password', '$repass');";

    if (mysqli_query($connection, $sql)) {
        echo ("Data inserted successfully!");
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>


