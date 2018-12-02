<?php

namespace App\ForumModel;

use Illuminate\Database\Eloquent\Model;

class Fcategory extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
