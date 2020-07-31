<?php

//var_dump;
//print_r($_POST);
include 'conexion_wk.php';
echo '<pre>';
 $id_vendedor=$_POST['txtid_vendedor'];
 $nopago=$_POST['txtnopago'];
$estado_pago=$_POST['txtsipago'];


for($i=0;$i<=count($id_vendedor);$i++)
{
	
foreach ($id_vendedor as $id)
		{
		foreach ($estado_pago as $dato)
		{
			if($dato=='1')
			{
		$consulta =mysqli_query($conexion,"call sp_actualizar_cobro_diario($id[$i],$estado_pago[$i])");
		header ("location:cobro_participantes.php?codigo=111");
	}
		}

		}

	


	}






// foreach ($nopago as $datos )

// {
// 	if($dato=='0')
// 	{

// 		echo "no pagaron";
// 		//$consulta =mysqli_query($conexion,"call sp_actualizar_cobro_diario($id,$)")
// 	}

// }

 


// else

// {

// echo ("Error");
// }




?>