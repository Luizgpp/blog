@extends('main')
@section('title','| Categorias')

  @section('content')
    <div class="row">
      <div class="col l9">
        <h1>Categorias</h1>
      </div>
    </div>
    <div class="row">
      <div class="col l9 " id="tabela">
        <table  class="responsive-table bordered">
          <thead>
            <tr>
              <th data-field="id">#</th>
              <th data-field="name">Nome</th>
              <th data-field="button"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr>
                <th>
                  {{ $category->id }}
                </th>
                <td>
                  {{ $category->name }}
                </td>
                <td>
                  <button type="button" id="btn-delete" class="waves-effect waves-light btn btn-font-size red darken-3">Excluir</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col l3">
        <div class="card teal darken-3" >
          <div class="card-content white-text">
            {{ Form::Open(['route'=>'categories.store','method'=>'POST']) }}
            <h5>Nova Categoria</h5>
            <div class="input-field">
              {{ Form::label('name','Nome:') }}
              {{ Form::text('name',null,['class'=>'validade','required'=>''])}}
            </div>

            <div class="center-align">
              <button class="btn waves-effect waves-light" type="submit" name="submit">Adicionar
                <i class="material-icons right">send</i>
              </button>
            </div>

            {{ Form::Close() }}

          </div>
        </div>
      </div>
    </div>
  @endsection
