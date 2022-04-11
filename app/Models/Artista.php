<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;
    protected $table = 'artistas';
    protected $fillable =[
        'id',
        'nombre',
        'fecha_formacion',
        'genero',
        'origen',
        'created_at',
        'updated_at'
    ];

    public function obtenerArtistas(){
        return Artista::all();
    }

    public function obtenerArtistaPorId($id){
        return Artista::all($id);
    }
}
