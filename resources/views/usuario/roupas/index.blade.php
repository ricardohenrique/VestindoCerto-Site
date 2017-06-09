@extends('layout.master-user')
@section('head')
	<script src="{{asset('plugin/color-thief/color-thief.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/usuario/roupas.css')}}">
@stop
@section('content')
	<div class="container" id="roupas">
	<div class="row">
		<div class="col-sm-12">
			@if (session('status-sucess'))
			    <div class="alert alert-success">
			        {{ session('status-sucess') }}
			    </div>
			@endif
			@if (session('status-error'))
			    <div class="alert alert-success">
			        {{ session('status-danger') }}
			    </div>
			@endif
		</div>
	</div>
		<div class="row">
			<div class="col-sm-12">
			    <h1>Meu Guarda-Roupas</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<a href="{{url('usuario/roupas/nova')}}" style="margin-bottom: 30px;" class="btn btn-info btn-lg"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nova Roupa</a>
				<!--<form class="row" method="GET" action="">
					<div class="form-group col-sm-3">
						<label for="">Local</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
							<select class="form-control" name="cidade" id="">
								<option value="">Selecione o local</option>
								<option value="1">São Paulo</option>
								<option value="2">Rio de Janeiro</option>
							</select>
						</div>
					</div>
					<div class="form-group col-sm-3">
						<label for="">Evento</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
							<select class="form-control" name="tipos_de_cozinha" id="">
								<option value="">Tipo de evento</option>
									<option value="17">Francesa</option>
									<option value="16">Espanhola</option>
									<option value="13">Contemporânea</option>
									<option value="10">Portuguesa</option>
									<option value="6">oriental</option>
									<option value="4">Brasileira</option>
									<option value="1">Italiana</option>
							</select>
						</div>
					</div>
					<div class="form-group col-sm-3">
						<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> pesquisar</button>
					</div>
				</form>-->
			</div>
		</div>	
		<div class="row list-look">
			@foreach ($clothes as $key => $value)
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="main-color main-color-{{$key}}"></div>
						<?php
							$roupa = $value["image_name"]; 
							$idRoupa = $value["id_roupa"];
						?>
						<div class="image-panel">
							<img id="image-{{$key}}" class="img-responsive" src='{{url("usuario/roupas/get/$roupa")}}' alt="">
						</div>
						<div class="palette-color palette-color-{{$key}}" id="palette-color-{{$key}}">
							<div class="pc 01"></div>
							<div class="pc 02"></div>
							<div class="pc 03"></div>
							<div class="pc 04"></div>
							<div class="pc 05"></div>
							<div class="pc 06"></div>
							<div class="pc 07"></div>
							<div class="pc 08"></div>
							<div class="pc 09"></div>
						</div>
					</div>
					<div class="panel-footer">
						<p><strong>Name:</strong> {{$value["image_name"]}}</p>
						<p><strong>Tipo:</strong> {{$value["clothe_type"]}}</p>
						<div class="rating">
							<span><strong>Rating:</strong> </span>
							@for($i = 0; $i < $value["rating"]; $i++)
								<i class="fa fa-star" aria-hidden="true"></i>
							@endfor
						</div>
						<div class="">
							<div class="btn-group">
								<a href='{{url("usuario/roupas/$idRoupa")}}'><button>Alterar</button></a>
								<a href=""><button>Deletar</button></a>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<script type="text/javascript">
				function colorChange{{$key}}(){
					var $myImage = $("#image-{{$key}}");

					$myImage.attr('src',  $myImage.attr('src') + '?v=' + Date.now())
					.on("load", function(){
						var colorThief = new ColorThief();

						//Grabs 8 swatch color palette from image and sets quality to 5 (0 =slow, 10=default/fast)
						var imagePalette = colorThief.getPalette($myImage[0]);
						var imageMainColor = colorThief.getColor($myImage[0]);
						// console.log(imageMainColor, imagePalette);
						//Sets background to 3rd color in the palette.

						$('.main-color-{{$key}}').css('background-color', 'rgb('+imageMainColor[0]+','+imageMainColor[1]+','+imageMainColor[2]+')');
						$('#palette-color-{{$key}}').css('background-color', 'rgb('+imageMainColor[0]+','+imageMainColor[1]+','+imageMainColor[2]+')');
						$('.palette-color-{{$key}} .01').css('background-color', 'rgb('+imagePalette[0][0]+','+imagePalette[0][1]+','+imagePalette[0][2]+')');
						$('.palette-color-{{$key}} .02').css('background-color', 'rgb('+imagePalette[1][0]+','+imagePalette[1][1]+','+imagePalette[1][2]+')');
						$('.palette-color-{{$key}} .03').css('background-color', 'rgb('+imagePalette[2][0]+','+imagePalette[2][1]+','+imagePalette[2][2]+')');
						$('.palette-color-{{$key}} .04').css('background-color', 'rgb('+imagePalette[3][0]+','+imagePalette[3][1]+','+imagePalette[3][2]+')');
						$('.palette-color-{{$key}} .05').css('background-color', 'rgb('+imagePalette[4][0]+','+imagePalette[4][1]+','+imagePalette[4][2]+')');
						$('.palette-color-{{$key}} .06').css('background-color', 'rgb('+imagePalette[5][0]+','+imagePalette[5][1]+','+imagePalette[5][2]+')');
						$('.palette-color-{{$key}} .07').css('background-color', 'rgb('+imagePalette[6][0]+','+imagePalette[6][1]+','+imagePalette[6][2]+')');
						$('.palette-color-{{$key}} .08').css('background-color', 'rgb('+imagePalette[7][0]+','+imagePalette[7][1]+','+imagePalette[7][2]+')');
						$('.palette-color-{{$key}} .09').css('background-color', 'rgb('+imagePalette[8][0]+','+imagePalette[8][1]+','+imagePalette[8][2]+')');
					})
				}

				$(document).ready(function() {
					colorChange{{$key}}();
				});
			</script>
			@endforeach
		</div>
	</div>
@stop
