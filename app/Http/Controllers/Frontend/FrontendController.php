<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __invoke(){
    	return view('frontend.index');
    }

    public function page($page){
    	return view('frontend.pages.'.$page);
    }
}
