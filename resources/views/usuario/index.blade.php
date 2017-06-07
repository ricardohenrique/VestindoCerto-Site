@extends('layout.master-user')
@section('head')
	<script src="{{asset('plugin/color-thief/color-thief.js')}}"></script>
@stop
@section('content')
	<div class="container" id="index">
		<div class="row">
			<div class="col-sm-12">
			    <h1>Bem Vindo - {{ Auth::user()->name }}</h1>
			</div>
			<div class="row list-look">
				@for ($i = 0; $i < 3; $i++)
				<div class="col-sm-4">
					<div class="panel panel-default">
  						<div class="panel-body">
							<div class="main-color main-color-{{$i}}"></div>
							<img id="image-{{$i}}" class="img-responsive" src="{{asset('images/ilustracao-look-homen.jpg')}}" alt="">
							<div class="palette-color palette-color-{{$i}}">
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
							<p><strong>Evento:</strong> Balada</p>
							<p><strong>Data:</strong> 01/01/2016</p>
							<div class="rating">
								<span><strong>Rating:</strong> </span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					function colorChange{{$i}}(){
						var $myImage = $("#image-{{$i}}");

						$myImage.attr('src',  $myImage.attr('src') + '?v=' + Date.now())
						.on("load", function(){
							var colorThief = new ColorThief();

							//Grabs 8 swatch color palette from image and sets quality to 5 (0 =slow, 10=default/fast)
							var imagePalette = colorThief.getPalette($myImage[0]);
							var imageMainColor = colorThief.getColor($myImage[0]);
							console.log(imageMainColor, imagePalette);
							//Sets background to 3rd color in the palette.

							$('.main-color-{{$i}}').css('background-color', 'rgb('+imageMainColor[0]+','+imageMainColor[1]+','+imageMainColor[2]+')');
							$('.palette-color-{{$i}} .01').css('background-color', 'rgb('+imagePalette[0][0]+','+imagePalette[0][1]+','+imagePalette[0][2]+')');
							$('.palette-color-{{$i}} .02').css('background-color', 'rgb('+imagePalette[1][0]+','+imagePalette[1][1]+','+imagePalette[1][2]+')');
							$('.palette-color-{{$i}} .03').css('background-color', 'rgb('+imagePalette[2][0]+','+imagePalette[2][1]+','+imagePalette[2][2]+')');
							$('.palette-color-{{$i}} .04').css('background-color', 'rgb('+imagePalette[3][0]+','+imagePalette[3][1]+','+imagePalette[3][2]+')');
							$('.palette-color-{{$i}} .05').css('background-color', 'rgb('+imagePalette[4][0]+','+imagePalette[4][1]+','+imagePalette[4][2]+')');
							$('.palette-color-{{$i}} .06').css('background-color', 'rgb('+imagePalette[5][0]+','+imagePalette[5][1]+','+imagePalette[5][2]+')');
							$('.palette-color-{{$i}} .07').css('background-color', 'rgb('+imagePalette[6][0]+','+imagePalette[6][1]+','+imagePalette[6][2]+')');
							$('.palette-color-{{$i}} .08').css('background-color', 'rgb('+imagePalette[7][0]+','+imagePalette[7][1]+','+imagePalette[7][2]+')');
							$('.palette-color-{{$i}} .09').css('background-color', 'rgb('+imagePalette[8][0]+','+imagePalette[8][1]+','+imagePalette[8][2]+')');
						})
					}

					$(document).ready(function() {
						colorChange{{$i}}();
					});
				</script>
				@endfor
			</div>
		</div>
	</div>
	<!-- <div id="mydiv" style="width: 100px;
    height: 100px;"></div> -->
	<script type="text/javascript">
		// function colorChange(){
		// 	var $myImage = $("#image-0");
		//
		// 	$myImage.attr('src',  $myImage.attr('src') + '?v=' + Date.now())
		// 	.on("load", function(){
		// 		console.log("pesadao")
		// 		var colorThief = new ColorThief();
		//
		// 		//Grabs 8 swatch color palette from image and sets quality to 5 (0 =slow, 10=default/fast)
		// 		var imagePalette = colorThief.getPalette($myImage[0]);
		// 		var imageMainColor = colorThief.getColor($myImage[0]);
		// 		console.log(imageMainColor, imagePalette);
		// 		//Sets background to 3rd color in the palette.
		//
		// 		$('#mydiv').css('background-color', 'rgb('+imageMainColor[0]+','+imageMainColor[1]+','+imageMainColor[2]+')');
		// 	})
		// }
		//
		// $(document).ready(function() {
		// 	colorChange();
		// });
	</script>
@stop
@section('script')

@stop
