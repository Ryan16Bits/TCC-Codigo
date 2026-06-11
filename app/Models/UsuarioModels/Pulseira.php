<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Pulseira extends Model
{
    protected $table = 'pulseira';
    // Campos que podem ser salvos no banco
    protected $fillable = [
        'nomePulseira', 
        'codigo'];
}
 