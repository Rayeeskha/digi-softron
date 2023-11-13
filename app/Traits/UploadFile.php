<?php 
namespace App\Traits;
use DB;
use File;
use Auth;

trait UploadFile{
	public function uploadImage($fileName, $fileDirectory, $tablename= '', $args = '', $imageColumnName=''){
	   	if (empty($fileName) && empty($fileDirectory)) {
    		return false;
    	}
    	
    	if (!empty($args)) {
    		$table = DB::table($tablename)->where($args)->first();
    		if(!empty($table->$imageColumnName)){
                if (session()->get('UPLOADED_IMAGE_SESSION_ID') !=  $args) {
                    if (file_exists($table->$imageColumnName)){
                        @unlink($table->$imageColumnName);
                    }
                }
            }
    	}
    	$file_name = 'image_'.time().'_'.rand(1,100).'.'.$fileName->getClientOriginalExtension();

        $destinationPath = public_path($fileDirectory);
        if (! File::exists($destinationPath)){
            File::makeDirectory( $destinationPath );
        }
        $image_name = "$fileDirectory/".$file_name;
        $fileName->move( $destinationPath, $file_name );
       
        return $image_name;
	}
}