@extends('main')

@section('title','| Login')

  @section('content')
    <div class="row">
      <div class="col s12 m6 offset-m3 z-depth-6 card-panel hoverable">
        {{ Form::open() }}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="login-img" class="responsive-img">
            <p class="center">World of Tanks - Brasil</p>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            {{ Form::label('email','Email:') }}
            {{ Form::email('email',null,['class'=>'validate'])}}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            {{ Form::label('password','Senha:') }}
            {{ Form::password('password') }}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember">Lembrar-me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" type="submit" name="submit">Login
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p><a href="{{url('auth/register')}}">Registrar-se</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
            <p class="right-align"><a href="{{url('password/reset')}}">Esqueci minha senha.</a></p>
          </div>
        </div>

        {{ Form::close() }}
      </div>
    </div>

  @endsection
