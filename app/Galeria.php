<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galeria';
    protected $primaryKey = 'id';
    protected $fillable = ['id_servicio','img','created_at'];
    protected $hidden = ['updated_at'];
    
    public function servicio() {
        return $this->belongsTo(Servicio::class);
    }

}