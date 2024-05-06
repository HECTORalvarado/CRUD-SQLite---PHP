<?php 

require_once '../model/notasModel.php';

class NotasController {
	private $notasModel;

	public function __construct() {
		$this->notasModel = new NotasModel();
	}

	public function getNotas() {
		return $this->notasModel->getAllNotes();
	}

	public function getNotasById($id) {
		return $this->notasModel->getNotaByID($id);
	}

	public function addNota ($title, $content) {
		$this->notasModel->addNota($title, $content);
		header("Location: /app/views/notas.php");
		die();
	}

	public function editNota ($id) {

	}

	public function deleteNota ($id) {
		$this->notasModel->deleteNota($id);
		header("Location: /app/views/notas.php");
		die();
	}

}

?>