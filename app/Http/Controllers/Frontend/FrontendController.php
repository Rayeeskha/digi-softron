<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

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
}
