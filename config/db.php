<?php 


try {
	$pdo = new PDO('sqlite:../../DB/database.db');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die("Error de conexión a la base de datos: " . $e->getMessage());
}

?>