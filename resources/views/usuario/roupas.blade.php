@extends('layout.master-user')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <h1>ROUPAS - {{ Auth::user()->name }}</h1>
			</div>
		</div>
	</div>
@stop
