@extends('main')

@section('title', '| View Post')

  @section('content')
    <div class="row">
      <div class="col l8">
        <h1>{{ $post->title}}</h1>
        <p>
          {{$post->body}}
        </p>
      </div>
      <div class="col l4">
        <div class="card teal darken-3  center-align" >
          <div class="card-content white-text">
            <div class="row">
              <div class="col s6">
                <dl><strong>Criado em:</strong></dl>
                <dt>{{ date('d M Y - H:i',strtotime($post->created_at)) }}</dt>
              </div>
              <div class="col s6">
                <dl><strong>Atualizado em:</strong></dl>
                <dt>{{ date('d M Y - H:i',strtotime($post->updated_at)) }}</dt>
              </div>
            </div>
          </div>
          <div class="card-action">
            <div class="row">
              <div class="col s6">
                {!! Html::linkRoute('posts.edit', 'Editar', array($post->id), array('class'=>'waves-effect waves-light btn light-blue darken-4')) !!}
              </div>
              <div class="col s6">
                {!! Html::linkRoute('posts.destroy', 'Apagar', array($post->id), array('class'=>'waves-effect waves-light btn red darken-3')) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection
