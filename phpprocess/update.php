<?php
$hostname="localhost";
$username="root";
$password="";
$database= "univa";
$table="usercomments";

$usernameform     =$_GET['username'];
$useremailform     =$_GET['useremail'];
$usercommentsform =$_GET['usercomments'];


$connection=mysqli_connect($hostname, $username, $password, $database);

if($connection==true){
    // echo "Great you are connected";  
    $sqlquery="UPDATE INTO  $table (username, useremail,usercomments)
     VALUES ('$usernameform', '$useremailform', '$usercommentsform')";  
    //  echo $sqlquery;

    if( mysqli_query($connection, $sqlquery)){
        echo "data inserted correctly";
    }else{
        echo ": (something wrong";
    }

}  else{
     echo "Sorry you don´t have connection";
}

?>