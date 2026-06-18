<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class ProximidadeLeitura extends Model
{
    protected $table = 'proximidade_leituras';
 
    protected $fillable = [
        'distancia',
        'detectado',
    ];
 
    protected $casts = [
        'detectado' => 'boolean',
    ];
}
    