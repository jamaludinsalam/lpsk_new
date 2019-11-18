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
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
                    <h4 class="card-title">Add New </h4>
                    <p class="card-description"> Post Pers Release </p>
                    <form class="forms-sample" action="<?php echo site_url('admin/admin_news/warta_post');?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <!-- <label for="news_type_id">Title</label> -->
                        <input type="hidden" name="news_type_id" value="2" class="form-control " id="news_type_id" placeholder="typeId">
                        
                      </div>
                      <div class="form-group">
                        <label for="news_title">Title</label>
                        <input type="text" name="news_title" class="form-control <?php echo form_error('news_title') ? 'is-invalid':'' ?>" id="news_title" placeholder="Title">
                        <div class="invalid-feedback">
                          <?php echo form_error('news_title') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="news_content">Content</label>
                        <input type="text" name="news_content" class="form-control <?php echo form_error('news_content') ? 'is-invalid':'' ?>" id="news_content" placeholder="Content">
                        <div class="invalid-feedback">
                          <?php echo form_error('news_content') ?>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="written_by">Written By</label>
                        <input type="text" name="written_by" class="form-control <?php echo form_error('written_by') ? 'is-invalid':'' ?>" id="written_by" placeholder="Written By">
                        <div class="invalid-feedback">
                          <?php echo form_error('written_by') ?>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="news_media" id="news_media" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" name="news_media" id="news_media"   placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                        <div class="invalid-feedback">
                          <?php echo form_error('news_media') ?>
                        </div>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
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