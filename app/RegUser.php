<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegUser extends Model
{
    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
}
