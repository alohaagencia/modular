@extends('login::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fazer Login</div>
                <div class="panel-body">
                    {!! Form::openHorizontal(['md' => [4, 6]]) !!}
                      {!! Form::text('E-mail', 'email') !!}
                      {!! Form::password('Senha', 'password') !!}
                      {!! Form::checkbox('Lembrar-me', 'remember') !!}
                      {!! Form::submit('Login')->addClass('btn-primary') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
