<?php

require_once './notasController.php';

$notasCtrl = new NotasController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$inputTitle = $_POST['tituloNota'];
	$inputContent = $_POST['content'];

	if (!empty($inputTitle) && !empty($inputContent)) {
		$notasCtrl->addNota($inputTitle, $inputContent);
	}
}

?>