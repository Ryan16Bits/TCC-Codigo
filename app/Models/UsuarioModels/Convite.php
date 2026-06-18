<?php
 
namespace App\Models\UsuarioModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
 
class Convite extends Model
{
    protected $table = 'convite';
    protected $primaryKey ='idConvite';

    use HasFactory;

    protected $fillable = [
        'email',
        'token',
        'expiraEm',
        'aceitoEm',
        'convidadoPor'];

    protected $casts = [
        'expiraEm' => 'datetime',
        'aceitoEm' => 'datetime'];

    public function convidador()
    {
        return $this->belongsTo(Usuario::class, 'convidadoPor');
    }

    public static function gerarToken()
    {
        return Str::random(64);
    }

    public function eValido()
    {
        return !$this->aceitoEm &&
               (!$this->expiraEm || $this->expiraEm->isFuture());
    }

    public function marcadoComoAceito()
    {
        $this->update(['aceitoEm' => now()]);
    }
}