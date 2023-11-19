<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactusRequest;
use App\Models\Blog;
use App\Models\Contactus;

class FrontendController extends Controller
{
    public function __invoke(){
    	return view('frontend.index');
    }

    public function page($page){
    	$data = [];
    	if ($page == 'blogs') {
    		$data = Blog::latest()->wherestatus(1)->paginate(6);
    	}
        return view('frontend.pages.'.$page, compact('data'));
    }

    public function blogDetail($url){
        $blog = Blog::whereurl($url)->first();
        return view('frontend.blog.blog_detail', compact('blog'));
    }

    public function contactUs(ContactusRequest $request)
    {
        $input = $request->validated();
        try {
            Contactus::create($request->all());
            
            return response()->json(['success' => true,'message' => 'Message Sent Successfully !','url'=>''],200);
            
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }    
    }
}
