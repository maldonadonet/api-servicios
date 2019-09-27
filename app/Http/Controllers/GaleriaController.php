<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GaleriaController extends Controller
{
    
    public function get_galery(Request $request) {
        return response()->json(['request'=>'Respuesta recibida del metodo get_galery'],200);
    }

}
