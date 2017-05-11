<?php include('include/head.php') ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <div class="container-fluid contato" id="login">
        <div class="container">
    		<div class="row">
    			<div class="col-sm-offset-2 col-sm-8">
    				<h3>Login</h3>
                    <form action="" method="POST" class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" name="email" class="form-control" placeholder="E-mail: ">
                        </div>
                    </form>
                    <form action="" method="POST" class="row">
                        <div class="form-group col-sm-6">
                            <input type="password" name="senha" class="form-control" placeholder="Senha: ">
                        </div>
                        <div class="form-group col-sm-12">
                            <button class="btn btn-default"> Entrar </button>
                        </div>
                    </form>
    			</div>
    		</div>
        </div>
    </div>
<?php include('include/footer.php') ?>