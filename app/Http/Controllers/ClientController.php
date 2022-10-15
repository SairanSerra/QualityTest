<?php

namespace App\Http\Controllers;

use App\Models\CadastroClientes;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new CadastroClientes();
    }
    public function ShowClient(Request $request){
        $city = $request->city;
        $name = $request->name;
        $codigo = $request->codigo;
        $cep = $request->cep;

        $client = $this->model->where(function($query) use($city,$name,$codigo,$cep){
            if($city != null){
                $query->where('Cidade', 'LIKE', '%'.$city.'%');
            }
            if($name != null){
                $query->where('Nome', 'LIKE', '%'.$name.'%');
            }
            if($codigo != null){
                $query->where('Codigo', 'LIKE', '%'.$codigo.'%');
            }
            if($cep != null){
                $query->where('CEP', 'LIKE', '%'.$cep.'%');
            }
        })->orderByDesc('created_at')->paginate(10);

        return view('Client.client',['listClient' => $client]);

    }

    public function ShowDetailsClient(Request $request){
        return view('Client.lectureMore.lectureMore');
    }
}
