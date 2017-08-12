@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Novo contato</h3>
    </div>

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{ url('/pessoas/store') }}" method="POST">
            {{ csrf_field() }}
            <div class="from-group">
                <label class="control-label"></label>
                <input name="nome" class="col-md-12 form-control" placeholder="Nome">
            </div>
            <button style="margin-top: 5px; float: right" class="btn btn-primary">salvar</button>
        </form>
    </div>
@endsection