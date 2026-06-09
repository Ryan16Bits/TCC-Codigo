<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Cuidador extends Model
{
    protected $table = 'pulseira_cuidador';

    protected $fillable = [
        'nome', 
        'email',
        'telefone',
        'senha'];
}
