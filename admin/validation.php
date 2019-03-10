<?php
$hostname="localhost";
$username="root";
$password="";
$database= "univa";
$table="login";

// $usernameform     =$_GET['username'];
// $useremailform     =$_GET['useremail'];
// $usercommentsform =$_GET['usercomments'];
$userlogin=$_GET['username'];
$passwordlogin=$GET['password'];


$connection=mysqli_connect($hostname, $username, $password, $database);


    if($connection ==true){
        $sqlquery= "SELECT username, password FROM login WHERE username = '$username' and password = '$password'";
        $result=mysqli_query ($connection, $sqlquery);

        if(result==TRUE)

    }  else{
        echo "Sorry you don´t have connection";
        }





?>