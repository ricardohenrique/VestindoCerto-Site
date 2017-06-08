<nav class="navbar navbar-default ">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand in-page" href="#">{{ Auth::user()->name }}</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{url('usuario')}}" class="in-page"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="{{url('usuario/perfil')}}" class="in-page"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
				<li><a href="{{url('usuario/gerar-look')}}"><i class="fa fa-rocket" aria-hidden="true"></i> Gerar Look</a></li>
				<li><a href="{{url('usuario/roupas')}}"><i class="fa fa-tag" aria-hidden="true"></i> Roupas</a></li>
				<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="space-nav"></div>
