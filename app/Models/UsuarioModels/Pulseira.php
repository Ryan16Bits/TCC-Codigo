<?php
 
namespace App\Models\UsuarioModels;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Pulseira extends Authenticatable
{
    protected $table = 'pulseira';
    protected $primaryKey = 'idPulseira';

    protected $fillable = [
        'nomePulseira', 
        'codigo'];
}
 