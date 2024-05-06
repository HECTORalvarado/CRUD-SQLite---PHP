<?php

require_once './notasController.php';

$notasCtrl = new NotasController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$inputId = $_POST['id'];

	if (!empty($inputId)) {
		$notasCtrl->deleteNota($inputId);
	}
}


?>