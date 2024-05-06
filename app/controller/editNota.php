<?php

require_once './notasController.php';

$notasCtrl = new NotasController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$inputId = $_POST['idNota'];
	$inputTitle = $_POST['tituloNota'];
	$inputContent = $_POST['content'];

	if (!empty($inputTitle) && !empty($inputContent) && !empty($inputId)) {
		$notasCtrl->editNota($inputId, $inputTitle, $inputContent);
	}
}

?>