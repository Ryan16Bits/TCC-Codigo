<?php
 
namespace App\Models\UsuarioModels;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Cuidador extends Authenticatable
{
    protected $table = 'pulseira_cuidador';
    protected $primaryKey ='idCuidador';

    protected $fillable = [
        'nome', 
        'email',
        'telefone',
        'senha'];
}