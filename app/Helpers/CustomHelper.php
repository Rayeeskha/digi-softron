<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use App\Models\Projectype;
use App\Models\Project;
use DB;
use Auth;

class CustomHelper{
	static function getProjectType(){
		return Projectype::with('projects')->wherestatus(1)->get();
	}

	static function getRecentProject(){
		return Project::with('projectType:id,name')->latest()->wherestatus(1)->limit(6)->get();
	}
}