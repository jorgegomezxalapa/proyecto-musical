<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;
use Illuminate\Support\Facades\DB;

class CancionController extends Controller
{
    protected $canciones;
    public function __construct(Cancion $canciones)
    {
        $this->canciones = $canciones;
    }
    /**
    *Regresa el listado completo de la tabla Album 
    * @return \Illuminate\Http\Response
    */
    public function show()
    {
        try {
            $canciones = $this->canciones->obtenerCanciones();
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
            $cancion = $this->canciones->obtenerCancionPorId($id);
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
        if(! $request->ajax()){
            return response()->json([
                'mensaje' => 'Error',
                'codigo' => 1,
            ],404);
        }else{
            //to do
            $validated = $request->validate([
                'nombre' => 'required|max:255',
                'fecha_lanzamiento' => 'required|date'
            ]);

            DB::beginTransaction();
            $cancion = new Cancion($request->all());
            $cancion->save();
            DB::commit();

        }
    }


    /**
    *Actualiza el registro en la tabla Album
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request)
    {
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
                'fecha_lanzamiento' => 'required|date'
            ]);

            DB::beginTransaction();
            $cancion = Cancion::find($request->id);
            $cancion->fill($request->all());
            $cancion->save();
            DB::commit();

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
