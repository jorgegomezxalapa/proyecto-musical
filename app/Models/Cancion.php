<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;
    protected $table = 'canciones';
    protected $fillable =[
        'id',
        'nombre',
        'fecha_lanzamiento',
        'created_at',
        'updated_at'
    ];

    public function obtenerCanciones(){
        return Cancion::all();
    }

    public function obtenerCancionPorId($id){
        return Cancion::find($id);
    }
}
