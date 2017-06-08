@extends('layout.master-user')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Olá {{ Auth::user()->name }}</h1>
			<form action="{{url('usuario/perfil')}}" method="POST">
			{{ csrf_field() }}
				<input type="text" name="nome" value="{{ Auth::user()->name}}"><br><br>
				<input type="text" name="email" value="{{ Auth::user()->email}}" disabled="disabled"><br><br>
				<input type="password" name="senha" value="password" disabled="disabled">
				<br><br>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Salvar Alterações </button>
			</form>
		</div>
	</div>
</div>
@stop
