<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $validado = $request->validate([
            'placa' => 'required|string|size:7|unique:carros',
            'marca' => 'required|string|min:3|max:30',
            'modelo' => 'required|string|min:3|max:30',
            'ano' => 'required|integer|between:1900,2025',
            'cor' => 'required|string|min:3|max:30',
        ]);

        Carro::create($validado);

        return redirect()->route('carros.index')->with('success', 'Carro cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        $carro = Carro::findOrFail($id);
    
        return view('carros.show', compact('carro'));
    }

    public function edit(string $id)
    {
        $carro = Carro::findOrFail($id);
    
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, string $id)
    {
        $validado = $request->validate([
            'placa' => 'required|string|size:7|unique:carros',
            'marca' => 'required|string|min:3|max:30',
            'modelo' => 'required|string|min:3|max:30',
            'ano' => 'required|integer|between:1900,2025',
            'cor' => 'required|string|min:3|max:30',
        ]);
    
        $carro = Carro::findOrFail($id);
        $carro->update($validado);
    
        return redirect()->route('carros.index')->with('success', 'Carro atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
    
        return redirect()->route('carros.index')->with('success', 'Carro excluído com sucesso!');
    }
}
