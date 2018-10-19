<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

	protected $fillable = ['src', 'movie_id'];

    public function movie()
    {
    	return $this->belongsTo(Movie::class);
    }
}
