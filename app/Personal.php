<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = ['employee_name','employee_info','employee_fb_link','employee_twitter_link','employee_google_link','featured_employee_image','employee_twitter_link'];
}
