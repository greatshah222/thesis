<?php

namespace App\ForumModel;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($question) {
            $question->slug = str_slug($question->title);
        });
    }

    protected $fillable = ['title','slug','body','user_id','fcategory_id'];
    protected $with = ['replies'];



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
        return "/thesis_new/public/try/question/$this->slug";

    }

}


