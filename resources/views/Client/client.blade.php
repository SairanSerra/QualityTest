@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

<div class="mt-5 ms-5">
    <h2>Clientes</h2>
</div>

<div class="ps-5">
   <hr/>
</div>


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
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Opções
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('details')}}">Detalhes</a></li>
                                <li><a class="dropdown-item" href="javascript:0">Editar</a></li>
                                <li><a class="dropdown-item" onclick="deletClient('13')" href="javascript:0">Excluir</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

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
        $('#modalOptions').modal('show');
       }

      </script>
@endsection
