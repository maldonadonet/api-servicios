<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function register(Request $request) {
        return response()->json(['request'=>'Respuesta recibida del metodo register'],200);
    }

    public function login(Request $request) {
        return response()->json(['request'=>'Respuesta recibida del metodo login'],200);
    }

    public function get_client() {
        return response()->json(['request'=>'Respuesta recibida del metodo getClient'],200);
    }

    public function edit_client(Request $request) {
        return response()->json(['request'=>'Respuesta recibida del metodo Edit Client'],200);
    }

}
