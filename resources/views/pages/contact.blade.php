@extends('main')

@section('title', '| Contact')

  @section('content')
    <div class="row">
      <div class="col l10 offset-l1">
        <h2>Entre em Contato</h2>
        <p class="divider"></p>
        <form action="{{ route('post.contact') }}" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">E</i>
              <input name="email" type="email"  required class="validate">
              <label for="email">mail</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">A</i>
              <input name="subject"  required type="tel" class="validate">
              <label for="subject">ssunto</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">M</i>
              <textarea name="message" required class="materialize-textarea"></textarea>
              <label for="message">ensagem</label>
            </div>
            <div class="col l12 center-align">
              <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
  @endsection
