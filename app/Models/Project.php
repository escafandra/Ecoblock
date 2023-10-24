<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_finalizacion',
        'cuantia',
        'materiales_id',
        'fotos_id',
        'videos_id',
    ];

    public function materiales()
    {
        return $this->hasMany(Material::class, 'materiales_id');
    }

    public function fotos()
    {
        return $this->hasMany(Foto::class, 'fotos_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'videos_id');
    }
}
