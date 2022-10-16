@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

    <div class="mt-5 ms-5">
        <h2>Detalhes</h2>
    </div>

    <div class="ps-5">
        <hr />
    </div>

    <div class="p-5">
        <form action="" method="post">
            <div class="d-flex mt-3 justify-content-center">
                <div class="form-group col-5">
                    <label><strong>ID cliente</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="idcliente" id="idcliente" class="form-control">
                </div>

                <div class="form-group col-5 ms-5 mb-5">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Nome</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>CPF/CNPJ</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="documento" id="documento" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Código</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="codigo" id="codigo" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>CEP</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="cep" id="cep" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Logradouro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="logradouro" id="logradouro" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Bairro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="bairro" id="bairro" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Cidade</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="cidade" id="cidade" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Estado</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="estado" id="estado" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Complemento</strong></label>
                    <input type="text" name="complemento" id="complemento" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Número</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="numero" id="numero" class="form-control">
                </div>
            </div>
            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Fone</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="fone" id="fone" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Limite Crédito</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="limiteCredito" id="limiteCredito" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">
                <div class="form-group col-5">
                    <label><strong>Validade</strong><span class="text-danger"> *</span></label>
                    <input type="date" name="validade" maxlength="10" id="validade" class="form-control">
                </div>

                <div class="form-group col-5 ms-5 mb-5">
                    <label><strong>Cadastro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="cadastro" id="cadastro" class="form-control">
                </div>

            </div>


            <div class="d-flex justify-content-center mt-5 mb-3">
                <a type="button" href="{{ route('client') }}" class="btn btn-dark">Cancelar</a>
                <button type="submit" class="btn btn-dark ms-3">Cadastrar</button>
            </div>

        </form>

    </div>

@endsection
