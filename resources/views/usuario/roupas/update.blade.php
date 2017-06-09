@extends('layout.master-user')
@section('content')
<div class="container">
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
			<h1>Alterar cadastro de roupa {{ Auth::user()->name }}</h1>
			<form action="{{url('usuario/roupas/update')}}" method="POST" class="row">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">
				<input type="hidden" name="id_roupa" value="{{ $roupa['id'] }}">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="input-image">Imagem: </label>
						<input class="form-control" id="input-image" type="file" name="image">
						<?php $image = $roupa['image']; ?>
						<img id="image-preview" src='{{asset("usuario/roupas/get/$image")}}' style="width: 100%;margin-top:20px;" />
					</div>
					<div class="form-group col-sm-6">
						<label for="type">Tipo de Roupa: </label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
							<select class="form-control" name="type" id="type">
								<option value="">Selecione o tipo</option>
								@foreach($type as $key => $value)
									<option value="{{$value['id']}}">{{$value['name']}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label for="place">Local: </label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
							<select class="form-control" name="place" id="place">
								<option value="">Selecione o local</option>
								@foreach($places as $key => $value)
									<option value="{{$value['id']}}">{{$value['name']}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label for="event">Eventos: </label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
							<select class="form-control" name="event" id="event">
								<option value="">Selecione o local</option>
								@foreach($events as $key => $value)
									<option value="{{$value['id']}}">{{$value['name']}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
