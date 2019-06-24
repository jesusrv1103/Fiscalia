<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoDigital extends Model
{
    protected $table ="recursos_digitales";

    public function categoria()
    {  //$post-> category->name
        return $this->belongsTo(Categoria::class); //pertenece a 
    }
}
