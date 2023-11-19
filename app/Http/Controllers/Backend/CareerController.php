<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\Career\CareerRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
	protected $careerRepository;

	public function __construct(CareerRepository $careerRepository) {
        $this->careerRepository = $careerRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->careerRepository->getData();
        }
        return view('backend.carrers.index');
    }
}
