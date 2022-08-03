<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'f_incio', 'f_fin', 'descripcion', 'profesor_id'];
    static $rules = [
        'nombre' => 'required',
        'f_incio' => 'required',
        'f_fin' => 'required',
        'descripcion' => 'required',
        'profesor_id' => 'required'
    ];
    public function estudiante() {
        return $this->belongsToMany(Estudainte::class);
    }
    public function notas() {
        return $this->hasMany(Nota::class);
    }
}
