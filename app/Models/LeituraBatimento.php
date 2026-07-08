<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeituraBatimento extends Model
{
    protected $table = 'leitura_batimentos';
    protected $primaryKey = 'idBatimento';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'idDispositivo',
        'idLeitura',
        'bpm',
        'detectadoEm',
    ];

    protected $casts = [
        'bpm'         => 'float',
        'detectadoEm' => 'datetime',
    ];

    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class, 'idDispositivo', 'idDispositivo');
    }

    public function leitura()
    {
        return $this->belongsTo(LeituraSensor::class, 'idLeitura', 'idLeitura');
    }
}