<?php include('../include/head-usuario.php'); ?>
	<?php include ('../config/conexao.php'); ?>
	<?php
		$consulta = $pdo->query("SELECT * FROM usuarios where id = '".$_GET['id']."';");
		foreach($consulta as $key => $value){
			$id = $value['id']; 
			$nome = $value['nome']; 
			$email = $value['email'];
			$senha = $value['senha'];
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Editar Usuário</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form method="POST" action="edit.php">
					<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required="required">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required="required">
					</div>
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="nome" name="senha" value="<?php echo $senha; ?>" required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i> Alterar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include('../include/footer.php') ?>


