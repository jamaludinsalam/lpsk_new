<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/css/vendor.bundle.base.css')?> ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/style.css')?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon.png')?>"/>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
   

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php $this->load->view("admin/_partials/navbar.php") ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> News </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
           
            <div class="row">
              <div class="col-12 grid-margin">
              
                <div class="card">
                  <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
                    <h4 class="card-title">Pers Release</h4>
                    <div class="add-items d-flex">                
                        <a class="add btn btn-gradient-primary font-weight-bold" href="pers_release_new">Add</a>
                    </div>
                    <div class="table-responsive">
                      <table id="example" class="table display" style=>
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Image </th>
                            <th> Title</th>
                            <th> Content </th>
                            <th> Created At </th>
                            <th> Published At </th>
                            <th> Category</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            <?php 
                            // $no = $this->uri->segment('3') + 1;
                            foreach ($newss as $news){
                            ?>
                            <tr id="<?php echo $news->id ?>">
                                <td>1</td>
                                
                                <td> <?php echo $news->image_id ?> </td>
                                
                                <td> <?php echo $news->news_title ?> </td>
                                <td> <?php echo $news->news_content ?> </td>
                                <td> <?php echo $news->news_created_at ?> </td>
                                <td> <?php echo $news->news_published_at ?> </td>
                                <td > 
                                  <?php echo $categories->category_name ?> 
                                  <input type="hidden" name="category_id" id="category_id" value="<?php echo $categories->category_name ?> ">
                                </td>
                                
                                <td> 
                                  <a href="<?php echo site_url('admin/admin_news/pers_release_edit/'.$news->id);?>" class="badge badge-warning"> Edit</a> 
                                  <a href="<?php echo site_url('admin/admin_news/pers_release_edit/delete/'.$news->id);?>" class="badge badge-danger"> Delete</a> 
                                  <button type="submit" class="badge badge-danger remove" >  Delete</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php $this->load->view("admin/_partials/footer.php") ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    
    <script>
      var timeout = 3000; // in miliseconds (3*1000)

      $('.alert').delay(timeout).fadeOut(300);
    </script>
    <script type="text/javascript">
      $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
          swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel !",
            closeOnConfirm: false,
            closeOnCancel: false
          },

        function(isConfirm) {
          if (isConfirm) {
            $.ajax({
              url: 'admin/admin_news/delete/'+id,
              type: 'post',
              error: function() {
                  alert('Something is wrong');
              },
              success: function(data) {
                    $("#"+id).remove();
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
              }
            });
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      });
    </script>

    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
    <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/admin/vendors/chart.js/Chart.min.js')?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/admin/js/off-canvas.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/hoverable-collapse.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/misc.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/admin/js/dashboard.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/todolist.js')?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>