@extends('main')

@section('title', "| $post->title")

@section('content')
  <div class="row">
      <div class="col s12 m10 offset-m1">
        <h1>{{ $post->title }}</h1>
        <p>
          {{ $post->body }}
        </p>
      </div>
  </div>
@endsection
