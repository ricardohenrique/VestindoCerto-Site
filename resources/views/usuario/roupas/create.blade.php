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
			<h1>Olá {{ Auth::user()->name }}</h1>
			<form action="{{url('usuario/perfil')}}" method="POST" class="row">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ Auth::user()->id}}">
				<div class="row">
					<div class="col-sm-offset-4 form-group col-sm-4">
						<label for="name">Nome: </label>
						<input class="form-control" id="name" type="text" name="name" value="{{ Auth::user()->name}}">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-4 form-group col-sm-4">
						<label for="email">Email: </label>
						<input class="form-control" id="email" type="text" name="email" value="{{ Auth::user()->email}}">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-4 form-group col-sm-4">
						<label for="password">Senha: </label>
						<input class="form-control" id="password" type="password" name="password" value="*******">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Salvar Alterações </button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
