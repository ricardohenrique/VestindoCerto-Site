@extends('layout.master')
@section('head')
<script type="text/javascript"  src="{{asset('js/nav-pages.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/password-reset.css')}}">
@stop
@section('content')
<div class="container-fluid contato" id="reset-password">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{asset('/')}}">Home</a></li>
                    <li><a href="{{asset('login')}}">Login</a></li>
                    <li class="active">Esqueceu sua senha</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h3>Esqueceu sua senha?</h3>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
                            <div class="input-group">
                                <div class="input-group-addon form"><i id="email" class="fa fa-envelope icon-input" aria-hidden="true"></i></div>
                                <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-default">
                                    Renovar Senha
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
