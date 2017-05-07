<?php 
	include('../config/conexao.php');
	$id = $_POST['id'];

	$stmt = $pdo->prepare('DELETE from usuarios WHERE id = :id');
	$stmt->execute(array(
		':id' => $id
	));

	header('Location: index.php');
?>