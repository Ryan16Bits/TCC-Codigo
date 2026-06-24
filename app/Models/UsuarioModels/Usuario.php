<?php
 
namespace App\Models\UsuarioModels;

use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $fillable = [
        'nome',
        'email',
        'telefone', 
        'senha',
        'dataNascimento'];


    public function getAuthPassword()
    {
        return $this->senha;
    }
}
 