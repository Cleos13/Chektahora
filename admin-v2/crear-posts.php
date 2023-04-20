<?php
include '../lib/global.php';
session_start();
if (empty($_SESSION['s']) || !isset($_SESSION['s'])) {
	header('Location: api/logout');
} else {
	include 'lib/db.php';
	$db = new DB();
	$id = $_SESSION['s']['i'];
	$get = $db->connect()->prepare("SELECT * FROM users_backoffice WHERE id=:i");
	$get->bindParam(':i', $id);
	$get->execute();
	$data = $get->fetch(PDO::FETCH_OBJ);
	if ($data->type !== 'Admin' && $data->type !== 'General') {
		header('Location: index');
	}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	 <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-473769696"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-473769696');
</script>
<!-- Event snippet for Website sale conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-473769696/nCrHCJTlrs4DEODN9OEB',
      'transaction_id': ''
  });
</script>
<!-- Event snippet for Website sale conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-473769696/nCrHCJTlrs4DEODN9OEB',
      'transaction_id': ''
  });
</script>
	<meta charset="utf-8" />
	<meta name="viewport" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta." />
	<title>Crear publicación | ChektAhora</title>
	<link rel="stylesheet" href="../css/app.css?v=00003">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
	<style>
		.invalid {
			border: #f7606091 2px !important;
			border-style: solid !important;
		}
	</style>
</head>

<body style="background: rgba(79,45,131,0.1) !important;">
	<a class="flex-center" href="index" style="color: #000 !important; margin: 2%;">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
			<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
		</svg>
		<div style="font-size: 17px;margin-left: 15px;">
			Salir
		</div>
	</a>
	<div class="card-create">
		<div class="text-center">
			<div class="fs-7 fw-bold">Crear publicación</div>
		</div>
		<form class="mt-2" action="blog/ap.php" style="width: 100%;" id="data_publication" method="POST" enctype="multipart/form-data">
			<div class="grid-x large-12 small-12">
				<div class="large-12 small-12 px-1">
					<label class="fs-2 fw-bold required">Titulo de la publicación</label>
					<input maxlength="125" name="title" type="text" placeholder="Ej. Madigen la agencia revolucionaria y creativa con un estilo único e innovador." required>
				</div>
				<div class="grid-x large-12 small-12">
					<div class="large-5 small-12 mt-2 px-1">
						<label class="fs-2 fw-bold required">Ingresa un nombre de autor</label>
						<input maxlength="67" name="autor" type="text" placeholder="Ej. Madigen" required>
					</div>
					<div class="large-7 small-12 mt-2 px-3">
						<label class="fw-bold required"><span class="fs-2">Agrega una imagen de portada max. 1MB</span> <span class="fs-1" data-tooltip tabindex="1" title="solo .jpg con una altura minima de 608px por un ancho minimo de 1064 px">Medidas</span></label>
						<input name="img-data" type="file" id="file" accept=".jpg" required style="margin-bottom: -10px;" multiple>
						<div class="display-none" id="file_invalid" style="color:#f7606091!important; font-size: 12px;">Ingresa la imagen de manera correcta, solo .jpg con una altura minima de 608px por un ancho minimo de 1064 px.</div>
					</div>
				</div>
				<div class="large-12 small-12 mt-2 px-1">
					<label class="fs-2 fw-bold required">Ingresa una pequeña descripción</label>
					<textarea name="description_small" maxlength="155" rows="2" placeholder="Una agencia de tecnologías *SaaS orientadas al Marketing digital, ayudamos personas a alcanzar sus objetivos entendiendo el momentum de su negocio y explotando sus áreas de oportunidad." required></textarea>
				</div>
				<div class="grid-x large-12 small-12">
					<div class="large-6 small-12 mt-2 px-1">
						<label class="fs-2 fw-bold required">Categoria relacionada 1</label>
						<select name="category_one" aria-label="Categoria relacionada 1" required>
							<option value="Covid">Covid</option>
							<option value="Its">Its</option>
						</select>
					</div>
					<div class="large-6 small-12 mt-2 px-1">
						<label class="fs-2 fw-bold required">Categoria relacionada 2</label>
						<select name="category_two" aria-label="Categoria relacionada 2" required>
							<option value="Covid">Covid</option>
							<option value="Its">Its</option>
						</select>
					</div>
				</div>
				<div class="grid-x large-12 small-12 mt-3">
					<div class="large-12 small-12 mt-2 px-1">
						<label class="fs-2 fw-bold">Video Youtube (opcional)<span class="fs-1" data-tooltip tabindex="1" title="Si el link no cumple con este formato https://www.youtube.
									com/embed
									/o6NCTfXodgY toma el id al final y colocalo asi.">Info</span></label>
						<input type="text" name="video" maxlength="60" placeholder="Ej. https://www.youtube.com/embed/o6NCTfXodgY">
						<div class="display-none" id="url_invalid" style="color:#f7606091!important; font-size: 12px;">Ingresa el formato correcto (https://www.youtube.com/watch?v=o6NCTfXodgY), sino tiene este formato toma el id que esta despues del ?v= del ejemplo anterior y cambialo a este https://www.youtube.com/embed/o6NCTfXodgY.</div>
					</div>
				</div>
				<div class="grid-x large-12 mt-3">
					<div class="large-6 small-12 mt-2 px-3">
						<label class="fw-bold"><span class="fs-2">Imagen extra 1 max. 1MB (opcioanl)</span> <span class="fs-1" data-tooltip tabindex="1" title="solo .jpg con una altura igual al ancho">Info</span></label>
						<input name="img-data-one" type="file" id="file-1" accept=".jpg" style="margin-bottom: -10px;">
						<div class="display-none" id="file_1_invalid" style="color:#f7606091!important; font-size: 12px;">Ingresa la imagen de manera correcta, solo .jpg con una altura igual al ancho.</div>
					</div>
					<div class="large-6 small-12 mt-2 px-3">
						<label class="fw-bold"><span class="fs-2">Imagen extra 2 max. 1MB (opcional)</span> <span class="fs-1" data-tooltip tabindex="1" title="solo .jpg con una altura igual al ancho">Info</span></label>
						<input name="img-data-two" type="file" id="file-2" accept=".jpg" style="margin-bottom: -10px;">
						<div class="display-none" id="file_2_invalid" style="color:#f7606091!important; font-size: 12px;">Ingresa la imagen de manera correcta, solo .jpg con una altura igual al ancho.</div>
					</div>
				</div>
				<div class="large-12 small-12 mt-2 px-1">
					<label class="fs-2 fw-bold required">Ingresa el post</label><span class="display-none" id="post_invalid" style="color:#f7606091!important; font-size: 12px;">El post es obligatorio.</span>
					<textarea id="post_body" placeholder="Una agencia de tecnologías *SaaS orientadas al Marketing digital, ayudamos personas a alcanzar sus objetivos entendiendo el momentum de su negocio y explotando sus áreas de oportunidad. Esto nos permite trabajar con pequeñas empresas, grandes corporativos o grupos con múltiples marcas y modelos de negocios. *SaaS - Software as a Service"></textarea>
					<input name="description" type="hidden" required>
				</div>
			</div>
		</form>
		<div class="footer-create">
			<button type="button" class="btn-pay" id="add_publication">Crear publicación</button>
		</div>
		<div id="invalid" class="display-none" style="display: flex; justify-content: center; margin-top:10px; color:#ee4747b4!important; font-size: 12px;">Hay campos obligatorios vacios, corrige y vuelve a intentar.</div>
		<div id="invalid_kb" class="display-none" style="display: flex; justify-content: center; margin-top:10px; color:#ee4747b4!important; font-size: 12px;">El tamaño de imagen es muy grande.</div>
		<div id="post_exist" class="display-none" style="display: flex; justify-content: center; margin-top:10px; color:#ee4747b4!important; font-size: 12px;">Hay un post con el mismo nombre.</div>

	</div>
	</div>
	<script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
	<script src="../js/create-posts.js"></script>
	<?php
	if (isset($_GET['s'])) {
		if ($_GET['s'] == 'null') {
			echo "
							<script>
							$('#invalid').removeClass('display-none');
							setTimeout(function(){
								$('#invalid').addClass('display-none');
							}, 7000);
							</script>";
		}
		if ($_GET['s'] == 'kb') {
			echo "
							<script>
								$('#invalid_kb').removeClass('display-none');
								setTimeout(function(){
									$('#invalid_kb').addClass('display-none');
								}, 7000);
							</script>";
		}
	}
	?>
	<script>

	</script>
</body>

</html>