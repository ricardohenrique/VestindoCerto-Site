<?php include('include/head.php') ?>
<script type="text/javascript"  src="js/nav-pages.js"></script>
    <link rel="stylesheet" type="text/css" href="css/contato.css">
    <div class="container-fluid contato" id="contato">
        <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <ol class="breadcrumb">
                  <li><a href="./">Home</a></li>
                  <li class="active">Contato</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <h3>Contato</h3>
                    <p><strong>E-mail: </strong>contato@vestindocerto.com.br</p>
                    <p><strong>Telefone: </strong>(11) 9.9396-1643</p>
                    <form action="" method="POST" class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" name="nome" class="form-control" placeholder="Nome: ">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" name="email" class="form-control" placeholder="E-mail: ">
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea name="mensagem" class="animated form-control" placeholder="Mensagem: " rows="5"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <button class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Enviar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('include/footer.php') ?>
