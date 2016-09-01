@extends('main')

@section('title', '| All Posts')

  @section('content')
    <div class="row">
      <div class="col l9">
        <h1>Todos os Posts</h1>
      </div>
      <div class="col l3">
        <a href="{{ route('posts.create') }}" class="waves-effect waves-light btn-large btn-h1-spacing green darken-4">
          <i class="material-icons right">
            playlist_add
          </i>
          Novo Post
        </a>
      </div>
      <div class="col l12 divider">

      </div>
    </div> <!-- end of the .row -->
    <div class="row">
      <div class="col l12">
        <table class="responsive-table bordered">
          <thead>
            <tr>
              <th data-field="id">#</th>
              <th class="center-align" data-field="title">Título</th>
              <th class="center-align" data-field="body">Corpo</th>
              <th class="center-align" data-field="created-at">Criado em:</th>
              <th data-field="buttons"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <th>
                  {{ $post->id }}
                </th>
                <td>
                  {{ $post->title }}
                </td>
                <td>
                  {{ substr($post->body,0,290) }}{{ strlen($post->body) > 290 ? "..." : ""}}
                </td>
                <td>
                  {{ date('d M Y', strtotime($post->created_at)) }}
                </td>
                <td>
                  <a href="{{ route('posts.show',$post->id) }}" class="waves-effect waves-light btn btn-font-size btn-block green darken-4">Ver</a>
                  <a href="{{ route('posts.edit',$post->id) }}" class="waves-effect waves-light btn btn-font-size btn-block lime darken-2">Editar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="row">
          <div class="col l12 center-align">
            {{ $posts->links() }}
          </div>
        </div>
      </div>
    </div>
  @endsection
