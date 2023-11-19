<?php

namespace App\Repositories\Contact;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Contactus;
use DataTables;
use Str;
use DB;

class ContactusRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
    	return Contactus::class;
    }

    public function getData(){
        $data = Contactus::select('id','name','email','number','service','message','created_at',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
        return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function($row){
                    return date('d M Y',strtotime($row->created_at));

                })->addColumn('action', function($row){
                    return '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="delete btn btn-danger btn-md deleteDataTableRow"><span class=" bx bx-trash text-white"></span></a>'; 
				})->rawColumns(['action'])->make(true);
    }

}
