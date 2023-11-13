<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Khan Rayees</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Create Blog</a></li>
                    <li class="breadcrumb-item active">Khan Rayees</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
      <div class="col-lg-12">
         <div class="card form-steps">
            <div class="card-header">
               <h5 class="card-title mb-0">Blog</h5>
            </div>
            <div class="card-body">
            	<form>
            		<div class="row">
	                	<div class="col-md-12">
	                		<label>Title</label>
	                		<input type="text" name="title" class="form-control">

	                		<span class="text-dange Errtitle"></span>
	                	</div>
	                	<div class="col-md-12">
	                		<label>Meta keyword</label>
	                		<textarea name="meta_keyword" class="form-control"></textarea>

	                		<span class="text-dange Errmeta_keyword"></span>
	                	</div>
	                	<div class="col-md-12">
	                		<label>Meta Description</label>
	                		<textarea name="meta_description" class="form-control"></textarea>

	                		<span class="text-dange Errmeta_description"></span>
	                	</div>
	                </div>
	                <div class="d-flex align-items-start gap-3 mt-4">
	                	<a href="{{ route('admin.blog.index') }}" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</a>
	                    
	                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
	                </div>
            	</form>                
            </div>
         </div>
      </div>
    </div>

</x-admin-layout>	