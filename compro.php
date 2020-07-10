<?php

require_once __DIR__ . '/vendor/autoload.php';

include 'conexion_wk.php';



// $consul_vend=mysqli_query($conexion,"SELECT id_vendedor from tbl_vendedor where id_vendedor = (SELECT MAX(id_vendedor) FROM tbl_vendedor)");

// if ($row = mysqli_fetch_row($consul_vend)) 
//  {
//    $id = trim($row[0]);

//  }




$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="css2/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="css2/logo.png" style="width:200px">
      </div>
      <h1>COMPROBANTE DE INGRESO</h1>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">#</th>
            <th class="desc">NOMBRES</th>
            <th>DNI</th>
            <th>RUBRO</th>
            <th>ALQUILER</th>
            <th>LOCAL</th>
            <th>FECHA</th>
            <th>N° BOLETA</th>
          </tr>
        </thead>
        <tbody>';
        if (!isset($_GET["codigo"])) {
  exit();
}
$codigo = $_GET["codigo"];

$id_usuario=$codigo;
echo $id_usuario;
        $conexion = new mysqli("localhost","root","","bd_wankashop");
		$consulta =mysqli_query($conexion,"call sp_factura('$id_usuario')");
 
 
		
		$contador = 0;
		while($filas = $consulta -> fetch_assoc()){
		$contador++;

          $html.='<tr>
            <td class="service">'.$contador.'</td>
            <td class="desc">'.$filas['nombres_vendedor'].'</td>
            <td class="unit">'.$filas['dni_vendedor'].'</td>
            <td class="unit">'.$filas['rubro'].'</td>
            <td class="unit">'.$filas['precio_alqui'].'</td>
            <td class="unit">'.$filas['nomb_lcl'].'</td>
            <td class="unit">'.$filas['fecha_reserva_inicio'].'</td>
            <td class="unit">'.$filas['Num_comprobante'].'</td>';

        }
          $html.='</tr>
        </tbody>
      </table>
      <div id="notices">
        <div>Importante:</div>
        <div class="notice">El pago se realizara y validara en la entrada del local registrado. </div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$css = file_get_contents('css/style.css');
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
