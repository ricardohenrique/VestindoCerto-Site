<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand in-page" href="{{url('/')}}" tabindex="1">Vestindo Certo</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown hidden-xs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-university" aria-hidden="true"></i> Institucional <i class="fa fa-caret-down" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{url('quem-somos')}}">Quem somos</a></li>
						<li><a href="{{url('contato')}}">Contato</a></li>
					</ul>
				</li>
				<li class="dropdown hidden-xs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-rocket" aria-hidden="true"></i> Business <i class="fa fa-caret-down" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{url('como-funciona')}}">Como Funciona</a></li>
						<li><a href="{{url('simulador')}}">Simulador</a></li>
						<li><a href="{{url('apresentacao')}}">Apresentação</a></li>
					</ul>
				</li>
				<li class="visible-xs"><a href="{{url('quem-somos')}}">Sobre Nós</a></li>
				<li class="visible-xs"><a href="{{url('como-funciona')}}">Como Funciona</a></li>
				<li class="visible-xs"><a href="{{url('simulador')}}">Simulador</a></li>
				<li class="visible-xs"><a href="{{url('apresentacao')}}">Apresentação</a></li>
				<li class="visible-xs"><a href="{{url('contato')}}">Contato</a></li>
				<li><a href="{{url('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		<form class="navbar-form navbar-left hidden-xs">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Pesquisa:"  tabindex="2">
	        </div>
      	</form>
		</div>
	</div>
</nav>
<div class="space-nav"></div>

<script type="text/javascript">
		// $(".nav .dropdown").addClass("open");
		// $('.dropdown-toggle').dropdown(function(){
		// 	alert("ola");
		// })
</script>
