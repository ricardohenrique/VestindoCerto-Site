<?php include('include/head.php') ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <div class="container-fluid contato" id="login">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Login</li>
              </ol>
            </div>
          </div>
    		<div class="row">
    			<div class="col-sm-offset-4 col-sm-4">
    				<h3>Login</h3>
                    <form action="" method="POST" class="row">
                        <div class="form-group col-sm-12">
                            <div class="input-group">
                                <div class="input-group-addon form"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
                                <input type="password" name="senha" class="form-control" placeholder="Senha: ">
                            </div>
                        </div>
                            <div class="checkbox">
                                <label class="col-sm-offset-1">
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-default"><i class="fa fa-sign-in" aria-hidden="true"></i> Entrar </button>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-default"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastre-se </button>
                        </div>
                    </form>
    			</div>
    		</div>
        </div>
    </div>
<?php include('include/footer.php') ?>
