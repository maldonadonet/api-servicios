<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Pedidos extends Model
{
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pedido','estatus','lat','lng','created_at'];
    protected $hidden = ['updated_at'];
    
    public function pedido() {
        return $this->belongsTo(Pedidos::class);
    }

}
