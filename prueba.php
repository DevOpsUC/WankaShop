<?php



	//no está seleccionado
	




$checkbox = $_POST['txtnopago'];
 
if(is_array($checkbox))
{
	//si es un array
	if(!empty($checkbox))
	{
		//si no está vacío
		foreach($checkbox as $ckeck)
		{

			echo $ckeck;
			//aquí debes añadir a tu bbdd o lo que quieras hacer con cada uno de los valores de los inputs
			if($ckeck != NULL){
				//el checkbox está seleccionado
			}else{
				
			}
		}
	}
	else
	{
		$valor='1';
	}
}


?>

