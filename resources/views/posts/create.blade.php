@extends('main')

@section('title','Create New Post')

  @section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
  @endsection
  @section('content')
    <div class="row">
      <div class="col s12 m8 offset-m2 center-align">
        <h1>Create New Post</h1>
        <div class="divider">
        </div>
        {!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'')) !!}
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          {{ Form::label('title','Title') }}
          {{ Form::text('title',null,array('class'=>'validate','required'=>'','maxlength'=>'255')) }}
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">reorder</i>
          {{ Form::label('body','Post Body:') }}
          {{ Form::textarea('body',null,array('class'=>'materialize-textarea','required'=>'')) }}
        </div>

        <div class="col s12 center-align">
          <button class="btn waves-effect waves-light" type="submit" name="submit">Create Post
            <i class="material-icons right">send</i>
          </button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  @endsection

  @section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
  @endsection
