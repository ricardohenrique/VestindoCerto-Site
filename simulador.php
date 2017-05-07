<?php include('include/head-simulador.php') ?>
	<link rel="stylesheet" type="text/css" href="css/simulador.css">

	<div class="container simulador-head">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<h1>Simulador Vestindo Certo</h1>
			</div>
		</div>
	</div>

    <div class="container simulador-panel">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel" id="panel-01">
                    <h2>Escolha o local</h2>
                    <form action="">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input type="radio" name="local" autocomplete="off" value="urbano">
                                <span class="glyphicon glyphicon-equalizer"></span>
                                <span style = "padding-left:5px">Urbano</span>
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="local" autocomplete="off" value="rural">
                                <span class="glyphicon glyphicon-tree-conifer"></span>
                                <span style = "padding-left:5px">Rural</span>
                            </label>
                        </div>
                        <div class="btn-group btn-controls" data-toggle="buttons">
                            <div class="btn btn-default" id="btn-panel-01">Próximo</div>
                        </div>
                    </form>
                </div>
                <div class="panel" id="panel-02" style="display: none;">
                    <h2>Escolha o evento</h2>
                    <form action="" >
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input type="radio" name="evento" autocomplete="off" value="faculdade">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Faculdade</span>
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="evento" autocomplete="off" value="trabalho">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Trabalho</span>
                            </label> <br>
                            <label class="btn btn-default">
                                <input type="radio" name="evento" autocomplete="off" value="festa">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Festa</span>
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="evento" autocomplete="off" value="balada">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Balada</span>
                            </label> <br>
                            <label class="btn btn-default">
                                <input type="radio" name="evento" autocomplete="off" value="casamento">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Casamento</span>
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="evento" autocomplete="off" value="academia">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Academia</span>
                            </label>
                        </div>
                        <div class="btn-group btn-controls" data-toggle="buttons">
                            <div class="btn btn-default voltar" id="btn-voltar-panel-02">Voltar</div>
                            <div class="btn btn-default" id="btn-panel-02">Próximo</div>
                        </div>
                    </form>
                </div>
                <div class="panel" id="panel-03" style="display: none;">
                    <h2>Escolha o clima</h2>
                    <form action="" >
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input type="radio" name="clima" autocomplete="off" value="sol">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Sol</span>
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="clima" autocomplete="off" value="chuva">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Chuva</span>
                            </label> <br>
                            <label class="btn btn-default">
                                <input type="radio" name="clima" autocomplete="off" value="nublado">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Nublado</span>
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="clima" autocomplete="off" value="seco">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span style = "padding-left:5px">Seco</span>
                            </label>
                        </div>
                        <div class="btn-group btn-controls" data-toggle="buttons">
                            <div class="btn btn-default voltar" id="btn-voltar-panel-03">Voltar</div>
                            <div class="btn btn-default" id="btn-panel-03">
                                Gerar Look
                                <i style="display: none;position:absolute!important;font-size:35px!important;" id="loading-gerar-ico" class="fa fa-cog fa-spin fa-fw" ></i><span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel" id="panel-04" style="display: none;">
                    <h2>Look gerado</h2>
                    <img src="image/ilustracao-look-homen.jpg" alt="">
                    <form action="" >
                        <div class="btn-group btn-controls" data-toggle="buttons">
                            <div class="btn btn-default voltar" id="btn-panel-04">Gerar de novo</div>
                            <div class="btn btn-default" id="btn-gostei-panel-03">Gostei <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function(){
            $("#btn-panel-01").click(function(){
                $("#panel-01").hide("drop", 500);
                $("#panel-02").delay(700).show("drop", 1000);
            });
            $("#btn-panel-02").click(function(){
                $("#panel-02").hide("drop", 500);
                $("#panel-03").delay(700).show("drop", 1000);
            });
            $("#btn-panel-03").click(function(){
                $("#panel-03").delay(4000).hide("drop", 500);
                $("#loading-gerar-ico").show("explode", 0);
                $("#panel-04").delay(4700).show("drop", 1000);
            });
            $("#btn-panel-04").click(function(){
                $("#panel-04").hide("drop", 500);
                $("#loading-gerar-ico").css("display", 'none');
                $("#panel-01").delay(700).show("drop", 1000);
            });

            $("#btn-voltar-panel-02").click(function(){
                $("#panel-02").hide("drop", 500);
                $("#panel-01").delay(700).show("drop", 1000);
            });
            $("#btn-voltar-panel-03").click(function(){
                $("#panel-03").hide("drop", 500);
                $("#panel-02").delay(700).show("drop", 1000);
            });
        });
    </script>
    
<!-- <?php include('include/footer.php') ?> -->


