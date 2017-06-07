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
                    <li class="active">Esqueceu sua senha</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <h3>Esqueceu sua senha?</h3>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="row" role="form" method="POST" action="{{ route('password.email') }}">
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
                            <div class="form-group col-sm-6">
                                <a href="{{asset('/login')}}" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </a>
                            </div>
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn btn-default"><i class="fa fa-unlock " aria-hidden="true"></i> Redefinir </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
