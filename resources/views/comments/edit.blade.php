@extends('main')

@section('title', '| Editar Comentario')

  @section('content')
    <div class="row">
      {{ Form::model($comment,['route'=>['comments.update',$comment->id],'method'=>'PUT']) }}
      <div class="col l8 offset-l2">
        <h2>Editar Comentário</h2>

        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          {{ Form::label('name','Nome') }}
          {{ Form::text('name',null,['disabled'=>'']) }}
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          {{ Form::label('email','Email') }}
          {{ Form::text('email',null,['disabled'=>'']) }}
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          {{ Form::label('comment','Comentário') }}
          {{ Form::textarea('comment',null,['class'=>'materialize-textarea','required'=>'']) }}
        </div>
        <div class="col s3">
          {{ Form::submit('Salvar',['class'=>'btn waves-effect waves-light']) }}
        </div>
      </div>
      {{ Form::close() }}
    </div>
  @endsection
