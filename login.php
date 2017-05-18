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
                                <div class="input-group-addon form"><i id="email" class="fa fa-user icon-input" aria-hidden="true"></i></div>
                                <input type="text" class="form-control" id="textEmail" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i id="senha" class="fa fa-key icon-input" aria-hidden="true"></i></div>
                                <input type="password" name="senha" class="form-control" id="textPassword" placeholder="Senha: ">
                            </div>
                        </div>
                            <div class="checkbox">
                                <label class="col-sm-offset-1">
                                    <input type="checkbox"> Manter conectado
                                </label>
                            </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-default"><i class="fa fa-sign-in" aria-hidden="true"></i> Entrar </button>
                        </div>
                        <div class="form-group col-sm-6">
                            <a href="cadastro.php"><button class="btn btn-default"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastre-se </button></a>
                        </div>
                    </form>
    			</div>
    		</div>
        </div>
        <script type="text/javascript">
            $('#textEmail').focusin(function () {                
                $('#email').css('color', '#fff');                               
            });
            $('#textEmail').focusout(function () {                
                $('#email').css('color', '#333');                               
            });
            $('#textPassword').focusin(function () {                
                $('#senha').css('color', '#fff');                               
            });
            $('#textPassword').focusout(function () {                
                $('#senha').css('color', '#333');                               
            });
        </script>
    </div>
<?php include('include/footer.php') ?>
