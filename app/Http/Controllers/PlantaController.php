<?php

namespace App\Http\Controllers;

use App\Models\Abelha;
use App\Models\Mes;
use App\Models\Planta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlantaController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = Planta::class;
        $this->abelhas = Abelha::all()->toArray();
        $this->meses = Mes::all()->toArray();
    }

    public function listar(Request $request) {
        $dados = $request->all();
        $plantas = Planta::filtro($dados);

        return view('planta.listar', [
            'plantas' => $plantas->get(),
            'abelhas' => $this->abelhas,
            'meses' => $this->meses,
        ]);
    }

    public function adicionar() {
        return view('planta.adicionar', [
            'abelhas' => $this->abelhas,
            'meses' => $this->meses,
        ]);
    }

    public function registrar(Request $request) {
        $dados = $request->all();

        $validator = Validator::make($dados, [
            'nome' => ['unique:plantas', 'required', 'string', 'max:100'],
            'abelha_id' => ['required'],
        ]);

        if($validator->fails()) {
            return redirect()->route('planta.adicionar')->withErrors($validator)->withInput();
        }

        $model = $this->model::create($dados);
        $model->meses()->attach($dados['meses']);

        return redirect()->route('planta.listar');
    }
}
