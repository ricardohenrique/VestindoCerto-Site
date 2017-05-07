<?php include('../include/head-usuario.php'); ?>
	<?php include ('../config/conexao.php'); ?>
    <script>
        $(function(){
            var hash = window.location.hash;
            if(hash == '#incluido-com-sucesso'){
                $("#incluido").show();
            }else if(hash == '#alterado-com-sucesso') {
                $("#alterado").show();
            }
        });
    </script>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <h1>Usuários</h1>
				<div class="alert alert-success" role="alert" id="alterado" style="display:none;">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<p>Alterado com sucesso.</p>
				</div>
				<div class="alert alert-success" role="alert" id="incluido" style="display:none;">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<p>Incluido com sucesso.</p>
				</div>
				<table class="table table-bordered"> 
					<thead> 
						<tr> 
							<th>#</th> 
							<th>Nome</th> 
							<th>E-mail</th> 
							<th>Senha</th> 
							<th>Ação</th> 
						</tr> 
					</thead> 
					<tbody> 
						<?php
							$consulta = $pdo->query("SELECT * FROM usuarios order by id;");
							foreach($consulta as $key => $value){
								echo '<tr>'; 
									echo '<td>' . $value['id'] . '</td>'; 
									echo '<td>' . $value['nome'] . '</td>'; 
									echo '<td>' . $value['email'] . '</td>'; 
									echo '<td>' . $value['senha'] . '</td>'; 
									echo '<td>';
										echo '<a class="btn btn-info" href="editar.php?id='.$value['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>';
										echo '<form action="delete.php" method="POST" class="pull-left" id="destroy_'.$value['id'].'">';
											echo '<input type="hidden" class="form-control" id="id" name="id" value="'.$value['id'].'">';
											echo '<button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>';
										echo '</form>';
									echo '</td>'; 
								echo '</tr>'; 
								echo '<script>';
									echo '$("#destroy_'.$value['id'].'").submit(function() {';
									    echo 'var c = confirm("Deseja Realmente excluir esse artigo ?");';
									    echo 'return c;';
									echo '});';
								echo '</script>';
							}
						?>
					</tbody> 
				</table>
			</div>
		</div>
	</div>
<?php include('../include/footer.php') ?>


