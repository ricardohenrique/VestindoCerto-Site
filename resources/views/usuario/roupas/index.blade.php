@extends('layout.master-user')
@section('head')
	<script src="{{asset('plugin/color-thief/color-thief.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/usuario/roupas.css')}}">
@stop
@section('content')
	<div class="container" id="roupas">
		<div class="row">
			<div class="col-sm-12">
			    <h1>Meu Guarda-Roupas</h1>
			</div>
		</div>
		<div class="row list-look">
			@foreach ($clothes as $key => $value)
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="main-color main-color-{{$key}}"></div>
						<img id="image-{{$key}}" class="img-responsive" src="{{asset('images/ilustracao-look-homen.jpg')}}" alt="">
						<div class="palette-color palette-color-{{$key}}">
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
						console.log(imageMainColor, imagePalette);
						//Sets background to 3rd color in the palette.

						$('.main-color-{{$key}}').css('background-color', 'rgb('+imageMainColor[0]+','+imageMainColor[1]+','+imageMainColor[2]+')');
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
