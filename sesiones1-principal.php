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
<br> <br>
<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try{
    $bd = new PDO ($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito";
    $sql = "SELECT nombre, clave, rol FROM usuarios";
    $usuarios = $bd->query($sql);
    echo $usuarios->rowCount(). "<br>";
    foreach ($usuarios as $row){
        print $row ['nombre']. "\t";
        print $row ['clave']. "\t";
    }
}
catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
  }