<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Repositories\Projectrepo\ProjectReposetory;
use App\Models\Project;
use App\Models\Projectype;
use DataTables;
use Auth;
use Str;

class ProjectController extends Controller
{
	protected $projectReposetory;

	public function __construct(ProjectReposetory $projectReposetory) {
        $this->projectReposetory = $projectReposetory;
    }

    public function index(Request $request){
        if ($request->ajax()) {
            return $this->projectReposetory->getData();
        }
    	return  view('backend.projects.index');
    }

    public function store(ProjectRequest $request){
    	$input = $request->validated();
    	try {
    		$response = $this->projectReposetory->store($request->all());

    		return response()->json(['success' => true,'message' => $response,'url'=>''],200);
    		
    	}catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function getProjectType(){
        $type = Projectype::wherestatus(1)->get();
        return response()->json(['project_type' => $type]);
    }

}
