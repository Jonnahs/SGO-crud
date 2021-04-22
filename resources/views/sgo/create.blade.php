@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adiciona novo Colaborador</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sgo.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
          <h4>Houve alguns problemas com o preenchimento do formulário.</h4><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('sgo.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do funcionário">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Introduction:</strong>
                    <textarea class="form-control" style="height:50px" name="introduction"
                        placeholder="Introduction"></textarea>
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código do vendendor:</strong>
                    <input type="text" name="cod_vend" class="form-control" placeholder="Código do vendendor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cpf:</strong>
                    <input type="text" name="cpf" class="form-control" placeholder="CPF">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Caixa:</strong>
                    <input type="text" name="caixa" class="form-control" placeholder="Caixa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Login no Sistema:</strong>
                    <input type="text" name="login_sistema" class="form-control" placeholder="Login no Sistema">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Setor:</strong>
                    <input type="text" name="setor" class="form-control" placeholder="Setor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unidade:</strong>
                    <input type="text" name="unidade" class="form-control" placeholder="Unidade">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gestor 1:</strong>
                    <input type="text" name="gestor1" class="form-control" placeholder="Primeiro Gestor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gestor 2:</strong>
                    <input type="text" name="gestor2" class="form-control" placeholder="Segundo Gestor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gestor 3:</strong>
                    <input type="text" name="gestor3" class="form-control" placeholder="Terceiro Gestor">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
