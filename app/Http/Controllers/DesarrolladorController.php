<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;

class DesarrolladorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['songs'] = Song::paginate(5);
        return view('desarrollador.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     */
  

    public function create()
    {
        return view('desarrollador.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        //$datosUsuario = request()-> all();
        $datosSong = request()-> except('_token');

        if(request()->hasFile('image')){
            $datosSong['image']=$request->file('image')->store('uploads','public');
        }        
        
        Song::insert($datosSong);
        return response()-> json($datosSong);
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
        $song=Song::findOrFail($id);
        return view('desarrollador.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSong = request()-> except('_token', '_method');
        Song::where('id','=',$id)->update($datosSong);

        if(request()->hasFile('image')){
            $datosSong['image']=$request->file('image')->store('uploads','public');
        }    

        $song=Song::findOrFail($id);
        return view('desarrollador.edit', compact('song'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Song::destroy($id);
        return redirect('desarrollador');

    }
}
