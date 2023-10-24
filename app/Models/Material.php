<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto',
        'cantidad',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'producto');
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
