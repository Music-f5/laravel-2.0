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
        //$datos['songs'] = Song::paginate(5);
        $datos['songs'] = Song::paginate();
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
        $datosSong = request()->except('_token');

        /* if(request()->hasFile('image')){
            $datosSong['image']=$request->file('image')->store('uploads','public');
        }  */ 

        //$imagen = $request->file('image');
        //$nombreImagen =time().'.'.$imagen->getClientOriginalExtension();
        //$destino = public_path('uploads');
        //$request->image->move($destino,$nombreImagen);
        //$datosSong['image']= $nombreImagen; 

        $datosSong['image']=$request->file('image')->store('uploads','public');

          
        $datosSong['idUser']= auth()->user()->id;
        $datosSong['played']= 0;
        $datosSong['date']= null;

        
        Song::insert($datosSong);
        //return response()-> json($datosSong);
        return redirect('desarrollador');
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
        if( !empty($datosSong['title']) ){
            
            Song::where('id','=',$id)->update($datosSong);

            /* if(request()->hasFile('image')){
                $datosSong['image']=$request->file('image')->store('uploads','public');
            }   */  
            $datosSong['image']=$request->file('image')->store('uploads','public');

            
        }else{

            $datosSong = [
                'date' => now(),
                'played' => 1
            ];
            
            Song::where('id','=',$id)->update($datosSong);


        }

        $song=Song::findOrFail($id);
        //return view('desarrollador.edit', compact('song'));
        return redirect('desarrollador');

    }

    public function play( $id)
    {
        //
        $datosSong = [
            'date' => now(),
            'played' => 1
        ];
        
        Song::where('id','=',$id)->update($datosSong);
        

        $song=Song::findOrFail($id);
        //return  oir cancion ;

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
