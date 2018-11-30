<?php

namespace App\ForumModel;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    public function user()
    {
        return $†his->belongsTo(User::class);

    }
    public function replies()
    {
        return $†his->hasMany(Reply::class);
    }

    public function fcategory()
    {
        return $†his->belongsTo(Fcategory::class);
    }
    
}
