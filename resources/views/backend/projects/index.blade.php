<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Khan Rayees</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
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
                     <h5 class="card-title mb-0">Project List</h5>
                  </div>  
                  <div class="col-md-6"></div>                
                  <div class="col-md-3">
                    <a href="javascript:void(0)" class="btn btn-primary btn-animation waves-effect waves-light float-left addProject">Add Project
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
                           <th data-ordering="false">Project type</th>
                           <th data-ordering="false">Project Name</th>
                           <th data-ordering="false">Description</th>
                           <th data-ordering="false">Image</th>
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



<div class="modal fade zoomIn" id="projectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="project_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <label>Project Type</label>
                  <select name="projectype_id" class="form-control projectypes">
                    <option value="1">Select one</option>
                  </select>
                  <span class="text-danger Errprojectype_id"></span>
                </div>
                <div class="col-md-12">
                  <label>Title</label>
                  <input type="text" name="project_name" class="form-control project_name">

                  <span class="text-danger Errproject_name"></span>
                </div>
                <div class="col-md-12">
                  <label>URL</label>
                  <input type="text" name="url" class="form-control url">
                  <span class="text-danger Errurl"></span>
                </div>
                <div class="col-md-12">
                  <label>Description</label>
                  <textarea name="description" class="form-control description"></textarea>

                  <span class="text-danger Errdescription"></span>
                </div>
                <div class="col-md-12">
                  <label>Project Image</label>
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
          "url": "{{ route('admin.project.index') }}",
          data: function (d) {
            d.project_type = $('#project_type_id').val()
          }
        },
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'projectype_id', name: 'projectype_id'},
         {data: 'project_name', name: 'project_name'},
         {data: 'description', name: 'description'},
         {data: 'image', name: 'image'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-projects');
        $(row).attr('row-project_id',data.id);
        $(row).attr('row-projectype_id',data.projectype_id);
        $(row).attr('row-project_name',data.project_name);
        $(row).attr('row-url',data.url);
        $(row).attr('row-description',data.description);
        $(row).attr('row-image',data.image);
      }
    });
    $('#project_type_id').change(function(){
      table.draw();
    });
  });
</script>