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

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true
        ];

        //$remember = ($request->has('remember') ? true : false );
        $remember = true; // para forzar a mantener la sesion porque no lo pusimos en el form del login

        if (Auth::attempt($credentials, $remember)){

            $request->session()->regenerate();

            return redirect()->intended('desarrollador'); 

        }else{
            return redirect(route('login')); 
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
        


    }
}
