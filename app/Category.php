<?php

namespace App;

class Category extends \TCG\Voyager\Models\Category
{
    public function scopeOnSlug($query, $slug)
    {
        $query->where('slug', $slug);
    }
}
