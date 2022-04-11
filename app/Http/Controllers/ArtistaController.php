<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
    *Regresa el listado completo de la tabla Album 
    * @return \Illuminate\Http\Response
    */
    public function show()
    {
        //
    }

    /**
    *Regresa la fila del id de la tabla Album
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function showById($id)
    {
        //
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
