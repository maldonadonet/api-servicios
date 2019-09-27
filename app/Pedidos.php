<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['id_servicio','id_asesor','id_cliente','fecha','observaciones','created_at'];
    protected $hidden = ['updated_at'];
    
    public function servicio() {
        return $this->hasMany(Servicios::class);
    }

    public function asesor() {
        return $this->belongsTo(Asesores::class);
    }

    public function cliente() {
        return $this->belongsTo(User::class);
    }

}