<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Status;

class VeiculoController extends Controller
{
    public function index() {
        $pageSize = request()->integer('pageSize', 3);
        $pageSize = $pageSize > 0 ? $pageSize : 3;
        $veiculos = Veiculo::with('status')->paginate($pageSize);
        return view('veiculos', ['veiculos' => $veiculos]);
    }

    public function detail($placa) {
        $veiculo = Veiculo::where('placa', $placa)->with('status')->firstOrFail();
        return view('veiculo_detail', ['veiculo' => $veiculo]);
    }

    public function create() {
        $status = Status::all();
        return view('veiculo_create', ['status' => $status]);
    }

    public function store() {
        request()->validate([
            'license_plate' => ['required'],
            'model' => ['required'],
            'year' => ['required'],
            'owner' => ['required'],
            'status_id' => ['required']
        ]);
        
        $veiculo = Veiculo::create([
            'placa' => request('license_plate'),
            'modelo' => request('model'),
            'ano' => request('year'),
            'proprietario' => request('owner'),
            'status_id' => request('status_id')
        ]);

        $veiculoDB = Veiculo::where('placa', $veiculo->placa)->firstOrFail();

        return redirect('/veiculos/' . $veiculoDB->placa . '/view');
    }

    public function update($placa) {
        request()->validate([
            'license_plate' => ['required'],
            'model' => ['required'],
            'year' => ['required'],
            'owner' => ['required'],
            'status_id' => ['required']
        ]);

        $veiculoDB = Veiculo::where('placa', $placa)->firstOrFail();

        $veiculoDB->update([
            'placa' => request('license_plate'),
            'modelo' => request('model'),
            'ano' => request('year'),
            'proprietario' => request('owner'),
            'status_id' => request('status_id')
        ]);

        return redirect('/veiculos/' . $veiculoDB->placa . '/view');
    }

    public function edit($placa) {
        $veiculo = Veiculo::where('placa', $placa)->firstOrFail();
        $status = Status::all();
        return view('veiculo_edit', [
            'veiculo' => $veiculo, 
            'status' => $status
        ]);
    }

    public function destroy($placa) {
        $veiculo = Veiculo::where('placa', $placa)->firstOrFail();
        $veiculo->delete();
        return redirect('/veiculos');
    }

}
