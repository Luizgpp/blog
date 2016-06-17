@extends('main')

@section('title', '| Contact')

@section('content')
  <div class="row">
    <div class="col l12">
      <h1>Contact Me</h1>
      <p class="divider"></p>
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">subject</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Subject</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">message_circle</i>
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
          <div class="col l12 center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>

        </div>
      </form>
    </div>
  </div>
@endsection
