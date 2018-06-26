<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Page extends \TCG\Voyager\Models\Page
{

    public function scopeOnSlug($query, $slug)
    {
        return $query->where('slug', '=', $slug);
    }

}