<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $carrosAlugados = Carro::where('alugado', 1)->count();
        $carrosNaoAlugados = Carro::where('alugado', 0)->count();

        if (is_null($carrosAlugados) || is_null($carrosNaoAlugados)) {
            return response()->json(['error' => 'Falha ao recuperar os dados de carros'], 500);
        }

        return view('dashboard', compact('carrosAlugados', 'carrosNaoAlugados'));
    }
}