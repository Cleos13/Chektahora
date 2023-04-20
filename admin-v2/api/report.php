<?php 
    include '../lib/config.php';
    date_default_timezone_set("America/Mexico_City");
    $date_start = strtotime(str_replace('/', '-', $_GET['start']));
    $date_end = strtotime(str_replace('/', '-', $_GET['end']));
    if(isset($_GET['pay'])){
        $type = $_GET['pay'];
        $get = $conn->query("SELECT * FROM its WHERE time_pago >= '$date_start' AND time_pago < '$date_end' AND estatus_pay = 1 AND type_pay = '$type' ORDER BY ID");
    }else{
        $get = $conn->query("SELECT * FROM its WHERE time_pago >= '$date_start' AND time_pago < '$date_end' AND estatus_pay = 1 ORDER BY ID");
    }
    if($get->num_rows == 0){
        header('Location: ../all-orders?a=false');
    }
    $products = $conn->query("SELECT * FROM productos_orden");
    $products_d = $products->fetch_all(MYSQLI_ASSOC);
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Chektahora</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Montserrat', sans-serif !important;
        }
        body{
            margin: 0px 0px;
        }
        tbody{
            border: 1px solid #000;
        }
        thead{
            background-color: #4F2D83;
            color: #fff;
        }
        table{
            border-collapse: collapse;;
        }
        th{
            border: 1px solid #000;
            text-align: left !important;
            font-size: 11px;
            padding: 6px 5px;
        }
        td{
            text-align: left !important;
            border: 1px solid #000;
            font-size: 11px;
            padding: 6px 8px;
        }
        td div{
            padding: 1px 0;
        }
        .header{
            display: flex;
            width: 100%;
            margin-bottom: 50px;
        }
        .info{
            text-align: start;
        }
        .date{
            display: flex;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <span class="info">
            <h1>ChektAhora</h1>
        </span>
        <span class="date">Reporte: 12/12/2022 - 14/05/2022</span>
    </div>
        <table class="table">
            <thead>
                <th style="width: 10px;">#</th>
                <th style="width: 10px;">ID</th>
                <th style="width: 200px;">INFORMACIÓN</th>
                <th style="width: 100px;">PRODUCTOS</th>
                <th style="width: 80px;">METODO</th>
                <th style="width: 120px;"></th>
            </thead>
            <tbody>
                <?php
                if($get->num_rows == 0){
                    echo '<tr>
                    <td style="width: 10px;">#0</td>
                    <td style="width: 10px;"></td>
                    <td style="width: 200px;">Sin ordenes en el rango</td>
                    <td style="width: 100px;"></td>
                    <td style="width: 80px;"></td>
                    <td style="width: 120px; text-align: center;"></td>
                </tr>';
                }else{
                    foreach ($get as $d){
                        echo '<tr>
                                <td style="width: 10px;"><span style="font-weight: bold;">#'. $d['orden'] .'</span></td>
                                <td style="width: 10px;">'. $d['ID_compra'] .'</td>
                                <td style="width: 200px;">
                                    <div style="margin-bottom: 10px;">
                                        <div><span style="font-weight: bold;">Nombre:</span> '. $d['nombre'] .'</div>
                                        <div><span style="font-weight: bold;">Email:</span> '. $d['email'] .'</div>
                                        <div><span style="font-weight: bold;">Tel:</span> '. $d['tel'] .'</div>
                                        <div><span style="font-weight: bold;">Fecha de nacimiento:</span> '. $d['fecha_nacimiento'] .'</div>
                                        <div><span style="font-weight: bold;">Sexo:</span> '. $d['sexo'] .'</div>
                                        <div><span style="font-weight: bold;">Nos conoce:</span> '. $d['conoce'] .'</div>';

                                        if($d['clinicos'] != ''){
                                            echo '<div><span style="font-weight: bold;">Clinicos:</span> '. $d['clinicos'] .'</div>';
                                        }
                                        if($d['its'] != ''){
                                            echo '<div><span style="font-weight: bold;">Its:</span> '. $d['its'] .'</div>';
                                        }
                                        if($d['medicamentos'] != ''){
                                            echo '<div><span style="font-weight: bold;">Medicamentos:</span> '. $d['medicamentos'] .'</div>';
                                        }
                                        if($d['sintomas'] != ''){
                                            echo '<div><span style="font-weight: bold;">Sintomas:</span> '. $d['sintomas'] .'</div>';
                                        }
                                        if($d['pasaporte'] != ''){
                                            echo '<div><span style="font-weight: bold;">Pasaporte:</span> '. $d['pasaporte'] .'</div>';
                                        }

                                    echo ' <div style="margin-bottom: 2px; margin-top: 5px;"></div>
                                        <div><span style="font-weight: bold;">Calle:</span> '. $d['calle'] .'  - <span style="font-weight: bold;">No. Ext:</span> '. $d['no_ext'] .'  -  <span style="font-weight: bold;">No. Int:</span> '. $d['no_int'] .'</div>
                                        <div><span style="font-weight: bold;">Colonia:</span> '. $d['colonia'] .'</div>
                                        <div><span style="font-weight: bold;">Municipio:</span> '. $d['municipio'] .'</div>
                                        <div><span style="font-weight: bold;">Estado:</span> '. $d['estado'] .'</div>
                                        <div><span style="font-weight: bold;">Codigo postal:</span> '. $d['cp'] .'</div>
                                    </div>
                                </td>
                                <td style="width: 100px;">';
                                foreach ($products_d as $p){
                                    if($p['id'] == $d['ID']){
                                        echo '<div>- '. $p['nombre'] .' <span style="font-weight: bold;">('. $p['cantidad'] .')</span></div>';
                                    }
                                }
                                echo '</td>
                                <td style="width: 80px;">
                                    <div><span style="font-weight: bold;">'. $d['type_pay'] .'</span></div>
                                    <div>'. $d['fecha_pago'] .'</div>
                                    <div>'. $d['hora_pago'] .'</div>
                                </td>
                                <td style="width: 120px; text-align: center;">
                                    <div><span style="font-weight: bold;">Descuento:</span> $'. $d['cant_cupon'] .'</div>
                                    <div><span style="font-weight: bold;">Envio:</span> $'. $d['envio'] .'</div>
                                    <div><span style="font-weight: bold;">Cupon:</span> '. $d['cupon'] .'</div>
                                    <div><span style="font-weight: bold;">Pagado:</span> $'. $d['total'] .'</div>

                                </td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
</body>
</html>
<?php $html = ob_get_clean(); 
    include 'pdf/autoload.inc.php'; 
    use Dompdf\Dompdf;

    $pdf = new Dompdf();
    $options = $pdf->getOptions();
    $options->set(['isRomoteEnabled' => true]);
    $pdf->setOptions($options);
    $pdf->loadHtml($html);
    $pdf->setPaper('letter');
    $pdf->render();
    $pdf->stream(time() . 'reporte.pdf', ['Attachment' => true]);
?>