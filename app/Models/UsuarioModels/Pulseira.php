<?php
 
namespace App\Models\UsuarioModels;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Pulseira extends Authenticatable
{
    protected $table = 'dispositivos';
    protected $primaryKey = 'idDispositivo';

    protected $fillable = [
        'nome', 
        'codigo'];
}
 