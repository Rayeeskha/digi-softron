<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\Contact\ContactusRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
	protected $contactusRepository;

	public function __construct(ContactusRepository $contactusRepository) {
        $this->contactusRepository = $contactusRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->contactusRepository->getData();
        }
    	return view('backend.contact_us.index');
    }
}
