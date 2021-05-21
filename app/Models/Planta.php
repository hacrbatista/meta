<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'abelha_id',
    ];
    public $timestamps = false;

    public function meses()
    {
        return $this->belongsToMany(Mes::class, 'meses_plantas');
    }

    public function scopeFiltro($plantas, $filtros = [])
    {
        if (!$filtros) {
            return $plantas;
        }

        if(isset($filtros['abelha_id'])) {
            $plantas = $plantas->where('abelha_id', $filtros['abelha_id']);
        }

        if(isset($filtros['meses'])) {
            $plantas = $plantas->with('meses')
                    ->whereHas('meses', function ($query) use ($filtros) {
                        $query->whereIn('mes_id', $filtros['meses']);
                    });
        }

        return $plantas;
    }
}
