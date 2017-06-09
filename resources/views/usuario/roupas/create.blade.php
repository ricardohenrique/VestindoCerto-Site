@extends('layout.master-user')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Nova Roupa</h1>
			<form action="{{url('usuario/roupas/store')}}" method="POST" class="row" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ Auth::user()->id}}">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="input-image">Imagem: </label>
						<input class="form-control" id="input-image" type="file" name="image">
						<img id="image-preview" src="{{asset('images/preview.png')}}" style="width: 100%;margin-top:20px;" />
					</div>
					<div class="form-group col-sm-6">
						<label for="type">Tipo de Roupa: </label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
							<select class="form-control" name="type" id="type" required="required">
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
							<select class="form-control" name="place" id="place" required="required">
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
							<select class="form-control" name="event" id="event" required="required">
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

@section('script')
	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#image-preview').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#input-image").change(function(){
			readURL(this);
		});
	</script>
@stop
