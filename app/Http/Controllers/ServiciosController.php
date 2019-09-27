<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiciosController extends Controller
{
    
    public function get_services(Request $request) {
        return response()->json(['request'=>'Respuesta recibida del metodo get_services'],200);
    }

}
