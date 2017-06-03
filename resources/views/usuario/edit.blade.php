<?php 
	include('../config/conexao.php');
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$stmt = $pdo->prepare('UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id');
	$stmt->execute(array(
		':id' => $id,
		':nome' => $nome,
		':email' => $email,
		':senha' => $senha
	));

	header('Location: index.php#alterado-com-sucesso');
?>