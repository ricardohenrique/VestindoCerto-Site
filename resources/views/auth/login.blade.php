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
                    <li class="active">Login</li>                    
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <h3>Login</h3>
                <form class="row" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
                        <div class="input-group">
                            <div class="input-group-addon form"><i id="email" class="fa fa-user icon-input" aria-hidden="true"></i></div>
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
                            <div class="input-group-addon"><i id="senha" class="fa fa-key icon-input" aria-hidden="true"></i></div>
                            <input id="password" type="password" class="form-control" placeholder="Senha: " name="password" required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="checkbox">
                        <label class="col-sm-offset-1">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Continuar conectado
                        </label>
                    </div>
                    <div class="form-group col-sm-6">
                        <button class="btn btn-default"><i class="fa fa-sign-in" aria-hidden="true"></i> Entrar </button>
                    </div>
                    <div class="form-group col-sm-6">
                        <a href="{{url('register')}}" class="btn btn-default"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastre-se</a>
                    </div>
                    <div class="form-group col-sm-12">
                        <a class="btn-link" href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop