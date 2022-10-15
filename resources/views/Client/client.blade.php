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
                                <li><a class="dropdown-item" href="#">Editar</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
