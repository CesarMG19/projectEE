<?php
$hostname="localhost";
$username="cesar";
$password="Christo48";
$database= "univa";
$table="usercomments";
$test = "true";

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $test = "false";
    $usernameform     =$_POST['username'];
    $useremailform     =$_POST['useremail'];
    $usercommentsform =$_POST['usercomments'];
    $connection=mysqli_connect($hostname, $username, $password, $database);

if($connection==true){
    // echo "Great you are connected";  
    $sqlquery="INSERT INTO  $table (username, useremail,usercomments)
     VALUES ('$usernameform', '$useremailform', '$usercommentsform')";  
    //  echo $sqlquery;

    if( mysqli_query($connection, $sqlquery)){
        // echo "data inserted correctly";
        
    }else{
        echo ": (something wrong";
    }

}  else{
     echo "Sorry you don´t have connection";
}

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GDL Rent a Car</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div id="main">
        <header id="myheader">
            <div id ="logo"> 
                <h2>Renta de autosadlkjsldjflsjfdl</h2>
                <p>Mas facil de rentar tu auto</p>
            </div>
        </header>
        <nav class="menu">
            <ul>
                <li><a href="#">Galeria</a></li> 
                <ul class="dropdown-content" >
                    <li><a href="#"></a>Cotiza</li>
                    <li><a href="#"></a>Reservacion</li>
                    <li><a href="#"></a>Checar disponibilidad</li>
                </ul>
            </ul>
        </nav>
        <section>
            <h3>contact form</h3>
            
            <form action="" method="POST">
                <input type="text" name="username" placeholder="User Name">                
                <input type="email" name="useremail" placeholder="User email">
                <p></p>
                <textarea name="usercomments"  cols="30" rows="10" placeholder="User Comments"></textarea>
                <input type="submit" value="Enviar comentarios">

            </form>
        </section>      
       
        <aside id="slide">       
            <img id="slider" src="imagenes/car-rental.png" width="95%" height="center" alt="tets">
        </aside><br>
        

    </div>
    <br>
    <footer id="fin">
        <p>2019 &copy; Developer by Cesar Gonzalez Avila </p>
    </footer>
</body>
</html>