<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Digi Softron Technology</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Digi Softron Technology</li>
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
                     <h5 class="card-title mb-0">Contact us List</h5>
                  </div>  
                  <div class="col-md-6"></div>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th data-ordering="false">Name</th>
                           <th data-ordering="false">Email</th>
                           <th data-ordering="false">Number</th>
                           <th data-ordering="false">Service</th>
                           <th data-ordering="false">Message</th>
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



</x-admin-layout>	

<script type="text/javascript">
  $(function () {
    let table = $('.yajra-datatable').DataTable({
       processing: true,
       serverSide: true,
        ajax: {
          "url": "{{ route('admin.contact-us.index') }}",
        },
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'name', name: 'name'},
         {data: 'email', name: 'email'},
         {data: 'number', name: 'number'},
         {data: 'service', name: 'service'},
         {data: 'message', name: 'message'},
         {data: 'created_at', name: 'created_at'},
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-contactuses');
      }
    });
  });
</script>