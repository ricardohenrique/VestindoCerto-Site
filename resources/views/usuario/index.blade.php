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
				@for ($i = 0; $i < 10; $i++)
				<div class="col-sm-4">
					<div class="panel panel-default">
  						<div class="panel-body">
							<img id="image-{{$i}}" class="img-responsive" src="{{asset('images/ilustracao-look-homen.jpg')}}" alt="">
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
				@endfor
			</div>
		</div>
	</div>
	<div id="mydiv" style="width: 100px;
    height: 100px;"></div>
	<script>
		// $(window).on("load", function() {
		// 	function getColor(){
		// 		alert("Boom!");
		// 		var img = $("#image-0");
		// 		// console.log(img);
		// 		var colorThief = new ColorThief();
		// 		var color = colorThief.getColor(img);
		// 		console.log(color);
		// 	}
		// 	setTimeout(getColor, 2000);
		// });
function colorChange(){
  //Be sure to include <img id="coverImage" src="" alt=""/>
  var $myImage = $("#image-0");
  var colorThief = new ColorThief();
  
  //Grabs 8 swatch color palette from image and sets quality to 5 (0 =slow, 10=default/fast)
  var cp = colorThief.getPalette($myImage[0], 8, 5);
  
  //Sets background to 3rd color in the palette.
  $('body').css('background-color', 'rgb('+cp[2][0]+','+cp[2][1]+','+cp[2][2]+')');
}

$(document).ready(function() {
  //Make sure image is loaded before running.
  colorChange();
});
	</script>
@stop
@section('script')

@stop


