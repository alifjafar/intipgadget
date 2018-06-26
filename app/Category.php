<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{
    public function scopeOnSlug($query, $slug)
    {
        $query->where('slug', $slug);
    }
}
