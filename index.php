<?php
    
    $homeTitle ='';
     $homeImage ='';
  
     function connect(){
        $serverName = "localhost";
        $userName = "cesar";
        $password = "Christo48";
        $database = "univa";
        $connection = new mysqli($serverName, $userName, $password, $database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        } else{
            return $connection;
        } 
    }
 

    
    $sql = "SELECT * FROM home";
    $result = connect()->query($sql);
    $numRows = $result -> num_rows;
    if($numRows>0){
        $ot = $result->fetch_assoc();
        //return $result->fetch_assoc();
        $homeTitle = $ot['title'];
        $homeImage = $ot['backImage'];
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
    <link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    
    <header>
                <img src="imagenes/rent-car-logo2.png" class="img-logo">
                <input type="checkbox" id="check">
                <label for="check" class="img-menu"></label>
                
        
                <nav class="menu">
                    <ul>
                        <li><a href="index.php" id="click" style="background:#df6666;color:white;border-radius: 10px;">Inicio</a></li>
                        <li><a href="about.php">Acerca de</a></li>
                        <li><a href="services.php">Servicios</a></li>
                        <li> <a href="phpprocess/contact.php">Contacto</a>
                    </ul>
                </nav>
    </header>
    <main>
        <div class="content-one">
            <div id="container">
                <div id="centered"><?php echo($homeTitle); ?> </div>
                <img src="<?php echo($homeImage); ?>" alt="" style="width:100%;">    
            </div>
        </div>
        <div class="content-two">
            <div class="content-details">
                <div class="content-item2">
                    <img src="iconos/149061.png" alt="">
                    <h4>Desing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit laboriosam nostrum vel,
                        ducimus numquam nihil eius, tenetur aliquam blanditiis in impedit totam distinctio temporibus neque? 
                        Cumque harum distinctio doloribus?</p>
                </div>
                <div class="content-item2">
                        <img src="iconos/148939.png" alt="">
                        <h4>Desing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit laboriosam nostrum vel,
                            ducimus numquam nihil eius, tenetur aliquam blanditiis in impedit totam distinctio temporibus neque? 
                            Cumque harum distinctio doloribus?</p>
                </div>
                <div class="content-item2">
                        <img src="iconos/149005.png" alt="">
                        <h4>Desing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit laboriosam nostrum vel,
                            ducimus numquam nihil eius, tenetur aliquam blanditiis in impedit totam distinctio temporibus neque? 
                            Cumque harum distinctio doloribus?</p>
                </div>
            </div>
        </div>
        <div class="content-three">
            <div class="content-module">
               <h3>Sobre nuestra empresa</h3> 
               <img src="imagenes/fmx-mustang-shelby-2018-showroom.png" class="image1">
               <img src="imagenes/chevrolet-express-van-grau-2015.png"class="image2" >
               <img src="imagenes/carros2.png" class="image3" >
            </div>
        </div>

    </main>     
        <footer>
           <!-- <a href="www.twiter.com"> <label class="icon-twiter"></label></a> -->
            <label class="icon-facebook"></label>
            <label class="icon-instagram"></label>
            
            <p>2019 &copy; Developer by Cesar Gonzalez Avila </p>
        </footer>
</body>
</html>