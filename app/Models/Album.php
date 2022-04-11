<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albumes';
    protected $fillable =[
        'id',
        'nombre',
        'fecha_publicacion',
        'genero',
        'created_at',
        'updated_at'
    ];

    public function obtenerAlbumes(){
        return Album::all();
    }

    public function obtenerAlbumPorId($id){
        return Album::find($id);
    }
}
