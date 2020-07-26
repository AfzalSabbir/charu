<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table = "settings";
	
    protected $fillable = ['title_bn', 'title_en', 'logo', 'favicon', 'email', 'mobile1', 'mobile2', 'facebook', 'twitter', 'youtube', 'linkedin', 'office', 'factory', 'footer_about', 'time_s', 'time_e', 'day_s', 'day_e'];
}