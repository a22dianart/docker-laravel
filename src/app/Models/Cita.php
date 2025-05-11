<?php
// app/Models/Cita.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cita extends Model
{
    protected $fillable = [
        'cliente_id', 'marca', 'modelo', 'matricula',
        'fecha', 'hora', 'duracion_estimada'
    ];

    // Relación con el cliente
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }
}
