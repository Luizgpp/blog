
@extends('main')

@section('title', '| Recuperar minha senha')

  @section('content')
    <div class="row">
      <div class="col s12 m6 offset-m3 z-depth-6 card-panel hoverable">


        {{ Form::open(['url'=>'password/email','method'=>'POST']) }}

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
            {{ Form::email('email',null,['class'=>'validate'])}}
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <p class="center">
              Será enviado um email com as inforções para o recuperar a senha.
            </p>
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

  @section('scripts')
    @if(session('status'))
      <script type="text/javascript">
      Materialize.toast("{{ session('status')}}", 4000);
      </script>
    @endif
  @endsection'
