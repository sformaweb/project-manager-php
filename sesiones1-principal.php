<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:sesiones1-login.php?redirigido=true");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página principal</title>
</head>
<body>
    <?php echo "Bienvenido Mr ".$_SESSION ['usuario'];?>
    <br><a href= "sesiones1-logout.php"> Salir</a>

</body>
</html>
