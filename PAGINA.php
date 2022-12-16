<?php
    session_start();
    //poner esto cuando se quiera llamar al inicio de sesion
        
    if (!isset($_SESSION['Usuario'])) {
        header("Location: REGISTRO.php"); //con esta linea puedes mandar a otros documentos
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
    <h1>Bienvenido</h1>

<a href="SALIR.php"> Cerrar sesion</a>

    
</body>
</html>