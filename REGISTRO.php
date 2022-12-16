<?php
    include("CONFIG.php");
    session_start();
    error_reporting(0);

if (isset($_SESSION["Usuario"])) {
    header("Location: PAGINA.php");
}

if(isset($_POST['registro'])){
    
    if(strlen($_POST['Usuario']) >= 1 &&  strlen($_POST['Nombre']) >= 1 &&  strlen($_POST['Correo']) >= 1 && strlen($_POST['Celular']) >= 1 &&  strlen($_POST['Contraseña'])>= 1 &&  strlen($_POST['V_Contraseña']) >= 1 )
    {
        $Usuario = trim($_POST['Usuario']);
        $Nombre = trim($_POST['Nombre']);
        $Correo = trim($_POST['Correo']);
        $Celular = trim($_POST['Celular']);
        $Contraseña = trim($_POST['Contraseña']);
        $V_Contraseña = trim($_POST['V_Contraseña']);
        $Fecha = date("d/m/y");

        if ($Contraseña == $V_Contraseña) {
            $Consultar = "SELECT * FROM cuentas WHERE Correo='$Correo'";
            $Resultado = mysqli_query($Conectar, $Consultar);
            if (!$Resultado->num_rows > 0) {
                $Consultar = "  INSERT INTO cuentas( Usuario, Nombre, Correo, Celular, Contraseña, Fecha) VALUES ('$Usuario','$Nombre','$Correo','$Celular','$Contraseña', '$Fecha')";
                $Resultado = mysqli_query($Conectar, $Consultar);

                if ($Resultado) {
                    echo "<script>alert('!Te haz registrado correctamente¡')</script>";
                } else {
                    echo "<script>alert('¡Lo sentimos no se ha podido realizar el registro, intentelo de nuevo!')</script>";
                }
            } else {
                echo "<script>alert('El correo ya existe')</script>";
            }
        }else{
         
            echo "<script>alert('Las contraseñas no coinciden')</script>";
        }
    }
    else{
        
        echo "<script>alert('¡Por favor complete los campos!')</script>"; 
    }
   
}
?>

<script type="text/javascript">
        function isNumberKey1(txt, evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            {
                return false;
            }
            return true;
        }
    </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilos/Estilophp.php">
    <title>Registro</title>
</head>
<body>
     
<form method="post">
        <h1>Registrate</h1>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">
        <input type="text" name="Nombre" placeholder="Nombre completo">
        <input type="text" name="Correo" placeholder="Correo electronico">
        <input type="text" name="Celular" onkeypress="return isNumberKey1(this, event);" maxlength = "10" placeholder="Número celular">
        <input type="Password" minlength="5" name="Contraseña" placeholder="Contraseña">
        <input type="Password" minlength="5" name="V_Contraseña" placeholder="Verifica tu contraseña">
        <input type="submit" name="registro">

    </form>
    <h3><a href="INGRESAR.php">Ya tengo cuenta</a> </h3>
   
  

</body>
</html>