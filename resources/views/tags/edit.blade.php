@extends('main')

@section('title','| Edit Tag')

  @section('content')
      <div class="row">
        <div class="col l6 offset-l3">
          {{ Form::model($tag,['route'=>['tags.update',$tag->id],'method'=>'PUT']) }}
          <h5>Edit Tag</h5>
          <div class="input-field">
            {{ Form::label('name','Nome:') }}
            {{ Form::text('name',null,['class'=>'validade','required'=>''])}}
          </div>

          <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit" name="submit">Salvar Mudanças
              <i class="material-icons right">send</i>
            </button>
          </div>

          {{ Form::Close() }}
        </div>
      </div>
  @endsection
