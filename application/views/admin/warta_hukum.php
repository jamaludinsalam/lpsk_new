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
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/style.css')?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon.png')?>"/>
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
                    <h4 class="card-title">Warta Hukum</h4>
                    <div class="add-items d-flex">                
                        <a class="add btn btn-gradient-primary font-weight-bold" href="warta_hukum_new">Add</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Image </th>
                            <th> Title</th>
                            <th> Content </th>
                            <th> Created Date </th>
                            <th> Written By </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($newss as $news){ ?>
                            <tr>
                                <td>1</td>
                                <td>
                                <img src="<?php echo base_url('assets/admin/images/faces/face1.jpg') ?>" class="mr-2" alt="image"> 
                                </td>
                                <td> <?php echo $news->news_title ?> </td>
                                <td> <?php echo $news->news_content ?> </td>
                                <td> <?php echo $news->news_created_date ?> </td>
                                <td> <?php echo $news->written_by ?> </td>
                                <td> 
                                  <a href="" class="badge badge-warning"> Edit</a> 
                                  <a href="" class="badge badge-danger"> Delete</a> 
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