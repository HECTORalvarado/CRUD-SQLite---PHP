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
}
