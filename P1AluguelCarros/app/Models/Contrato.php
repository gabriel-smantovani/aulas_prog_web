<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;
use App\Models\Cliente;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    protected $fillable = ['id', 'carro_id', 'user_id', 'tipo_contrato'];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function calcularValorTotal()
    {
        if (!$this->carro) {
            return 'Carro não encontrado';
        }

        $valorPorDia = $this->carro->valor;

        $dias = match ($this->tipo_contrato) {
            'Diario' => 1,
            'Semanal' => 7,
            'Mensal' => 30,
            'Anual' => 365,
            default => 0,
        };

        $valorTotal = $valorPorDia * $dias;

        return 'R$ ' . number_format($valorTotal, 2, ',', '.');
    }
}
