


<?php
session_start();

$varsesion=$_SESSION['usuario'];
$varid=$_SESSION['id_usuario'];
if($varsesion ==null || $varsesion='')
 {
echo "No inicio sesion";
 die();
}
include 'conexion_wk.php';
if (!isset($_GET["codigo"])) {
  exit();
}

$codigo = $_GET["codigo"];
$sentencia = mysqli_query($conexion,"select * from tbl_local where id_locales= '$codigo'");
foreach ($sentencia as $dato)
{

	$dato['id_locales'];

}	
?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">


    <title>WankaShop</title>
  </head>
  <body>

    <!-- inicio menú -->
    <?php include 'maqueta/maqueta_dueno.inc' ?>
    <!-- fin menú -->

    <!-- vehiculos -->
   

      	<h2 class="text-center">Reportes</h2>
      	<form enctype="multipart/form-data" class="container" action="reportes_localphp.php" method="post">
      	<div class="container">
      <div class="row">
      	<div class="col-md-12 text-center mt-12">
      	<br>
      	<br>

      	<h4>Reporte Desde el:</h4>
      	<input type="date" name="fecha_hasta">
      	 
      
<br>
      	<br>
      <h4> Hasta el:</h4>
      	<input type="date" name="fecha_fin"> 
      </form>
      
 
      
      <br>
      <br>
      <!--<a class="btn btn-danger center-block " target="_blank" href="reportes_localphp.php?codigo=<?php echo $dato['id_locales']; ?>">Descargar Reporte</a>-->
     <input type="hidden" name ="codigo"value="<?php echo $dato['id_locales']; ?>">
     <input type="submit" value="Descargar Reporte"target="_blank"  >
    </form>
    
</div>
   </div>

     </div>

    <!-- fin vehiculos -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>