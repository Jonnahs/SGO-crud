@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SGO CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sgo.create') }}" title="Cadastro de funcionário"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Cod. Vendedor</th>
            <th style="width:100%">Nome</th>
            <th style="width:100%">Cpf</th>
            <th style="width:100%">Status</th>
            <th style="width:100%">Caixa</th>
            <th>Login no Sistema</th>
            <th>Setor</th>
            <th>Unidade</th>
            <th>Gestor 1</th>
            <th>Gestor 2</th>
            <th>Gestor 3</th>
            <th>Date Created</th>
            <th>Action</th>

        </tr>
        @foreach ($sgos as $sgo)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sgo->cod_vend }}</td>
                <td>{{ $sgo->nome }}</td>
                <td>{{ $sgo->cpf }}</td>
                <td>{{ $sgo->status }}</td>
                <td>{{ $sgo->caixa }}</td>
                <td>{{ $sgo->login_sistema }}</td>
                <td>{{ $sgo->setor }}</td>
                <td>{{ $sgo->unidade }}</td>
                <td>{{ $sgo->gestor1 }}</td>
                <td>{{ $sgo->gestor2 }}</td>
                <td>{{ $sgo->gestor3 }}</td>
                <td>{{ date_format($sgo->created_at, 'jS M Y') }}</td>
                <td>
                    {{-- <form action="{{ route('sgos.destroy', $sgo->id) }}" method="POST">

                        <a href="{{ route('sgos.show', $sgo->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('sgos.edit', $sgo->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </table>

    {!! $sgos->links() !!}

@endsection
