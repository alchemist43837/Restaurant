<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // protected $table = 'generos'; nombre de tabla
    // public $timestamps = false ; -- si no tengo created_at y/o updated_at
    // protected $dates['creado'];
    public function movies()
    {
      return $this->hasMany(Movie::class);
    }
}
