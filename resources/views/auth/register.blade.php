@extends('layout.master')
@section('head')
    <script type="text/javascript"  src="{{asset('js/nav-pages.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
@stop
@section('content')
<div class="container-fluid contato" id="login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{asset('/')}}">Home</a></li>
                    <li><a href="{{asset('login')}}">Login</a></li>
                    <li class="active">Cadastre-se</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h3>Cadastre-se</h3>                                            
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon form"><i id="email" class="fa fa-user icon-input" aria-hidden="true"></i></div>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>                                    
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon form"><i id="email" class="fa fa-envelope icon-input" aria-hidden="true"></i></div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon form"><i id="email" class="fa fa-key icon-input" aria-hidden="true"></i></div>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon form"><i id="email" class="fa fa-check icon-input" aria-hidden="true"></i></div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha"required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-sm-6">
                                        <a href="{{asset('/login')}}" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </a>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Cadastar </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
