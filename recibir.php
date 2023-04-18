<?php
session_start();
if (!isset($_SESSION['empezar']) || $_SESSION['empezar'] !== true) {
  header('Location: index.php');
  exit();
}
?>

<?php
session_start();
if(!isset($_SESSION['nombre'])){
  header('Location: index.php');
  exit();
}
?>



<?php
session_start();
if(!isset($_SESSION['inicio'])){
  header('Location: index.php');
  exit();
}
?>


