<?php

require_once '../controller/notasController.php';

$notasCtrl = new NotasController();

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notas</title>
	<!-- CSS personalizado -->
	<link rel="stylesheet" href="./css/style.css">
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
		
		<div class="right addLink">
			<a href="./addNota.php" class="btn-floating btn-large blue">
				<i class="large material-icons">add</i>
			</a>
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
						<td class="row">
						<form action="editNota.php" method="post" class="col">
						<input type="hidden" name="id" value="', $nota['id_nota'], '">
						<button type="submit" class="waves-effect blue darken-1 btn" >Editar</button>
					</form>
					<form action="../controller/delete.php" method="post" class="col">
						<input type="hidden" name="id" value="', $nota['id_nota'], '">
						<button type="submit" class="waves-effect red darken-4 btn" >eliminar</button>
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