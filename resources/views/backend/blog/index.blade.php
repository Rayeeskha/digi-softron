<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Khan Rayees</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                    <li class="breadcrumb-item active">Khan Rayees</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<!-- Blog table -->
<div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-md-3">
                     <h5 class="card-title mb-0">Blog List</h5>
                  </div>  
                  <div class="col-md-6"></div>                
                  <div class="col-md-3">
                    <a href="javascript:void(0)" class="btn btn-primary btn-animation waves-effect waves-light float-left addBlog">Add Blog
                    </a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th data-ordering="false">Image</th>
                           <th data-ordering="false">Title</th>
                           <th data-ordering="false">URL</th>
                           <th data-ordering="false">Meta keyword</th>
                           <th data-ordering="false">Description</th>
                           <th>Status</th>
                           <th>created at</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody></tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!--end col-->
   </div>

<!-- Blog Modal -->

<div class="modal fade zoomIn" id="blogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="blog_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control blog_title">

                  <span class="text-danger Errtitle"></span>
                </div>
                <div class="col-md-12">
                  <label>Meta keyword</label>
                  <textarea name="meta_keyword" class="form-control meta_keyword"></textarea>

                  <span class="text-danger Errmeta_keyword"></span>
                </div>
                <div class="col-md-12">
                  <label>Meta Description</label>
                  <textarea name="meta_description" class="form-control meta_description"></textarea>

                  <span class="text-danger Errmeta_description"></span>
                </div>

                <div class="col-md-12">
                  <label>Blog Image</label>
                  <input type="file" name="image" class="form-control image">
                  <span class="text-danger Errimage"></span>
                  <div class="preview_image_div" style="display: none;">
                    <img src="" class="preview_image image_responsive" style="width: 50px;height: 50px; border-radius: 50%;">
                 </div>
                 <div class="image_show"></div>                  
                </div>
              </div>
           </div>
           <div class="modal-footer">
              <div class="hstack gap-2 justify-content-end">
                <x-backend.preloader />
                <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-success" id="add-btn"><span class=" las la-plus-circle"></span>&nbsp;Submit</button>
              </div>
           </div>
        </form>
     </div>
  </div>
</div>


</x-admin-layout>	

<script type="text/javascript">
  $(function () {
    let table = $('.yajra-datatable').DataTable({
       processing: true,
       serverSide: true,
        ajax: {
          "url": "{{ route('admin.blog.index') }}",
          data: function (d) {
            d.username = $('#username').val()
            d.sender_type = $('#sender_type').val()
          }
        },
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'image', name: 'image'},
         {data: 'title', name: 'title'},
         {data: 'url', name: 'url'},
         {data: 'meta_keyword', name: 'meta_keyword'},
         {data: 'meta_description', name: 'meta_description'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},        
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-blogs');
        $(row).attr('row-blog_id',data.id);
        $(row).attr('row-blog_title',data.title);
        $(row).attr('row-blog_meta_keyword',data.meta_keyword);
        $(row).attr('row-blog_meta_description',data.meta_description);
        $(row).attr('row-blog_image',data.image);
      }
    });
    $('#username').change(function(){
      table.draw();
    });
    $('#sender_type').change(function(){
      table.draw();
    });
  });
</script>