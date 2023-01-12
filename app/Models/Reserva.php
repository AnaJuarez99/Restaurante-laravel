<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reserva';

    protected $primaryKey = 'id';

    protected $fillable = [
           /*  'nombre',
            'apellido',
            'hora',
            'persona',
            'tel',
            'email',
            'tarjeta',
            'fecha', */

            'id_cliente',
            'id_invitado',
            'id_menu',
            'id_mesa',
            'fecha_reserva',
            'num_tarjeta',
            'num_personas',
    ];

    public function horario(){
        return $this->belongsTo(Horario::class,'fecha_reserva');
    }

    public function cliente(){
        return $this->belongsTo(User::class);
    }

    public function invitado(){
        return $this->belongsTo(Invitado::class);
    }

    public function mesa(){
        return $this->belongsTo(Mesa::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
