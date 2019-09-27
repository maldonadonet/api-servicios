<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = 'asesores';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','empresa','dir_loca','telefono','email','area','created_at'];
    protected $hidden = ['updated_at','password'];
    
    public function pedidos() {
        return $this->hasMany(Pedidos::class);
    }

}
