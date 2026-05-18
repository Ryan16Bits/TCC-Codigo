<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Idoso extends Model
{
    // Campos que podem ser salvos no banco
    protected $fillable = ['email', 'senha'];
}
 