<?php
   include 'projectEE/Db.php';
   $error = false;
   $object = new Db();
   $db = $object->connect();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM accounts WHERE user = '$username' and password = '$password'";
      $result = $db->query($sql);
      if($result){
        $numRows = $result -> num_rows;
      } else{
        $numRows = 0;
      }

    if($numRows>0){
        $_SESSION['login_user'] = $username;
        header("location: http://127.0.0.1/projectEE/admin/adminHome.php");
     }else {
        $error = true;
     }
       
   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
<!-- Aqui me quede para seguir revisando --> 
    <nav>
        <ul>
            <li><a href="admin.php" id="clicked" >Login Admin</a></li>
        </ul>   
    </nav>

    <section id="admin">
         <form action="" method="POST">
            <p> User</p>
            <input type="text" name="username" placeholder ="user" required>
            <p> Password</p>
            <input type="password" name="password" placeholder ="password" required> <br><br>
            <input type="submit">
        </form>
        <br><?php if($error){echo("USERNAME OR PASSWORD ARE INVALID");} ?><br>
    </section>
</body>
</html>