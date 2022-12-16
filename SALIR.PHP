<?php
session_start();

if (isset($_SESSION['Usuario'])) {
        session_destroy();
    ?>    <script>alert('Ha cerrado sesion exitosamente');
        window.location.href='index.php';
    </script>
  <?php
}
else {

    ?>
    <script>alert('No hay ninguna sesión iniciada');
        window.location.href='index.php';
    </script>
    <?php
}

?>