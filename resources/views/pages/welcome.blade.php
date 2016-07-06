
@extends('main')

@section('title', '| Homepage')

  @section('paralax')
    @include('partials._paralax')
  @endsection


  @section('content')

    <div class="row">
      <div class="col l8">
        <!--Post -->
        @foreach($posts as $post)

          <div class="post">
            <h5>{{ $post->title}}</h5>
            <p>
              {{ substr($post->body,0,350) }} {{ strlen($post->body) > 350 ? "..." : ""}}
            </p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn waves-effect waves-light">Ler
              <i class="material-icons right">send</i>
            </a>
          </div>
          <!-- End Post-->
          <p class="divider"></p>
        @endforeach

        <p class="divider"></p>
      </div>
      <div class="col l3 offset-l1">
        SideBar
      </div>
    </div>
  @endsection
