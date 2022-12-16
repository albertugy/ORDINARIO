<?php
    include("CONFIG.php");
    session_start();
    error_reporting(0);
    

if (isset($_SESSION["Usuario"])) {
    header("Location: PAGINA.php");
}

if(isset($_POST["registro"])){
    $Correo = trim($_POST['Correo']);
    $Contraseña = trim($_POST['Contraseña']);

    $Consultar = "SELECT * FROM cuentas WHERE Correo='$Correo'AND Contraseña = '$Contraseña'";
    $result = mysqli_query($Conectar,$Consultar);
    
    if($result->num_rows>0){
        $row = mysqli_fetch_array($result);
        $_SESSION['Usuario']= $row['Usuario'];
        header("Location: PAGINA.php");

        echo"<script>alert('haz iniciado sesión')</script>";
    }
    else{
       echo"<script>alert('La contraseña o el email son incorrectos')</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilos/Estilophp.php">
    <title>Iniciar sesión</title>
</head>
<body>
     
<form method="post">
        <h1>Iniciar sesión</h1>
        
         <input type="text" name="Correo" placeholder="Correo electronico">
        <input type="Password" minlength="5" name="Contraseña" placeholder="Contraseña">
        <input type="submit" name="registro">

    </form>
    <br>
    <h3><a href="REGISTRO.php">No tengo cuenta...</a> </h3>
    <br>
    <hr>
   
  

</body>
</html>