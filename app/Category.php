<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the posts of the category.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
