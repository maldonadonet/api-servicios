<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PedidosController extends Controller
{
    
    public function create(Request $request) {
        return response()->json(['request'=>'Respuesta recibida del metodo create pedidos'],200);
    }

}
