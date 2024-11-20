<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Carro;
use App\Models\User;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::with(['carro', 'user'])->get();
        return view('contratos.index', compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($carro_id)
    {
        $carro = Carro::findOrFail($carro_id);
        $user = auth()->user();

        return view('contratos.create', compact('carro', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado = $request->validate([
            'carro_id' => 'required|exists:carros,id',
            'user_id' => 'required|exists:users,id',
            'tipo_contrato' => 'required|string|in:Diario,Semanal,Mensal,Anual',
            'valor' => 'required|numeric|min:1',
        ]);
    
        Contrato::create($validado);

        $carro = Carro::findOrFail($validado['carro_id']);
        $carro->update(['alugado' => 1]);
    
        return redirect()->route('contratos.index')->with('success', 'Contrato confirmado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contrato = Contrato::findOrFail($id);
    
        return view('contratos.show', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contrato = Contrato::findOrFail($id);
    
        return view('contratos.edit', compact('contrato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contrato = Contrato::findOrFail($id);
        
        $validado = $request->validate([
            'id_user' => 'required',
            'id_carro' => 'required',
            'tipo_contrato' => 'required|string|min:5|max:7',
            'valor' => 'required|float|min:1'
        ]);
    
        $contrato->update($validado);
    
        return redirect()->route('contratos.index')->with('success', 'Contrato atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contrato = Contrato::findOrFail($id);

        $carro = Carro::find($contrato->carro_id);
        if ($carro) {
            $carro->update(['alugado' => 0]);
        }

        $contrato->delete();
    
        return redirect()->route('contratos.index')->with('success', 'Contrato desfeito!');
    }
}
