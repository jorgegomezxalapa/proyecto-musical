<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use Illuminate\Support\Facades\DB;

class ArtistaController extends Controller
{
    protected $artistas;
    public function __construct(Artista $artistas)
    {
        $this->artistas = $artistas;
    }
        /**
    *Regresa el listado completo de la tabla Album 
    * @return \Illuminate\Http\Response
    */
    public function show()
    {
        try {
            $artistas = $this->artistas->obtenerArtistas();
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    /**
    *Regresa la fila del id de la tabla Album
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function showById($id)
    {
        try {
            $artista = $this->artistas->obtenerArtistaPorId($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
    *Almacena una nueva fila en la tabla Album
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        try {
            if(! $request->ajax()){
                return response()->json([
                    'mensaje' => 'Error',
                    'codigo' => 1,
                ],404);
            }else{
                //to do
                $validated = $request->validate([
                    'nombre' => 'required|max:255',
                    'fecha_formacion' => 'required|date',
                    'genero' => 'required\max:255',
                    'origen' => 'required|max:255',
                ]);
                DB::beginTransaction();
                $artista = new Artista($request->all());
                $artista->save();
                DB::commit();
                //return
    
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            //throw $th;
        }
    }


    /**
    *Actualiza el registro en la tabla Album
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request)
    {
        try {
            if(! $request->ajax()){
                return response()->json([
                    'mensaje' => 'Error',
                    'codigo' => 1,
                ],404);
            }else{
                //to do
                $validated = $request->validate([
                    'id' => 'required',
                    'nombre' => 'required|max:255',
                    'fecha_formacion' => 'required|date',
                    'genero' => 'required|max:255',
                    'origen' => 'required|max:255',
                ]);
                DB::beginTransaction();
                $artista = Artista::find($request->id);
                $artista->fill($request->all());
                $artista->save();
                DB::commit();
    
    
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            //throw $th;
        }
    }

    /**
    * Elimina el registro de la tabla Album
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function delete($id)
    {
        //
    }
}
