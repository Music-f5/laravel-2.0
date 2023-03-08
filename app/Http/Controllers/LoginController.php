<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash; //Contraseñas
use Illuminate\Support\Facades\Auth; //Autenticacion

class LoginController extends Controller
{
    //

    public function register(Request $request)
    {
        //Validar los datos
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();
        Auth::login($user);
        return redirect(route('desarrollador'));

    }

    public function login(Request $request)
    {
        //Validar los datos
    }

    public function logout(Request $request)
    {
        //Validar los datos
    }
}
