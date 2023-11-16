<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Repositories\Team\TeamRepository;

class TeamController extends Controller
{
	protected $teamRepository;

    public function __construct(TeamRepository $teamRepository) {
        $this->teamRepository = $teamRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->teamRepository->getData();
        }
    	return  view('backend.teams.index');
    }

    public function store(TeamRequest $request){
    	$input = $request->validated();
    	try {
    		$response = $this->teamRepository->store($request->all());

    		return response()->json(['success' => true,'message' => $response,'url'=>''],200);
    		
    	}catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
