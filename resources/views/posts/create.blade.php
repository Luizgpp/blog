@extends('main')

@section('title','Create New Post')

  @section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
  @endsection
  @section('content')
    <div class="row">
      <div class="col s12 m8 offset-m2">
        <h1 class="center-align">Create New Post</h1>
        <div class="divider">
        </div>
        {!! Form::open(array('route' => 'posts.store')) !!}
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          {{ Form::label('title','Title') }}
          {{ Form::text('title',null,array('class'=>'validate','required'=>'','maxlength'=>255)) }}
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">link</i>
          {{ Form::label('slug','Slug') }}
          {{ Form::text('slug',null,array('class'=>'validate','required'=>'','maxlength'=>255)) }}
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">style</i>
          <select name="category_id">
            <option value="" disabled selected>Escolha a Categoria</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            <label for="category_id">Categoria:</label>
          </select>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">reorder</i>
          {{ Form::label('body','Post Body:') }}
          {{ Form::textarea('body',null,array('class'=>'materialize-textarea validate','required'=>'')) }}
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
    
    <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });
    </script>
  @endsection
