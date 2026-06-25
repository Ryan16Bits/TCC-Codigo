<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeituraSensor extends Model
{
    protected $table = 'leitura_sensores'; // confirme o nome exato no banco
    protected $primaryKey = 'idLeitura';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false; // defina true só se a tabela tiver created_at/updated_at

    protected $fillable = [
        'idDispositivo',
        'acelX', 'acelY', 'acelZ',
        'giroX', 'giroY', 'giroZ',
        'magnitudeAcel',
        'detectadoEm',
    ];
}



