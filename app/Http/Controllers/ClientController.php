<?php

namespace App\Http\Controllers;

use App\helpers\Utils;
use App\Http\Requests\ValidateCreateClient;
use App\Http\Requests\ValidateEditClient;
use App\Models\CadastroClientes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
                $cep = Utils::retiraFormat('cep',$cep);
                $query->where('CEP', 'LIKE', '%'.$cep.'%');
            }
        })->orderByDesc('created_at')->paginate(10);

        return view('Client.client',['listClient' => $client])->with($request->except('_token'));

    }

    public function deletClient(Request $request){
        $id = $request->id;
        $client = $this->model->where('id', $id)->first();
        $client->delete();

        return Redirect::route('client')->with('clientCreate',true);
    }

    public function showFormCreateClient(){
        return view('Client.createClient.createClient');
    }

    public function ShowDetailsClient(Request $request){
        $id = $request->id;
        $data = $this->model->where('id', $id)->first();
        return view('Client.lectureMore.lectureMore',['data' => $data]);
    }

    public function ShowEditClient(Request $request){
        $id = $request->id;
        $data = $this->model->where('id', $id)->first();
        return view('Client.editClient.editClient',['data' => $data]);
    }

    public function createClient(ValidateCreateClient $request){
            $data = $request->validated();

            $data['document'] = Utils::retiraFormat('document', $data['document']);
            $data['cep'] = Utils::retiraFormat('cep', $data['cep']);
            $data['phone'] = Utils::retiraFormat('phone', $data['phone']);
            $data['limitCredit'] =Utils::retiraFormat('moeda2', $data['limitCredit']);

            $this->model->create([
                'idUsuario' =>  $data['idclient'] ,
                'DataHoraCadastro' => Carbon::now()->format('Y-m-d H:i:s'),
                'Codigo' => $data['codigo'],
                'Nome' => $data['name'] ,
                'CPF_CNPJ' => $data['document'],
                'CEP' => $data['cep'],
                'Endereco'  => $data['street'],
                'Numero' => $data['number'],
                'Bairro' => $data['distric'] ,
                'Cidade' => $data['city'] ,
                'UF' => $data['state'] ,
                'Complemento' => $data['complement'] ,
                'Fone' => $data['phone'],
                'LimiteCredito' => $data['limitCredit'],
                'Validade' => $data['validate'],
            ]);

       return redirect()->route('client');
    }
    public function SaveEditClient(ValidateEditClient $request){
            $data = $request->validated();

            $data['document'] = Utils::retiraFormat('document', $data['document']);
            $data['cep'] = Utils::retiraFormat('cep', $data['cep']);
            $data['phone'] = Utils::retiraFormat('phone', $data['phone']);
            $data['limitCredit'] =Utils::retiraFormat('moeda2', $data['limitCredit']);

            $client = $this->model->where('id',$data['id'])->first();

            $client->update([
                'idUsuario' =>  $data['idclient'] ,
                'Codigo' => $data['codigo'],
                'Nome' => $data['name'] ,
                'CPF_CNPJ' => $data['document'],
                'CEP' => $data['cep'],
                'Endereco'  => $data['street'],
                'Numero' => $data['number'],
                'Bairro' => $data['distric'] ,
                'Cidade' => $data['city'] ,
                'UF' => $data['state'] ,
                'Complemento' => $data['complement'] ,
                'Fone' => $data['phone'],
                'LimiteCredito' => $data['limitCredit'],
                'Validade' => $data['validate'],
            ]);

       return redirect()->route('client');
    }
}
