<?php
 
namespace App\Models\UsuarioModels;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Idoso extends Authenticatable
{
    protected $table = 'idoso';
    protected $primaryKey = 'idIdoso';
     
    protected $fillable = [
        'nome', 
        'peso',
        'altura',
        'dataNascimento',
        'genero'];
}
 