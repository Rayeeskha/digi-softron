<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Str;
use DataTables;
use Auth;
class BlogController extends Controller
{
    public function index(Request $request){
    	if ($request->ajax()) {
            $data = Blog::select('id','title','url','meta_keyword','meta_description','status','image','created_at',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="edit btn btn-info btn-sm editBlog"><span class=" bx bx-edit text-white"></span></a>'; 

                    $btn .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="delete btn btn-danger btn-sm deleteDataTableRow"><span class=" bx bx-trash text-white"></span></a>'; 

                    return $btn; 
                })->editColumn('meta_keyword', function($row){
                    return Str::limit($row->meta_keyword, 20);

                })->editColumn('meta_description', function($row){
                    return Str::limit($row->meta_description, 30);

                })->editColumn('created_at', function($row){
                    return date('d M Y',strtotime($row->created_at));

                })->editColumn('image', function($row){
                    return '<img src="'.asset($row->image).'" style="border-radius:50%; height:50px; width:50px" />';
                })->editColumn('status', function($row){
                    $active = $row->status == '1' ? "checked" : '';
                    $x = ($active) ? " switch3-checked " : " ";
                    return '<div class="form-check form-switch form-switch-right form-switch-md">
                        <label for="rounded-button" class="form-label text-muted '.$x.' "></label>
                        <input class="form-check-input code-switcher status_change_datatable" type="checkbox" id="rounded-button" '.$active.'>
                    </div>';    
                })->rawColumns(['status','image', 'action'])->make(true);
        }
    	return view('backend.blog.index');
    }


    public function store(BlogRequest $request){
        $input = $request->validated();
        try {
            $id = $request->id;

            if ($request->hasfile('image')) {
                $input['image'] = $this->uploadImage($request->file('image'), 'uploads/images/blogs', 'blog', ['id' => $id ], 'image');                
            }

            Blog::updateOrCreate(['id' => $id], $input);

            $message = $id > 0 ? 'Updated Sucessfully' : 'Added Successfully';            
            return response()->json(['success' => true,'message' => $message,'url'=>''],200);
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }        
    }



}
