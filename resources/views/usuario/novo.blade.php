<?php include('../include/head-usuario.php'); ?>
	<?php include ('../config/conexao.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Cadastrar Usuário</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form method="POST" action="create.php">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome: " required="required">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail: " required="required">
					</div>
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="nome" name="senha" placeholder="Senha: " required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i> Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include('../include/footer.php') ?>


