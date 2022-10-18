@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

<div class="mt-5 ms-5">
    <h2>Clientes</h2>
</div>

<div class="ps-5">
   <hr/>
</div>

@if (isset($clientCreate))
<div id="alertSuccessCreate"
    class="form-group col-5 ms-5 mb-5 w-20 bg-success rounded d-flex justify-content-between">
    <p class="text-white align-self-center ms-2 mt-1">Cadastro do cliente efetuado com sucesso</p>
    <a href="javascript:0" onclick="hideAlert()" class="text-white text-decoration-none me-2">X</a>
</div>
@endif
    <div class="text-center mt-5 mb-5 d-flex align-items-center p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Data Cadastro</th>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Documento</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($listClient))
                @if(sizeof($listClient) >= 1)
                @foreach($listClient as $client)
                <tr>
                    <th>{{$client->DataHoraCadastro}}</th>
                    <td>{{$client->Codigo}}</td>
                    <td>{{$client->Nome}}</td>
                    <td>{{$client->CPF_CNPJ}}</td>
                    <th>{{$client->CEP}}</th>
                    <td>{{$client->Cidade}}</td>
                    <td>{{$client->UF}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Opções
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('details')}}">Detalhes</a></li>
                                <li><a class="dropdown-item" href="javascript:0">Editar</a></li>
                                <li><a class="dropdown-item" onclick="deletClient({{$client->id}})" href="javascript:0">Excluir</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8">Sem Informações</td>
                </tr>
                @endif
                @else
                <tr>
                    <td colspan="8">Sem Informações</td>
                </tr>
                @endif
            </tbody>
        </table>

      <div class="modal fade" id="modalOptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h5 class="modal-title" id="staticBackdropLabel">Atenção</h5>
            </div>
            <div class="modal-body d-flex justify-content-center">
              Deseja realmente excluir este cadastro?
            </div>
            <div class="d-flex justify-content-center mb-5 mt-5">
              <form action="{{route('delet.client')}}" method="post">
                @csrf
                <input type="hidden" id="valueDelete" name="id"/>
              <button type="button" class="btn btn-secondary me-3 btn-success" data-bs-dismiss="modal">Não</button>
              <button type="submit" data-bs-toggle="modal" data-bs-target="#modalOptions" class="btn btn-primary btn-danger">Sim</button>
            </form>
            </div>
          </div>
        </div>
      </div>


      <script>
       function deletClient(value){
        let modal = document.getElementById('modalOptions');
        let input = document.getElementById("valueDelete");
        input.value = value;
        console.log(input.value)
        $('#modalOptions').modal('show');
       }
       function hideAlert() {
            let alert = document.getElementById('alertSuccessCreate');
            alert.classList.add('d-none');
        }

      </script>
@endsection
