<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bebida extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'project_image',
        'descripcion',
        'precio',
        'categoria'
        
    ];


    public static function search($keyword)
    {
        return $query = Bebida::where('title', 'like', "%$keyword%")
        ->orWhere('categoria', 'like', "%$keyword%")
        ->orWhere('descripcion', 'like', "%$keyword%")
        ->orWhere('precio', 'like', "%$keyword%")
        ->orWhere('created_at', 'like', "%$keyword%");
    }
}
