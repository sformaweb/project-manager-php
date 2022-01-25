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
    <br><a href= "../sesiones1-logout.php"> Salir</a>

</body>
</html>

<?php
// use phpGrid\C_DataGrid;

include_once("../phpGrid/conf.php");
include_once('../inc/head.php');
?>

<h1>Xestor de proxectos</h1>

<?php
$_GET['currentPage'] = 'clients';
include_once('../inc/menu.php');
?>

<h3>Clientes</h3>

<?php
$dgClient = new C_DataGrid("SELECT id, Name, Website, Industry, Phone FROM clients", "id", "clients");
$dgClient->set_col_hidden('id');
$dgClient->set_col_link('Website');
$dgClient->set_col_dynalink('Name', 'client-details.php', 'id');
$dgClient->enable_edit();
$dgClient -> display();
?>

<?php
include_once('../inc/footer.php');
?>