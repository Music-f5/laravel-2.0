<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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
        $datosUsuario = request()-> except('_token');
        return response()-> json($datosUsuario);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
