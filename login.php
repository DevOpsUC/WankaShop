<?php
include 'conexion_wk.php';

$usuario=$_POST["usuario"];

session_start();
$_SESSION['usuario']=$usuario;

$contrasena=$_POST["contrasena"];

$iniciosesion= " call sp_iniciar_sesion('$usuario','$contrasena')";

$resultado=mysqli_query($conexion , $iniciosesion);

$filas =mysqli_num_rows($resultado);

foreach ($resultado as $dato)
{
	$dato['tipo_usuario'];
	 $tipo_usu=$dato['tipo_usuario'];
	  $dato['id_usuario'];
	  $id_usuario=$dato['id_usuario'];
}
$_SESSION['id_usuario']=$id_usuario;
if($filas>=1 && $tipo_usu=="Dueño de Local") 
{
	header ("location:index_dueno.php");
}
if($filas>=1 && $tipo_usu=="Vendedor")
{
	header("location:index_vendedor.php");
}
 


else
{
	
	
echo '<script> alert ("Usuario no registrado o los datos ingresados son incorrectos");
    window.history.go(-1);

    </script>';
    exit;

}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
