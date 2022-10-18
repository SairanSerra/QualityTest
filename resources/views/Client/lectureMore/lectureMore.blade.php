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

        <div class="d-flex mt-3 justify-content-center">
            <div class="form-group col-5">
                <label><strong>Nome</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="name" id="name" placeholder="Ex: Maria" value="{{ $data['Nome'] }}"
                    class="form-control">
            </div>

            <div class="form-group col-5 ms-5">
                <label><strong>CPF/CNPJ</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="document" value="{{ $data['CPF_CNPJ'] }}" placeholder="ex: 000.000.000-00"
                     id="document" class="form-control">
            </div>
        </div>

        <div class="d-flex mt-3 justify-content-center">

            <div class="form-group col-5">
                <label><strong>Código</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="codigo" value="{{ $data['Codigo'] }}" id="codigo" placeholder="ex: 123"
                    class="form-control">
            </div>
            <div class="form-group col-5 ms-5">
                <label><strong>ID cliente</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="idclient" value="{{ $data['idUsuario'] }}"
                    placeholder="ID" id="idclient" class="form-control">
            </div>

        </div>

        <div class="d-flex mt-3 justify-content-center">

            <div class="form-group col-5">
                <label><strong>CEP</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="cep" id="cep" value="{{ \App\helpers\Utils::formatar('cep',$data['CEP']) }}"
                    placeholder="ex: 12345-6789" class="form-control">
            </div>

            <div class="form-group col-5 ms-5">
                <label><strong>Logradouro</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="street" id="street" value="{{ $data['Endereco'] }}"
                    placeholder="ex: Rua São Paulo" class="form-control">
            </div>


        </div>

        <div class="d-flex mt-3 justify-content-center">

            <div class="form-group col-5 ">
                <label><strong>Bairro</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="distric" id="distric" value="{{ $data['Bairro'] }}"
                    placeholder="ex: Morumbi" class="form-control">
            </div>

            <div class="form-group col-5 ms-5">
                <label><strong>Cidade</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="city" id="city" value="{{ $data['Cidade'] }}"
                    placeholder="ex: São Paulo" class="form-control">
            </div>


        </div>

        <div class="d-flex mt-3 justify-content-center">

            <div class="form-group col-5 ">
                <label><strong>Estado</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="state" id="state" value="{{ $data['UF'] }}" maxlength="2"
                    placeholder="ex: SP" class="form-control">
            </div>


            <div class="form-group col-5 ms-5">
                <label><strong>Número</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="number" id="number" value="{{ $data['Numero'] }}"
                    placeholder="ex: 23" class="form-control">
            </div>
        </div>
        <div class="d-flex mt-3 justify-content-center">
            <div class="form-group col-5">
                <label><strong>Complemento</strong></label>
                <input readOnly type="text" name="complement" id="complement" value="{{ isset($data['Complemento']) ? $data['Complemento'] : '' }}"
                    placeholder="ex: Casa 2" class="form-control">
            </div>

            <div class="form-group col-5 ms-5">
                <label><strong>Fone</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="phone" id="phone" value="{{ \App\helpers\Utils::formatar('fone',$data['Fone']) }}"
                     placeholder="ex: (11) 99999-9999" class="form-control">
            </div>


        </div>

        <div class="d-flex mt-3 justify-content-center">
            <div class="form-group col-5 ">
                <label><strong>Limite Crédito</strong><span class="text-danger"> *</span></label>
                <input readOnly type="text" name="limitCredit" value="{{ $data['LimiteCredito'] }}"
                    placeholder="ex: R$ 2.000,00" id="limitCredit" class="form-control">
            </div>
            <div class="form-group col-5 ms-5">
                <label><strong>Validade</strong><span class="text-danger"> *</span></label>
                <input readOnly type="date" name="validate" value="{{ $data['Validade'] }}" min="{{\Carbon\Carbon::now()->format('Y-m-d')}}" maxlength="8"
                     placeholder="ex: {{ \Carbon\Carbon::now()->format('d/m/Y') }}"
                    id="validate" class="form-control">

            </div>

        </div>

        <div class="d-flex justify-content-center mt-5 mb-3">
            <a type="button" href="{{route('client')}}" class="btn btn-dark">Voltar</a>
            <a type="button" class="btn btn-dark ms-3">Editar</a>
        </div>

    </div>

@endsection
