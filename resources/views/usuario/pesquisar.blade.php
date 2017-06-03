<?php include('../include/head-usuario.php'); ?>
	<?php include ('../config/conexao.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <h1>Pesquisar</h1>
				<form method="POST" action="pesquisar.php">
					<div class="form-group">
						<label for="search">Pesquisar</label>
						<input type="number" class="form-control" id="search" name="search" placeholder="Pesquisar: " required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
					</div>
				</form>
				<?php 
					if(isset($_POST['search'])){
						$consulta = $pdo->query("SELECT * FROM usuarios where id = '".$_POST['search']."';");
						foreach($consulta as $key => $value){
							$id = $value['id']; 
							$nome = $value['nome']; 
							$email = $value['email'];
							$senha = $value['senha'];
						}
						if (isset($id)) {
							echo "<p><strong>Id: </strong>".$id."</p>";
							echo "<p><strong>Nome: </strong>".$nome."</p>";
							echo "<p><strong>Email: </strong>".$email."</p>";
							echo "<p><strong>Senha: </strong>".$senha."</p><br><br><br><br>";
						}else{
							echo "<p><strong>USUÁRIO NÃO CADASTRADO NO SISTEMA</strong></p><br><br><br><br>";
						}
					}
				?>
			</div>
		</div>
	</div>
<?php include('../include/footer.php') ?>


