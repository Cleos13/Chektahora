<?php 
session_start();
if(empty($_SESSION['s']) || !isset($_SESSION['s'])){
    header('Location: api/logout');
}else{
    include 'lib/db.php';
    $db = new DB();
    $id = $_SESSION['s']['i'];
    $get = $db->connect()->prepare("SELECT * FROM users_backoffice WHERE id=:i");
    $get->bindParam(':i', $id);
    $get->execute();
    $data = $get->fetch(PDO::FETCH_OBJ);
}
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NNR8MBT');</script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta.">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Inicio | Chektahora </title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        .body-backoffice {
            height: 600px;
        }
        .logo-backoffice-mobile{
                display: none;
        }
        .space-backoffice{
            margin-top:5%;
        }
        @media screen and (max-width: 600px){
            .logo-backoffice-mobile{
                position: absolute;
                margin-top: 15px;
                display: block !important;

            }
            .styles-table{
                width: 95% !important;
                max-height: 500px !important;
            }
            .search-data{
                margin-bottom: 20px !important;
                margin-top: 20px !important;
                padding: 0px 10px !important;
            }
            .input-search{
                color: #000 !important;
            }
            td, th {
              padding: 3px 10px !important;
            }
        }
        table {
            font-size: 12px;    
            width: 580px; 
            text-align: left;    
            border-collapse: collapse;
            border: 1px solid #4F2D83;
        }
 
        tr:hover td { 
            background: #d0dafd; 
            color: #339; 
        }


        #customers{
          border-collapse: collapse;
          width: 100%;
          margin-bottom: -150px;
        }

        #customers td, #customers th {
          border: 1px solid #4F2D83;
        }

        #customers tr:nth-child(even){
            background-color: #f2f2f2;
        }


        #customers th {
          background-color: #4F2D83;
          color: white;
        }
        .styles-table{
            width: 90%;
            overflow: scroll;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            border-radius: 20px;
            height: 400px;
            border: 1px solid #4F2D83;
          margin-bottom: 100px;

        }
        .search-data{
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            margin-top: 60px;
        }
        .input-search{
            width: 500px !important;
            color: #000 !important;
        }
        .input-search::placeholder{
            color: rgba(53, 22, 99, 0.25) !important;
        }
        .col-normal{
            margin: 1px 5px;
            width: 100px;
            font-size: 15px;
        }
        .col-sm{
            margin: 1px 5px;
            width: 40px;
            font-size: 15px;
        }
        .col-lg{
            margin: 1px 5px;
            width: 400px;
            font-size: 15px;
        }
        .col-md-md{
            margin: 1px 5px;
            width: 250px;
            font-size: 15px;
        }
        .col-md{
            margin: 1px 5px;
            width: 170px;
            font-size: 15px;
        }
        .circulo {
            width: 16px !important;
            height: 16px !important;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .link{
            color: #000 !important;
        }
    </style>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="fluid">
        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <div class="body-backoffice grid-x large-12 small-12"  style="margin-top: 50px;">
                <div class="grid-x large-12 small-12 py-3">
                    <div class="grid-x large-6 small-10">
                        <input type="text" class="input input-search" style="margin: auto;" space="search-data" placeholder="Busca por nombre, email, estatus, dirección etc...">
                    </div>
                    <div class="px-3 large-6 small-10">
                        <select name="status_search" aria-label="" class="input-login" style="color: #4F2D83 !important; padding-left: 20px; margin: auto;">
                            <option value="">Todos</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Agendado">Agendado</option>
                            <option value="En recolección de muestra">En recolección de muestra</option>
                            <option value="Muestra en laboratorio">Muestra en laboratorio</option>
                            <option value="Resultados revisados">Resultados revisados</option>
                        </select>
                    </div>
                </div>
                <div class="styles-table" id="inmunochek">
                    <table id="customers" style="display: block !important;">
                        <thead>
                                <th><div class='col-normal'>Id compra</div></th>
                                <th><div class='col-normal'>Nombre</div></th>
                                <th><div class='col-normal'>Sexo</div></th>
                                <th><div class='col-normal'>Calle</div></th>
                                <th><div class='col-normal'>No. ext.</div></th>
                                <th><div class='col-normal'>No. int.</div></th>
                                <th><div class='col-normal'>Delegación</div></th>
                                <th><div class='col-normal'>CP.</div></th>
                                <th><div class='col-md'>Descripción D.</div></th>
                                <th><div class='col-normal'>Email</div></th>
                                <th><div class='col-normal'>Teléfono</div></th>
                                <th><div class='col-normal'>Fecha de nacimiento</div></th>
                                <th><div class='col-normal'>Edad</div></th>
                                <th><div class='col-normal'>Total parcial</div></th>
                                <th><div class='col-normal'>Total</div></th>
                                <th><div class='col-lg'>Productos</div></th>
                                <th><div class='col-normal'>Cupon</div></th>
                                <th><div class='col-normal'>Descuento</div></th>
                                <th><div class='col-normal'>Notificacion de pago</div></th>
                                <th><div class='col-lg'>Enfermedad cronica</div></th>
                                <th><div class='col-lg'>Embarazo o lactancia</div></th>
                                <th><div class='col-lg'>Alergia</div></th>
                                <th><div class='col-lg'>Primera dosis</div></th>
                        </thead>
                        <tbody id="data-inmunochek">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    <script src="../js/main.min.js?v=00001"></script>
    <script src="../js/inicio-back.js"></script>
    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "https://www.inmunochek.com/api/getData.php", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let posts = JSON.parse(this.responseText)
            let num_posts = posts.length
            let space = document.getElementById('data-inmunochek');
            let template = '';
            for (const key in posts) {
                if (Object.hasOwnProperty.call(posts, key)) {
                    template += `<tr>
                                    <td>${posts[key].ID_compra}</td>
                                    <td>${posts[key].nombre}</td>
                                    <td>${posts[key].sexo}</td>
                                    <td>${posts[key].calle}</td>
                                    <td>${posts[key].no_ext}</td>
                                    <td>${posts[key].no_int}</td>
                                    <td>${posts[key].delegacion}</td>
                                    <td>${posts[key].cp}</td>
                                    <td>${posts[key].descripcion_direccion}</td>
                                    <td>${posts[key].email}</td>
                                    <td>${posts[key].tel}</td>
                                    <td>${posts[key].fecha_nacimiento}</td>
                                    <td>${posts[key].edad}</td>
                                    <td>${posts[key].total_parcial}</td>
                                    <td>${posts[key].total}</td>
                                    <td>${posts[key].productos}</td>
                                    <td>${posts[key].cupon}</td>
                                    <td>${posts[key].descuento}</td>
                                    <td>${posts[key].notify_pay}</td>
                                    <td>${posts[key].enfermedad_cronica}</td>
                                    <td>${posts[key].embarazo_lactancia}</td>
                                    <td>${posts[key].alergia}</td>
                                    <td>${posts[key].primera_dosis}</td>
                                </tr>`;
                }
            }
            space.innerHTML = template;
            // Response
        }
        };
        xhttp.send();
    </script>
</body>
</html>