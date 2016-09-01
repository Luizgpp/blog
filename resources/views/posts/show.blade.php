@extends('main')

@section('title', '| View Post')

  @section('content')
    <div class="row">
      <div class="col l8">
        <h2>{{ $post->title}}</h2>
        <p>
          {{$post->body}}
        </p>

        <div class="divider">

        </div>
        <div class="card-panel teal center-align">
          @foreach ($post->tags as $tag)
            <div class="chip white">
              {{ $tag->name }}
            </div>
          @endforeach
        </div>
      </div>
      <div class="col l4">
        <div class="card teal darken-3  center-align" >
          <div class="card-content white-text">
            <div class="row">
              <div class="col s12">
                <dl><strong>CATEGORIA:</strong></dl>
                <dt>{{ $post->category->name }}</dt>
              </div>
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
    <div class="row">
      <div class="col l12">
        <div class="card-panel">
          <h5>Comentários <small class="grey-text text-darken-1" > Total {{ $post->comments->count()}}</small></h5>
          <table class="bordered responsive-table highlight">
            <thead>
              <th>
                Nome
              </th>
              <th>
                Email
              </th>
              <th>
                Comentário
              </th>
              <th styles="width:20px">

              </th>
            </thead>
            <tbody>
              @foreach($post->comments as $comment)
                <tr>
                  <td>
                    {{$comment->name}}
                  </td>
                  <td>
                    {{$comment->email}}
                  </td>
                  <td>
                    {{$comment->comment}}
                  </td>
                  <td>
                    <a href="{{ route('comments.edit',$comment->id)}}" class="waves-effect waves-light btn"><i class="material-icons">mode_edit</i></a>
                    <a href="{{ route('comments.destroy',$comment->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Tem certeza?" class="waves-effect waves-light btn red"><i class="material-icons">delete_forever</i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  @endsection
@section('script')
    {{ Html::script('js/delete_method_laravel.js') }}
@endsection
