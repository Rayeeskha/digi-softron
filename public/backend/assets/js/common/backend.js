// Add blog
$('.addBlog').click(function() {
  $('.text-danger').html('');
  $('.blog_id').val('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Blog');
  $('#blogModal').modal('show');
});

//Edit Blog
$(document).on('click','.editBlog',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Blog');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.blog_id').val(tr.attr('row-blog_id'));
  $('.blog_title').val(tr.attr('row-blog_title'));
  $('.meta_keyword').val(tr.attr('row-blog_meta_keyword'));
  $('.meta_description').val(tr.attr('row-blog_meta_description'));
  $('.image_show').html(tr.attr('row-blog_image'));
  $('#blogModal').modal('show');

});

// Project
$('.addProject').click(function() {
  $('.text-danger').html('');
  $('.project_id').val('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  projectType();
  $('.modal-title').html('Add Project');
  $('#projectModal').modal('show');
});

// Edit Project
$(document).on('click','.editProject',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Blog');
  let selector = $(this);
  let tr  = selector.closest('tr');
  projectType(tr.attr('row-projectype_id'));
  
  $('.project_id').val(tr.attr('row-project_id'));
  $('.project_name').val(tr.attr('row-project_name'));
  $('.description').val(tr.attr('row-description'));
  $('.url').val(tr.attr('row-url'));
  $('.image_show').html(tr.attr('row-image'));
  
  $('.modal-title').html('Edit Project');
  $('#projectModal').modal('show');
});

function projectType(typeId=''){
  $.ajax({
    type:"GET",
    url:ajax+'/admin/get-project-type',
    async : true,
    dataType : 'json',
    success: function(response){
      let projecttypesData = response.project_type;
      let option = '';
      option = '<option value="" selected="" disabled="">Select Electrician</option>';
      $.each(projecttypesData,function(index,row){
        let selected = "";
        if (typeId == row.name) {
          selected = "selected";
        }
        option += '<option value='+row.id+' '+selected+'>'+row.name+'</option>';
        $('.projectypes').html(option);
      });
    }
  });
}









 

