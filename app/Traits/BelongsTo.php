<?php 
namespace App\Traits;
use DB;
use File;
use Auth;

trait BelongsTo{
	
	public function projectType(){
		return $this->belongsTo('App\Models\Projectype', 'projectype_id', 'id');
	}
}