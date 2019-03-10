<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Password</th>
    <th>Registro</th>
  </tr>
  
  

<?php
$hostname="localhost";
$username="root";
$password="Christo48";
$database= "univa";
$table="usercomments";

// $usernameform     =$_GET['username'];
// $useremailform     =$_GET['useremail'];
// $usercommentsform =$_GET['usercomments'];


$connection=mysqli_connect($hostname, $username, $password, $database);

if($connection ==true){
    $sqlquery= "SELECT * FROM $table";
    $result=mysqli_query ($connection, $sqlquery);

    if(mysqli_num_rows($result) >0){
        while($row=mysqli_fetch_assoc($result)){
       echo"<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['registro']."</td>";
        // .$row['username']."-".$row['useremail']."-".row
        // ['usercomments']."<br>";
        echo"</tr>";
        }

    }


// if($connection==true){
//     // echo "Great you are connected";  
//     $sqlquery="INSERT INTO  usercomments (username, useremail,usercomments)
//      VALUES ('$usernameform', '$useremaiform', '$usercommentsform')";  
//      echo $sqlquery;

    // if( mysqli_query($connection, $sqlquery)){
    //     echo "data inserted correctly";
    // }else{
    //     echo ": (something wrong";
    // }

}  else{
     echo "Sorry you don´t have connection";
}





?>

</table>

</body>
</html>