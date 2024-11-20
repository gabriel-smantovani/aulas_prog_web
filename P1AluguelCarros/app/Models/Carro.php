<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $table = 'carros';

    protected $fillable = ['id', 'placa', 'marca', 'modelo', 'ano', 'cor', 'valor', 'alugado'];

    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }

    public function estaAlugado()
    {
        if (!$this) {
            return 'Carro não encontrado';
        }

        $estado = $this->alugado;

        return $estado > 0 ? 'ALUGADO' : 'DISPONÍVEL';
    }
}
