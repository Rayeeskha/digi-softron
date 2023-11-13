<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "blog";

    protected $guarded = [];

    protected function setTitleAttribute($value){
    	$this->attributes['title'] = $value;
		$this->attributes['url'] = Str::slug($value);	    
	}
    

}
