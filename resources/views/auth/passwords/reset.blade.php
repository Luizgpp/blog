@extends('main')

@section('title', '| Recuperar minha senha')

  @section('content')
    <div class="row">
      <div class="col s12 m6 offset-m3 z-depth-6 card-panel hoverable">
        {{ Form::open(['url'=>'password/reset','method'=>'POST']) }}

        {{ Form::hidden('token',$token) }}

        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="login-img" class="responsive-img">
            <p class="center">Recuperar Senha</p>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            {{ Form::label('email','Email:') }}
            {{ Form::email('email',$email,['class'=>'validate'])}}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            {{ Form::label('password','Nova Senha:') }}
            {{ Form::password('password') }}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            {{ Form::label('password_confirmation','Confirmar Senha:') }}
            {{ Form::password('password_confirmation') }}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" type="submit" name="submit">Enviar
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>

        {{ Form::close() }}
      </div>
    </div>
  @endsection
