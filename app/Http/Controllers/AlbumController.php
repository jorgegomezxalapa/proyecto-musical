<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    protected $albumes;
    public function __construct(Album $albumes)
    {
        $this->albumes = $albumes;
    }
   
    /**
    *Regresa el listado completo de la tabla Album 
    * @return \Illuminate\Http\Response
    */
    public function show()
    {
        try {
            $albumes = $this->albumes->obtenerAlbumes();
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
            $album = $this->albumes->obtenerAlbumPorId($id);
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
                'fecha_publicacion' => 'required|date',
                'genero' => 'required|max:255'
            ]);

            DB::beginTransaction();
            $album = new Album($request->all());
            $album->save();
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
                'fecha_publicacion' => 'required|date',
                'genero' => 'required\max:255'
            ]);

            DB::beginTransaction();
            $album = Album::find($request->id);
            $album->fill($request->all());
            $album->save();
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
