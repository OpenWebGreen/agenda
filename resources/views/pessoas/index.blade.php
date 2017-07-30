@extends("template.app")

@section("content")
    <div>
        @foreach($pessoas as $pessoa)
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">{{ $pessoa->nome }}</div>
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