<?php
session_start();
$varsesion=$_SESSION['usuario'];
$varid=$_SESSION['id_usuario'];
if($varsesion ==null || $varsesion='')
 {
echo "No inicio sesion";
 die();
}
if (!isset($_GET["codigo"])) {
  exit();
}

$codigo = $_GET["codigo"];
include 'conexion_wk.php';
date_default_timezone_set('America/Lima');
$fecha_actual = date("d-m-Y");
$fecha_convert=date("d-m-Y",strtotime($fecha_actual));


$consulta=mysqli_query($conexion,"call sp_cobro_diario('$codigo') ");






?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">


    <title>WankaShop</title>
  </head>

<body>


			
	<?php include 'maqueta/maqueta_dueno.inc' ?>
<form enctype="multipart/form-data" class="container" action="cobro_participantesphp.php" method="post">
	 <div class="table-responsive">
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres y Apellidos</th>
      <th scope="col">N° de DNI</th>
      <th scope="col">Rubro</th>
      <th scope="col">Pre.Alquiler</th>
  	  <th scope="col">Fech. de Reserva</th>
      <th scope="col">N° Boleta</th>
      <th scope="col">Pago</th>
    </tr>
  </thead>

  <?php

$contador = 0;
		while($datos = $consulta -> fetch_assoc()){
		$contador++;

$datos['fecha_reserva_inicio'];

$fechas=$datos['fecha_reserva_inicio'];


		if(date("d-m-Y",strtotime($fechas)) ==$fecha_convert)
		{

			
		

	

		
?>


  <tbody>
  	
    <tr>
    	<input type="hidden" name="txtid_vendedor[]" value="<?php echo $datos['id_vendedor'] ;?>">
      <th scope="row"><?php echo $contador;?></th>
      <td><?php echo $datos['nombres_vendedor'] ;?></td>
      <td><?php echo $datos['dni_vendedor'] ;?></td>
      <td><?php echo $datos['rubro'] ;?></td>
      
      <td><?php echo $datos['precio_alqui'] ;?></td>
      <td><?php echo $datos['fecha_reserva_inicio'] ;?></td>
      <td><?php echo $datos['Num_comprobante'] ;?></td>
<?php
if($datos['estado_pago']=='1')
		{
			
    echo "<td><input type='checkbox'   checked='checked' /></td>";
  		echo "<input type='hidden' name='txtsipago[]' value='1' >";
  }
   
  if($datos['estado_pago']=='0' )
  {

  	echo "<td><input type='checkbox'   /></td>";
  	echo "<input type='hidden' name='txtnopago[]' value='0' />";
  }
   
  
  ?>
    </tr>
    <?php
         } 
      }
        ?>
  </tbody>

</table>

</div>





    <button class="btn btn-primary center-block" type="submit">Actualizar Cobro</button>
  


		
	</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>
	

