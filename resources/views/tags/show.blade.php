@extends('main')

@section('title', "| Tag $tag->name")

  @section('content')
    <div class="row">
      <div class="col l8">
        <h1>Tag {{ $tag->name }} <small>{{ $tag->posts()->count() }} {{ $tag->posts()->count() === 1 ? 'Post' : 'Posts' }}</small></h1>
      </div>
      <div class="col l2">
          <a href="{{ route('tags.edit',$tag->id) }}" class="waves-effect waves-light btn" style="margin-top:3.5rem;"><i class="material-icons left">mode_edit</i>Edit</a>
      </div>
    </div>
    <div class="row">
      <div class="col l12">
        <table class="striped responsive-table">
          <thead>
            <tr>
              <th data-field="id">
                #
              </th>
              <th data-field="title">
                Title
              </th>
              <th data-field="tag">
                Tags
              </th>
              <th data-field="buttons">

              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($tag->posts as $post)
              <tr>
                <th>
                  {{ $post->id }}
                </th>
                <td>
                  {{ $post->title }}
                </td>
                <td>
                  @foreach ($post->tags as $tag)
                    <div class="chip teal darken-3 white-text">
                      {{ $tag->name }}
                    </div>
                  @endforeach
                </td>
                <td>
                  <a href="{{ route('posts.show',$post->id) }}" class="waves-effect waves-light btn"><i class="material-icons left">open_in_new</i>View</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  @endsection
