
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Great Escape</title>
    
</head>
<body>
<div class="navbar-nav m-auto py-4">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                   
  <h1>  Bienvenido!</h1>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    
    <title> THE GREAT ESCAPE</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="dist/css/landing.css" />
    <link rel="stylesheet" href="src/css/paths.css" />
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a>Made by Alex Ventura & Guillem Abad</a>
          <br>
        </li>

        
        </li>
      </ul>
    </nav>

    <header id="home">
      <div class="container container-flex">
        <h1>


        <?php
session_start();
if(!isset($_SESSION['nombre'])){
  header('Location: index.php');
  exit();
}
?>

Bienvenido <?php echo $_SESSION['nombre']; ?>

        <h3>
          Explora las diferentes habitaciones <i class="fas fa-door-open"></i> con diversos objetos
          <i class="fas fa-key"></i> para escapar.
        </h3>

        <img src="assets/landing/correr.gif" alt="SASSCAPE ROOM demo" />

        <p>
          <a href="game.php" class="action-btn"
            >Listo</a>
          
        </p>
      </div>
    </header>

    
   
  </body>
</html>
