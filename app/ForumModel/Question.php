<?php

namespace App\ForumModel;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected $fillable = ['title','slug','body','user_id','category_id'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class)->latest();
    }

    public function fcategory()
    {
        return $this->belongsTo(Fcategory::class);
    }
    public function getPathAttribute()
    {
        return "/question/$this->slug";
    }
}


