<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()
    {
    	return $this->belongsToMany(Tags::class);
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
