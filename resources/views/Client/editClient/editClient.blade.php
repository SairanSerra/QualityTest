@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

    <div class="mt-5 ms-5">
        <h2>Cadastro Cliente</h2>
    </div>

    <div class="ps-5">
        <hr />
    </div>

    <div class="p-5">
        <form action="{{ route('save.client') }}" method="post">
            <div class="d-flex justify-content-center">
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}"/>
                @if ($errors->any())
                    <div id="alert"
                        class="form-group col-5 ms-5 mb-5 w-100 bg-danger rounded d-flex justify-content-between">
                        <p class="text-white align-self-center ms-2 mt-1">Campos com * são obrigatórios</p>
                        <a href="javascript:0" onclick="hideAlert()" class="text-white text-decoration-none me-2">X</a>
                    </div>
                @endif
            </div>

            <div class="d-flex justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Nome</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="name" id="name" placeholder="Ex: Maria" value="{{ old('name') ?? $data['Nome']  }}"
                        class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>CPF/CNPJ</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="document" value="{{ old('document') ?? \App\helpers\Utils::formatar('documento',$data['CPF_CNPJ']) }}" placeholder="ex: 000.000.000-00"
                        onkeyup="maskDocument()" id="document" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Código</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="codigo" value="{{ old('codigo') ?? $data['Codigo'] }}" id="codigo" placeholder="ex: 123"
                        class="form-control">
                </div>
                <div class="form-group col-5 ms-5">
                    <label><strong>ID cliente</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="idclient" value="{{ old('idclient') ?? $data['idUsuario'] }}" onclick="maskIdClient()" onkeypress="maskIdClient()"
                        placeholder="ID" id="idclient" class="form-control">
                </div>

            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>CEP</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="cep" id="cep" value="{{ old('cep') ?? App\helpers\Utils::formatar('cep',$data['CEP']) }}" onkeyup="searchCEP()"
                        placeholder="ex: 12345-6789" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Logradouro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="street" id="street" value="{{ old('street') ?? $data['Endereco'] }}"
                        placeholder="ex: Rua São Paulo" class="form-control">
                </div>


            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5 ">
                    <label><strong>Bairro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="distric" id="distric" value="{{ old('distric') ?? $data['Bairro'] }}"
                        placeholder="ex: Morumbi" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Cidade</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="city" id="city" value="{{ old('city') ?? $data['Cidade'] }}"
                        placeholder="ex: São Paulo" class="form-control">
                </div>


            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5 ">
                    <label><strong>Estado</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="state" id="state" value="{{ old('state') ?? $data['UF'] }}" maxlength="2"
                        placeholder="ex: SP" class="form-control">
                </div>


                <div class="form-group col-5 ms-5">
                    <label><strong>Número</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="number" id="number" value="{{ old('number') ?? $data['Numero'] }}" onclick="maskNumber()" onkeyup="maskNumber()"
                        placeholder="ex: 23" class="form-control">
                </div>
            </div>
            <div class="d-flex mt-3 justify-content-center">
                <div class="form-group col-5">
                    <label><strong>Complemento</strong></label>
                    <input type="text" name="complement" id="complement" value="{{ old('complement') ?? $data['Complemento'] }}"
                        placeholder="ex: Casa 2" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Fone</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') ?? App\helpers\Utils::formatar('fone',$data['Fone'],strlen($data['Fone'])) }}"
                        onkeyup="maskphone()" onclick="maskphone()" placeholder="ex: (11) 99999-9999" class="form-control">
                </div>


            </div>

            <div class="d-flex mt-3 justify-content-center">
                <div class="form-group col-5 ">
                    <label><strong>Limite Crédito</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="limitCredit" value="{{ old('limitCredit') ?? App\helpers\Utils::formatar('money',$data['LimiteCredito']) }}" onclick="maskCredit()" onkeydown="maskCredit()"
                        placeholder="ex: R$ 2.000,00" id="limitCredit" class="form-control">
                </div>
                <div class="form-group col-5 ms-5">
                    <label><strong>Validade</strong><span class="text-danger"> *</span></label>
                    <input type="date" name="validate" value="{{ old('validate') ?? $data['Validade'] }}" min="{{\Carbon\Carbon::now()->format('Y-m-d')}}" maxlength="8"
                         placeholder="ex: {{ \Carbon\Carbon::now()->format('d/m/Y') }}"
                        id="validate" class="form-control">

                </div>

            </div>


            <div class="d-flex justify-content-center mt-5 mb-3">
                <a type="button" href="{{ route('client') }}" class="btn btn-dark ">Cancelar</a>
                <button type="submit" id="btnSubmit" class="btn btn-dark ms-3">Salvar</button>
            </div>
        </form>
    </div>
    <script>

        let button = document.getElementById('btnSubmit');

        button.addEventListener('click', ()=>{
            button.classList.add('disabled');
            setTimeout(() => {
                button.classList.remove('disabled');
            }, 2000);
        });


        function maskDocument() {

            var documents = document.getElementById("document");
            var lengthNumbers = documents.value

            if (lengthNumbers.length <= 14) {
                $('#document').mask('000.000.000-000');
            }
            if (lengthNumbers.length > 14) {
                $('#document').mask('00.000.000/0000-00');
            }
        }

        function maskCredit() {
            $("#limitCredit").maskMoney({
                prefix: 'R$ ',
                thousands: '.',
                decimal: ',',
                symbolStay: true
            });
        }

        function maskNumber() {
            $('#number').mask('000000');
        }

        function maskphone() {
            let phone = document.getElementById("phone");
            let phoneValue = phone.value;

            if (phoneValue.length == 1) {
                phone.value = '(' + phone.value;
            }

            if (phoneValue.length <= 14) {
                $('#phone').mask('(00) 0000-00000');
            }
            if (phoneValue.length > 14) {
                $('#phone').mask('(00) 00000-0000');
            }

        }

        function maskIdClient() {
            $('#idclient').mask('00000000000000000');
        }

        function searchCEP() {
            $('#cep').mask('00000-000');
            let cep = document.getElementById("cep");
            cepConsult = cep.value.replace('-', '');
            if (cepConsult.length == 8) {
                $.ajax({
                    type: "GET",
                    url: "https://viacep.com.br/ws/" + cepConsult + "/json/",
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: (response) => {
                        document.getElementById("distric").readOnly = response.bairro != '' ? true : false;
                        document.getElementById("city").readOnly = response.localidade != '' ? true : false;
                        document.getElementById("street").readOnly = response.logradouro != '' ? true : false;
                        document.getElementById("state").readOnly = response.uf != '' ? true : false;

                        if (response.bairro != '') {
                            let distric = document.getElementById("distric");
                            distric.value = response.bairro;

                        }
                        if (response.localidade != '') {
                            let city = document.getElementById("city");
                            city.value = response.localidade;
                        }
                        if (response.logradouro != '') {
                            let street = document.getElementById("street");
                            street.value = response.logradouro;
                        }
                        if (response.uf != '') {
                            let state = document.getElementById("state");
                            state.value = response.uf;
                        }
                    },
                    error: (response) => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Falha ao Consultar CEP',
                            showConfirmButton: false,
                            timer: 2500,
                        })
                    }
                })
            }
        }

        function hideAlert() {
            let alert = document.getElementById('alert');
            alert.classList.add('d-none');
        }
    </script>

@endsection
