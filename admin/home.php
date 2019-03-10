<?php
 
   $message = '';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $homeTitle = mysqli_real_escape_string($db,$_POST['homeTitle']);
      $homeImage = mysqli_real_escape_string($db,$_POST['homeImage']); 
      $sql = "UPDATE home SET titulo_home='$homeTitle', url_imagen_home='$homeImage' WHERE id=1";
    
    if ($db->query($sql) === TRUE) {
        $message = "Successfully updated home";
    } else {
        $message = "Error updating : " . $db->error;
    }
    $db->close();  
   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    

    <nav>
        <ul>
            <li><a href="" id="clicked" >Admin Home</a></li>
            <li><a href="adminAbout.php"  >Admin About Us</a></li>
            <li><a href="adminHeader.php"  >Admin Header</a></li>
            <li><a href="adminFooter.php"  >Admin Footer</a></li>
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href="adminContact.php"  >Admin Contact</a></li>
        </ul>
</nav>

    <section id="admin">
        <p> Change home text and image </p>
         <form action="" method="POST">
            <p> Home Title</p>
            <input type="text" name="homeTitle" placeholder ="text" required>
            <p> Image URL</p>
            <input type="text" name="homeImage" placeholder ="image url" required> <br><br>
            <input type="submit"> <br><br>
        </form>
        <button> <a id="botonLogout" href="logout.php"> Logout</a></button>
        <br><br><?php echo($message); ?><br>
    </section>

    

</body>
</html>