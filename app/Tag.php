<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function scopeOnSlug($query, $slug)
    {
        $query->where('slug', $slug);
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
