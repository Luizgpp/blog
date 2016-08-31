@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

  @section('content')
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <h1>{{ $post->title }}</h1>
        <p>
          {{ $post->body }}
        </p>
        <div class="divider">

        </div>
        <p>
          Postado em: {{ $post->category->name }}
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <ul class="collection">
          @foreach($post->comments as $comment)

            <li class="collection-item avatar">
              <i class="material-icons circle green">comment</i>
              <span class="title">{{ $comment->name }}</span>
              <p>
                {{ $comment->comment }}
              </p>
            </li>

          @endforeach
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m8 offset-m2">
        {{ Form::open(['route'=>['comments.store', $post->id],'method'=>'POST'])}}
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">perm_identity</i>
            <input name="name" type="text"  required class="validate">
            <label for="name" >Nome</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input name="email"  required type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">comment</i>
            <textarea name="comment" required class="materialize-textarea"></textarea>
            <label for="comment">Comentário</label>
          </div>
          <div class="col l12 center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Adicionar Comentário
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  @endsection
