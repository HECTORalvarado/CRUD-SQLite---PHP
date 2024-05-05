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

	public function addNota () {

	}

	public function editNota () {

	}

	public function deletNota () {

	}

}

?>