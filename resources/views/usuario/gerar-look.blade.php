@extends('layout.master-user')
@section('head')
	<script type="text/javascript" src="{{asset('plugin/jquery-1.12.3.min/jquery-ui.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/usuario/gerar-look.css')}}">
@stop
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <h1>Gerar Look - {{ Auth::user()->name }}</h1>
			</div>
		</div>
	</div>
	
	<div class="similator-space"></div>
	<div class="container simulador-panel">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<form id="form-gerar" action="{{url('usuario/gerar-look')}}" method="POST">
					{{ csrf_field() }}
					<div class="panel" id="panel-01">
						<h2>Escolha o local</h2>
						<div class="btn-group" data-toggle="buttons">
							@foreach($places as $key => $value)
							<label class="btn btn-default">
								<input type="radio" name="place" autocomplete="off" value="{{$value['id']}}">
								<span class="glyphicon glyphicon-equalizer"></span>
								<span style = "padding-left:5px">{{$value['name']}}</span>
							</label>
							@endforeach
						</div>
						<div class="btn-group btn-controls" data-toggle="buttons">
							<div class="btn btn-default" id="btn-panel-01">Próximo</div>
						</div>
					</div>
					<div class="panel" id="panel-02" style="display: none;">
						<h2>Escolha o evento</h2>
						<div class="btn-group" data-toggle="buttons">
							@foreach($events as $key => $value)
							<label class="btn btn-default">
								<input type="radio" name="event" autocomplete="off" value="{{$value['id']}}">
								<span class="glyphicon glyphicon-ok"></span>
								<span style = "padding-left:5px">{{$value['name']}}</span>
							</label>
							@endforeach
						</div>
						<div class="btn-group btn-controls">
							<div class="btn btn-default voltar" id="btn-voltar-panel-02">Voltar</div>
							<button class="btn btn-default" id="btn-panel-03">Gerar Look<i style="display: none;position:absolute!important;font-size:35px!important;" id="loading-gerar-ico" class="fa fa-cog fa-spin fa-fw" ></i><span class="sr-only">Loading...</span></button>
						</div>
					</div>
				</form>
				<div class="panel" id="panel-04" style="display: none;">
					<h2>Look gerado</h2>
					<img src="{{asset('images/ilustracao-look-homen.jpg')}}" alt="Roupa Homem" title="Roupa Homem">
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
@stop

@section('script')
    <script>
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
			$("#form-gerar").submit();
            // $("#panel-03").hide("drop", 500);
            // $("#panel-02").delay(700).show("drop", 1000);
        });
    </script>
@stop
