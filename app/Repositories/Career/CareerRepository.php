<?php

namespace App\Repositories\Career;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Career;
use DataTables;
use Str;
use DB;

/**
 * Class CareerRepository.
 */
class CareerRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Career::class;
    }

    public function getData(){
        $data = Career::select('id','name','email','number','resume','position','message','created_at',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
        return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function($row){
                    return date('d M Y',strtotime($row->created_at));

                })->editColumn('resume', function($row){
                    return '<a href="'.asset($row->resume).'" target="_blank">View Resume</a>';

                })->addColumn('action', function($row){
                    return '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="delete btn btn-danger btn-md deleteDataTableRow"><span class=" bx bx-trash text-white"></span></a>'; 
				})->rawColumns(['action', 'resume'])->make(true);
    }

}
