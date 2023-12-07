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
<!-- hello world -->