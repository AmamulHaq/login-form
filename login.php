<?php
$server="localhost";
$username="root";
$password="";
$dbname="login";
// to collect the data
$connection=mysqli_connect($server,$username,$password,$dbname);

if(!$connection){
    die("Connection failed to database" . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";

    if(mysqli_query($connection,$sql)){
        echo "Data inserted successfully!";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>


