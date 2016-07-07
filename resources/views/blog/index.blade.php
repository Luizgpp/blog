@extends('main')

@section('title','| Blog')

  @section('content')
    <div class="row">
      <div class="col s12">
        <h1>Blog</h1>
      </div>
    </div>

    @foreach ($posts as $post)
      <div class="row">
        <div class="col s12 m10 offset-m1">
          <h2>{{ $post->title }}</h2>
          <h6>Publicado em: {{ date('d M Y - H:i',strtotime($post->created_at)) }}</h6>

          <p>
            {{ substr($post->body,0.250) }}{{strlen($post->body) > 350 ? '...' : ""}}
          </p>
          <a href="{{ route('blog.single', $post->slug) }}" class="waves-effect waves-light btn">Ver mais...</a>
        </div>
      </div>
      <div class="divider">

      </div>
    @endforeach
    <div class="row">
      <div class="col s12 center-align">
        {{ $posts->links() }}
      </div>
    </div>
  @endsection
