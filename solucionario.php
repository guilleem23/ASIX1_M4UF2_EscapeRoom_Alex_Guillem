<!DOCTYPE html>
<html>
<head>
	<title>The Great Escape</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">




    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>


    

<body class="bg-white">
   
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <p class="mr-2 mb-2 mb-lg-0 text-white">Made By:</p>
                    <span class="mb-2 mb-lg-0 text-white">Alex Ventura y Guillem Abad</span>
                </div>
            </div>
           
        </div>
        
    </div>
    


   
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">The Great</span>Escape</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Extras</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="premios.php" class="dropdown-item">Hisoria y premios ganados</a>
                            <a href="solucionario.php" class="dropdown-item">Solucionario</a>
                        </div>
                    
            </div>
        </nav>
    </div>
   
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/oscuro.png" alt="Image">
                    <br>
                
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        
                    
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">Solucionario</h4><br><br>
                        <div class="solu"> Introduce tu nombre de Usuario y Contraseña para ver las soluciones:<br><br> Pista, introduce tu nombre en minúsculas y la contraseña es tu apellido también en minúsculas</div>
                        <br>
                    
                        <form method="post" action="solucionario.php">
		<label>Nombre:</label>
		<input type="text" name="nombre"><br><br>
		<label>Contraseña:</label>
		<input type="password" name="contraseña"><br><br>
		<input type="submit" value="Iniciar sesión">
	</form>
</body>
</html>



<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST["nombre"];
	$contraseña = $_POST["contraseña"];
	if ($nombre == "alberto" && $contraseña == "desantos") {
		$_SESSION["logueado"] = true;
		header("Location: solucionario2.php");
		exit;
	} else {
		echo "El nombre de usuario o la contraseña es incorrecta. Inténtelo de nuevo.";
	}
}
?>



                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

 
    <script src="js/main.js"></script>
                                                                                                            <?php
                                                                                                                            if(!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == "") {
                                                                                                                                          header("Location: index.php");
                                                                                                                                                          exit();
                                                                                                                                                            }
                                                                                                                                                            ?>      
</body>
</html>