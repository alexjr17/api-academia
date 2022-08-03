<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $fillable = ['calificacion', 'curso_id', 'estudainte_id'];
    static $rules = [
        'calificacion' => 'required', 
        'curso_id' => 'required', 
        'estudainte_id' => 'required'
    ];
    public function estdiante() {
        return $this->belongsTo(Estudainte::class);
    }
    public function curso() {
        return $this->belongsTo(Curso::class);
    }
}
