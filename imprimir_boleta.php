<?php
include 'conexion_wk.php';
session_start();
$varsesion=$_SESSION['usuario'];
$varid=$_SESSION['id_usuario'];
if($varsesion ==null || $varsesion='')
 {
echo "No inicio sesion";
 die();
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
    <?php include 'maqueta/maqueta_vende.inc' ?>
    <!-- fin menú -->

    <!-- vehiculos -->
    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescargar Boleta: </h1>
    <div class="container col-md-3 mb-2">
      <div class="row">

      <form enctype="multipart/form-data" class="container" action="registrar_local_php.php" method="post">
      
      <input type="hidden" name="txtidusuario" value="<?php echo $varid ?>">
      <br>
      <br>
      <a class="btn btn-danger center-block " target="_blank" href="compro.php?codigo=<?php echo $varid; ?> ">Descargar Boleta</a>
     
    </form>
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