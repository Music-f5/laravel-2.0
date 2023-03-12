<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash; //Contraseñas
use Illuminate\Support\Facades\Auth; //Autenticacion

class LoginController extends Controller
{
    //
    public function create() {
        
        return view('login');
    }

    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El email y/o contraseñas son icorrectos, por favor intente de nuevo.',
            ]);

        } else {

            if(auth()->user()->role == 'trainer') {
                //return redirect()->route('formador.index');
                return redirect()->intended('formador'); 
            } elseif(auth()->user()->role == 'coder') {
                //return redirect()->route('desarrollador.index');
                return redirect()->intended('desarrollador'); 

            }
        }
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }

/*

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
*/
    

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

            //return redirect()->intended('desarrollador'); 
           
            if(auth()->user()->role == 'trainer') {
                //return redirect()->route('formador.index');
                return redirect()->intended('formador'); 
            } elseif(auth()->user()->role == 'coder') {
                /* return redirect()->to('/'); */
                //return redirect()->route('desarrollador.index');
                return redirect()->intended('desarrollador'); 

            }
            

        }else{
            return redirect(route('login')); 
        }


    }

/*
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
        


    }*/
}
