<?php

class NotasModel
{
	private $PDO;

	public function __construct()
	{
		require_once '../../config/db.php';
		$this->PDO = $pdo;
	}

	public function getAllNotes()
	{

		$query = 'select * from Notas';

		$statement = $this->PDO->prepare($query);

		$statement->execute();

		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results;
	}

	public function getNotaByID($idNota)
	{
		$query = "select * from Notas where id_nota = $idNota";

		$statement = $this->PDO->prepare($query);

		$statement->execute();

		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results;
	}

	public function addNota($tituloNota, $contenidoNota)
	{
		$query = "INSERT INTO Notas ( titulo_nota, contenido_nota) VALUES ('$tituloNota','$contenidoNota')";

		$statement = $this->PDO->prepare($query);

		$statement->execute();

		printf("hea");
	}

	public function editNota($idNota, $tituloNota, $contenidoNota)
	{
		$query = "UPDATE Notas
		SET id_nota = $idNota,
			titulo_nota = '$tituloNota',
			contenido_nota = '$contenidoNota'
	  	WHERE id_nota = $idNota";

		$statement = $this->PDO->prepare($query);

		$statement->execute();
	}

	public function deleteNota($idNota)
	{

		$query = "delete from Notas where id_nota = $idNota";

		$statement = $this->PDO->prepare($query);

		$statement->execute();
	}
}
