@extends('main')

@section('title', '| View Post')

  @section('content')
    <div class="row">
      {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT']) !!}
      <div class="col l8">
        <h1>Editar Post</h1>

        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          {{ Form::label('title','Title') }}
          {{ Form::text('title',null,array('class'=>'validate','required'=>'','maxlength'=>'255')) }}
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">link</i>
          {{ Form::label('slug','Slug') }}
          {{ Form::text('slug',null,array('class'=>'validate','required'=>'','maxlength'=>255)) }}
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">reorder</i>
          {{ Form::label('body','Post Body:') }}
          {{ Form::textarea('body',null,array('class'=>'materialize-textarea','required'=>'')) }}
        </div>
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
                {!! Html::linkRoute('posts.show', 'Cancelar', array($post->id), array('class'=>'waves-effect waves-light btn red darken-3')) !!}
              </div>
              <div class="col s6">
                {{-- <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="submit">Salvar</button> --}}
                {{ Form::submit('Salvar',['class'=>'btn waves-effect waves-light light-blue darken-4']) }}
              </div>
            </div>
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>

  @endsection
