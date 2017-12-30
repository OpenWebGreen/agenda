@extends("template.app")

@section("content")
  <style>
    .btn-action {
      padding: 5px;
      margin-left: 5px;
      float: right;
    }
  </style>
  <div>
    <div class="col-sm-12" style="padding-bottom: 10px">
      @foreach(range('A', 'Z') as $letra)
        <div class="btn-group">
          <a href="{{ url('pessoas/' . $letra) }}" class="btn btn-primary {{ $letra === $criterio ? 'disabled' : '' }}">
            {{ $letra }}
          </a>
        </div>
      @endforeach
    </div>

    <div class="row">
      <h1 class="col-sm-8">Critério: {{ $criterio }}</h1>
        <form action="{{ url('/pessoas/busca') }}" method="post">
          <div style="margin-top: 70px" class="col-sm-4 input-group">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="criterio" placeholder="Buscar...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">ok</button>
            </span>
          </div>
        </form>
    </div>

    @foreach($pessoas as $pessoa)
      <div class="col-md-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            {{ $pessoa->nome }}
            <a href="{{ url("/pessoas/$pessoa->id/excluir") }}" class="btn btn-xs btn-danger btn-action">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
            <a href="{{ url("/pessoas/$pessoa->id/editar") }}" class="btn btn-xs btn-primary btn-action">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
          </div>
          <div class="panel-body">
            @foreach($pessoa->telefones as $telefone)
              <p><strong>Telefone: </strong> ({{ $telefone->ddd }}) {{ $telefone->telefone }}</p>
            @endforeach
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection