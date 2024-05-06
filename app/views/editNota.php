<?php

require_once '../controller/notasController.php';

$notasCtrl = new NotasController();
$notas;
$idNota;
$tituloNota;
$contentNota;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$inputId = $_POST['id'];

	if (!empty($inputId)) {
		$notas = $notasCtrl->getNotasById($inputId);
	} else {
		header("Location: notas.php");
	}
}

foreach($notas as $nota){
	$idNota = $nota['id_nota'];
	$tituloNota = $nota['titulo_nota'];
	$contentNota = $nota['contenido_nota'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>addNota</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="container">
	<h2 class="">
		Agregar Notas
	</h2>
	<form action="../controller/editNota.php" method="post" class="row">
		<input type="hidden" name="idNota" value=<?php echo $idNota; ?>>
		<div class="input-field col s8">
			<i class="material-icons prefix">mode_edit</i>
			<input type="text" id="tituloNota" name="tituloNota" class="materialize-textarea" value=<?php echo $tituloNota; ?> required></input>
			<label for="tituloNota">Titulo de la nota</label>
		</div>
		<div class="input-field col s8">
			<i class="material-icons prefix">sticky_note_2</i>
			<textarea id="content" name="content" class="materialize-textarea" required><?php echo $contentNota; ?></textarea>
			<label for="content">Conetnido de la nota</label>
		</div>
		<div class="input-field col s12">
			<button type="submit" class="waves-effect blue darken-1 btn">Actualizar Nota</button>
		</div>
	</form>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>