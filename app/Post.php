<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends \TCG\Voyager\Models\Post
{
    public function scopeFeatured()
    {
        return $this->where('featured', '1')->first();
    }

    public function scopeIndex()
    {
        return $this->where('featured', '<>', '1')->paginate(3);
    }

    public function scopeLatest()
    {
        return $this->orderBy('created_at','desc');
    }

    public function scopeOnSlug($query, $slug)
    {
        return $query->where('slug', '=' , $slug);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    // const PUBLISHED = 'PUBLISHED';

    // public function getFullNameAttribute()
    // {
    //     return "tes";
    // }

    // /**
    //  * Scope a query to only published scopes.
    //  *
    //  * @param \Illuminate\Database\Eloquent\Builder $query
    //  *
    //  * @return \Illuminate\Database\Eloquent\Builder
    //  */
    // public function scopePublished($query)
    // {
    //     return $query->where('status', '=', static::PUBLISHED);
    // }

    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasOne
    //  */
    // public function category()
    // {
    //     return $this->belongsTo(Voyager::modelClass('Category'));
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany('App\Tag');
    // }

}
