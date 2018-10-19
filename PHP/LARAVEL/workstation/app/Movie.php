<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = ['title', 'awards', 'rating', 'release_date', 'length', 'genre_id'];

    protected $dates = ['release_date'];

    public function genre()
    {
    	//return $this->belongsTo(Genre::class, 'foreing_key', 'id');
    	return $this->belongsTo(Genre::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function actors()
    {
    	//return $this->belongsToMany(Actor::class, 'tabla_de_relacion', 'foreing_key', 'id');
    	return $this->belongsToMany(Actor::class);
    }
}
