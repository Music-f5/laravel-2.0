<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //Contraseñas

class FormadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['usuarios'] = User::paginate(5);
        return view('formador.index', $datos);
        // return(view('insertSong'));

    }

    /**
     * Show the form for creating a new resource.
     */
  

    public function create()
    {
        return view('formador.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        //$datosUsuario = request()-> all();
        // $datosUsuario = request()-> except('_token');

        // User::insert($datosUsuario);
        // return response()-> json($datosUsuario);
        //Validar los datos
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();
        
        return redirect(route('desarrollador'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $usuario=User::findOrFail($id);
        return view('formador.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()-> except('_token', '_method');
        $datosUsuario['password'] = Hash::make($request->password);
        User::where('id','=',$id)->update($datosUsuario);
        $usuario=User::findOrFail($id);
        return view('formador.edit', compact('usuario'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        User::destroy($id);
        return redirect('formador');

    }
}
