<?php 
	include('../config/conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$stmt = $pdo->prepare('INSERT INTO usuarios VALUES(:id, :nome, :email, :senha)');
	$stmt->execute(array(
		':id' => NULL,
		':nome' => $nome,
		':email' => $email,
		':senha' => $senha
	));

	header('Location: index.php#incluido-com-sucesso');
?>