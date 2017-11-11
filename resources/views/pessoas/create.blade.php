@extends('template.app')

@section('content')
  <div class="col-md-12">
    <h3>Novo contato</h3>
  </div>

  <div class="col-md-6 well">
    <form class="col-md-12" action="{{ url('/pessoas/store') }}" method="POST">
      {{ csrf_field() }}
      <div class="from-group col-md-12 {{ $errors->has('nome') ? 'has-error' : '' }}">
        <label class="control-label">Nome</label>
        <input name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Nome">
        @if($errors->has('nome'))
          <span class="help-block">
            {{ $errors->first('nome') }}
          </span>
        @endif
      </div>
      <div class="from-group col-md-4 {{ $errors->has('ddd') ? 'has-error' : '' }}">
        <label class="control-label">DDD</label>
        <input name="ddd" value="{{ old('ddd') }}" class="form-control" placeholder="DDD">
        @if($errors->has('ddd'))
          <span class="help-block">
            {{ $errors->first('ddd') }}
          </span>
        @endif
      </div>
      <div class="from-group col-md-8 {{ $errors->has('telefone') ? 'has-error' : '' }}">
        <label class="control-label">Telefone</label>
        <input name="telefone" value="{{ old('telefone') }}" class="form-control" placeholder="Telefone">
        @if($errors->has('telefone'))
          <span class="help-block">
            {{ $errors->first('telefone') }}
          </span>
        @endif
      </div>
      <div class="col-md-12">
        <button style="margin-top: 5px; float: right" class="btn btn-primary">salvar</button>
      </div>
    </form>
  </div>
@endsection