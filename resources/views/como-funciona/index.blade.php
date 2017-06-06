@extends('layout.master')

@section('head')
	<script type="text/javascript"  src="{{asset('js/nav-pages.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/comoFunciona.css')}}">	
@stop

	<div class="container-fluid roupa-perfeita comoFunciona" id="como-funciona" name="como-funciona">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
						<li><a href="{{url('/#home')}}">Home</a></li>
						<li class="active">Como Funciona</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
					<h2>Escolhendo a roupa perfeita</h2>
					<!--<p>Se você quer um look clássico ou elegante, tente uma calça cáqui com uma blusa de seda.<br>Se você está procurando por um visual casual, experimente uma calça jeans num modelo antigo e mais largo e uma blusa com rendas.</p>-->
				</div>
				<div class="col-sm-offset-2 col-sm-8">
					<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<span>1</span>
									<p>ESCOLHA O LOCAL<br><i class="fa fa-tree" aria-hidden="true"></i></p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<span>2</span>
									<p>ESCOLHA O EVENTO<br><i class="fa fa-university" aria-hidden="true"></i></p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<span>3</span>
									<p>ESCOLHA O CLIMA<br><i class="fa fa-sun-o" aria-hidden="true"></i></p>
								</div>
							</div>
						</div>
		                <div class="col-sm-12">
		                    <img src="{{asset('images/ilustracao-look-homen.jpg')}}" alt="Roupa Homem" title="Roupa Homem">
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
