<?php

require_once '../controller/notasController.php';

$notasCtrl = new NotasController();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notas</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
	<header class="blue darken-3">
		<h2 class="white-text">Notas APP</h1>
	</header>

	<main class="container">
		<div>

			<i class="material-icons right">add</i>
		</div>
		<table>
			<thead>
				<tr>
					<th>Id Nota</th>
					<th>Titulo</th>
					<th>Nota</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$notas = $notasCtrl->getNotas();
				foreach ($notas as $nota) {
					echo '
					<tr>
						<td>', $nota['id_nota'], '</td>
						<td>', $nota['titulo_nota'], '</td>
						<td>', $nota['contenido_nota'], '</td>
						<td>
						<form action="../controller/editNota.php">
						<input type="hidden" name="id" value="', $nota['id_nota'], '">
						<button type="submit">Editar</button>
					</form>
					<form action="../controller/deleteNota.php">
						<input type="hidden" name="id" value="', $nota['id_nota'], '">
						<button type="submit">eliminar</button>
					</form>
						</td>
					</tr>';
				}
				?>
			</tbody>
		</table>
	</main>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>