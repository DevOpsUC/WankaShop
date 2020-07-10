<?php


require_once __DIR__ . '/vendor/autoload.php';

include 'conexion_wk.php';
$codigo = $_POST['codigo'];
$fecha_inicio=$_POST['fecha_hasta'];
$fecha_fin=$_POST['fecha_fin'];
 

$consulta =mysqli_query($conexion,"call sp_monto_total('$codigo','$fecha_inicio','$fecha_fin')");


foreach ($consulta as $dato)
{

$dato['nomb_lcl'];
$local=$dato['nomb_lcl'];
$dato['total'];
$total=$dato['total'];
echo $total;
echo $codigo;
}



    
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
   <h1>'.$dato[nomb_lcl].'</h1>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">#</th>
            <th class="desc">NOMBRES</th>
            <th>DNI</th>
            <th>RUBRO</th>
            <th>PRECIO ALQUILER</th>
       
            <th>FECHA</th>
            <th>N° BOLETA</th>
          </tr>
        </thead>
        <tbody>';

  $conexion = new mysqli("localhost","root","","bd_wankashop");
    $consulta =mysqli_query($conexion,"call sp_reporte_local('$fecha_inicio','$fecha_fin','$codigo')");
      $contador = 0;




    while($filas = $consulta -> fetch_assoc()) 
 {
 $contador++;
    
   

    

          $html.='<tr>

         
            <td class="service">'.$contador.'</td>
            <td class="desc">'.$filas['nombres_vendedor'].'</td>
            <td class="unit">'.$filas['dni_vendedor'].'</td>
            <td class="unit">'.$filas['rubro'].'</td>
            <td class="unit">'.$filas['precio_alqui'].'</td>
           
            <td class="unit">'.$filas['fecha_reserva_inicio'].'</td>
            <td class="unit">'.$filas['Num_comprobante'].'</td>';
           
        }


          $html.='</tr>

        </tbody>
      </table>
      <div id="notices">
        <h3>Total de Alquileres: S/.'.$dato['total'].'</h3>
        
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
