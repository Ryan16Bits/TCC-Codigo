<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class QuedaDetectada extends Model
{
    protected $table = 'quedas_detectadas'; // confirme o nome exato no banco
    protected $primaryKey = 'idQueda';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
    'idDispositivo',
    'idLeitura',
    'magnitudeAcel',
    'confianca',
    'status',
    'observacao',
    'detectadoEm',
];
}