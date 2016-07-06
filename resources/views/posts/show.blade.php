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
              <div class="col s12">
                <span>
                  <strong>URL:</strong>
                </span>
                <span><a href="{{ route('blog.single',$post->slug)}}">{{ route('blog.single',$post->slug)}}</a></span>
              </div>
            </div>
          </div>
          <div class="card-action">
            <div class="row">
              <div class="col s6">
                {!! Html::linkRoute('posts.edit', 'Editar', array($post->id), array('class'=>'waves-effect waves-light btn light-blue darken-4')) !!}
              </div>
              <div class="col s6">
                {{ Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) }}
                {{ Form::submit('Apagar', ['class'=>'waves-effect waves-light btn red darken-3']) }}
                {{ Form::close() }}
              </div>
            </div>
            <div class="row">
              <div class="col l12">
                {{ Html::linkRoute('posts.index','<< Todos os Posts',[],['class'=>'waves-effect waves-light btn'])}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection
