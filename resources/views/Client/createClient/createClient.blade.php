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
        <form action="{{ route('create.client') }}" method="post">
            <div class="d-flex mt-3 justify-content-center">


                <div class="form-group col-5 ms-5 mb-5">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Nome</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="nome" id="nome"  placeholder="Ex: Maria" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>CPF/CNPJ</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="document"  placeholder="ex: 000.000.000-00" onkeyup="maskDocument()" id="document" class="form-control">
                </div>
            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>Código</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="codigo" id="codigo"  placeholder="ex: 123" class="form-control">
                </div>
                <div class="form-group col-5 ms-5">
                    <label><strong>ID cliente</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="idclient"  placeholder="ID" id="idclient" class="form-control">
                </div>

            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5">
                    <label><strong>CEP</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="cep" id="cep" onkeyup="maskCep()"  placeholder="ex: 12345-6789" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Logradouro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="street" id="street"  placeholder="ex: Rua São Paulo"  class="form-control">
                </div>


            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5 ">
                    <label><strong>Bairro</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="distric" id="distric"  placeholder="ex: Morumbi" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Cidade</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="city" id="city"  placeholder="ex: São Paulo" class="form-control">
                </div>


            </div>

            <div class="d-flex mt-3 justify-content-center">

                <div class="form-group col-5 ">
                    <label><strong>Estado</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="state" id="state"  placeholder="ex: SP" class="form-control">
                </div>


                <div class="form-group col-5 ms-5">
                    <label><strong>Número</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="number" id="number" onkeyup="maskNumber()"  placeholder="ex: 23" class="form-control">
                </div>
            </div>
            <div class="d-flex mt-3 justify-content-center">
                <div class="form-group col-5">
                    <label><strong>Complemento</strong></label>
                    <input type="text" name="complement" id="complement"  placeholder="ex: Casa 2" class="form-control">
                </div>

                <div class="form-group col-5 ms-5">
                    <label><strong>Fone</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="phone" id="phone" onkeyup="maskphone()"  placeholder="ex: (11) 99999-9999" class="form-control">
                </div>


            </div>

            <div class="d-flex mt-3 justify-content-center">
                <div class="form-group col-5 ">
                    <label><strong>Limite Crédito</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="limitCredit" onkeyup="maskCredit()"  placeholder="ex: R$ 2.000,00" id="limitCredit" class="form-control">
                </div>
                <div class="form-group col-5 ms-5">
                    <label><strong>Validade</strong><span class="text-danger"> *</span></label>
                    <input type="text" name="validate" maxlength="10" onkeyup="maskDate()"  placeholder="ex: {{\Carbon\Carbon::now()->format("d/m/Y")}}" id="validate" class="form-control">

                </div>

            </div>


            <div class="d-flex justify-content-center mt-5 mb-3">
                <a type="button" href="{{ route('client') }}" class="btn btn-dark">Cancelar</a>
                <button type="submit" class="btn btn-dark ms-3">Cadastrar</button>
            </div>

        </form>

    </div>
    <script>
        function maskDocument() {

            var documents = document.getElementById("document");
            var lengthNumbers = documents.value

            if (lengthNumbers.length <= 14) {
                $('#document').mask('000.000.000-000');
            } if(lengthNumbers.length > 14) {
                $('#document').mask('00.000.000/0000-00');
            }
        }

        function maskDate() {
            $('#validate').mask('00/00/0000');
        }
        function maskCredit(){
            $("#limitCredit").maskMoney({prefix:'R$ ', thousands:'.', decimal:',', symbolStay: true});
        }
        function maskNumber(){
            $('#number').mask('000000');
        }
        function maskphone(){
            let phone = document.getElementById("phone");
            let phoneValue = phone.value;

            if(phoneValue.length == 1){
                phone.value = '('+phone.value;
            }

            console.log(phoneValue);
            if(phoneValue.length <= 14){
                $('#phone').mask('(00) 0000-00000');
            }
            if(phoneValue.length > 14){
                $('#phone').mask('(00) 00000-0000');
            }

        }
        function maskCep(){
            $('#cep').mask('00000-000');
        }



    </script>

@endsection
