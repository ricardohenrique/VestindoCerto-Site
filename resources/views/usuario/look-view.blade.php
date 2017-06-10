@extends('layout.master-user')
@section('head')
	<link rel="stylesheet" type="text/css" href="{{asset('css/usuario/look-view.css')}}">
@stop
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <h1>Seu look - {{ Auth::user()->name }}</h1>
			</div>
		</div>
	</div>
	
	<div class="container simulador-panel">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="panel" id="panel-look">
					@foreach($look as $key => $value)
						<?php $roupa = $value->image; ?>
						@if($key == 0)
							<div class="up">
								<img src='{{url("usuario/roupas/get/$roupa")}}' >
							</div>
						@else
							<div class="down">
								<img src='{{url("usuario/roupas/get/$roupa")}}' >
							</div>
						@endif
					@endforeach
					<form id="form-gerar" action="{{url('usuario/gerar-look')}}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="place" value="{{$old_infos['fk_place']}}" >
						<input type="hidden" name="event" value="{{$old_infos['fk_event']}}" >
						<div class="btn-group btn-controls">
							<button href="{{url('usuario/gerar-look')}}" class="btn btn-default voltar" id="btn-panel-04">Gerar de novo</button>
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
