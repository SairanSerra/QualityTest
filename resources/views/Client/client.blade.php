@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

    <div class="mt-5 ms-5">
        <h2>Clientes</h2>
    </div>

    <div class="ps-5">
        <hr />
    </div>

    <form action="{{route('client')}}" method="GET">
        <div class="d-flex justify-content-center mt-5 p-3">
            @csrf
            <div class="form-group col-2">
                <label><strong>Código</strong></label>
                <input type="text" name="codigo" id="codigo" placeholder="Ex: 123" value="{{ isset($codigo) ? $codigo : '' }}"
                    class="form-control">
            </div>

            <div class="form-group col-3 ms-2">
                <label><strong>Nome</strong></label>
                <input type="text" name="name" value="{{ isset($name) ? $name : ''  }}" placeholder="ex: Maria"id="name"
                    class="form-control">
            </div>
            <div class="form-group col-3 ms-2">
                <label><strong>Cidade</strong></label>
                <input type="text" name="city" value="{{ isset($city) ? $city : '' }}" placeholder="ex: São Paulo"id="city"
                    class="form-control">
            </div>
            <div class="form-group col-3 ms-2">
                <label><strong>CEP</strong></label>
                <input type="text" name="cep" value="{{ isset($cep) ? $cep : '' }}" onkeyup="maskCEP()"
                    placeholder="ex: 00000-000"id="cep" class="form-control">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a type="button" href="{{ route('client') }}" class="btn btn-secondary me-3 btn-dark">Limpar</a>
            <button type="submit" class="btn btn-secondary me-3 btn-dark">Buscar</button>
        </div>
    </form>

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
                @if (sizeof($listClient) >= 1)
                    @foreach ($listClient as $client)
                        <tr>
                            <th>{{ \Carbon\Carbon::parse($client->DataHoraCadastro)->format('d/m/Y H:i:s') }}</th>
                            <td>{{ $client->Codigo }}</td>
                            <td>{{ $client->Nome }}</td>
                            <td>{{ \App\helpers\Utils::formatar('documento',$client->CPF_CNPJ) }}</td>
                            <th>{{ \App\helpers\Utils::formatar('cep',$client->CEP) }}</th>
                            <td>{{ $client->Cidade }}</td>
                            <td>{{ $client->UF }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Opções
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{ route('details', array('id'=>$client->id)) }}">Detalhes</a></li>
                                        <li><a class="dropdown-item" href="{{route('edit.client.show',array('id'=>$client->id))}}">Editar</a></li>
                                        <li><a class="dropdown-item" onclick="deletClient({{ $client->id }})"
                                                href="javascript:0">Excluir</a></li>
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
            </tbody>
        </table>
    </div>

        {{ $listClient->links('Client.paginate.defaultPaginate') }}

        <div class="modal fade" id="modalOptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="staticBackdropLabel">Atenção</h5>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        Deseja realmente excluir este cadastro?
                    </div>
                    <div class="d-flex justify-content-center mb-5 mt-5">
                        <form action="{{ route('delet.client') }}" method="post">
                            @csrf
                            <input type="hidden" id="valueDelete" name="id" />
                            <button type="button" class="btn btn-secondary me-3 btn-success"
                                data-bs-dismiss="modal">Não</button>
                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalOptions"
                                class="btn btn-primary btn-danger">Sim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function deletClient(value) {
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

            function maskCEP() {
                $('#cep').mask('00000-000');
            }
        </script>
    @endsection
