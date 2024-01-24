<?php $__env->startPush('header-scripts'); ?>
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/fontawesome-free/css/all.min.css')); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/dist/css/adminlte.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Site Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo e(URL('admin/site-setting')); ?>">Site Setting</a></li>
              <li class="breadcrumb-item active">Update Site Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Setting Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form id="user-form" action="<?php echo e(URL('admin/site-setting')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>


                    <div class="accordion" id="accordionExample">
                      <div class="card">

                        <!-- For Logo -->
                      <div class="card-header" id="title-heading">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#image" aria-expanded="true" aria-controls="image">
                            Logo
                          </button>
                        </h2>
                      </div>

                      <div id="image" class="collapse" aria-labelledby="message-title-heading" data-parent="#accordionExample">
                        <div class="card-body">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Logo *</label>
                            <div class="col-sm-6">
                              <input type="file"  class="form-control" placeholder="Select Logo" id="imageinpt" name="logo" value="" >
                            </div>
                            
                          </div>

                        </div>
                      </div>
                       <!-- For Video -->
                        <div class="card-header" id="title-heading">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#video" aria-expanded="true" aria-controls="video">
                            Video
                          </button>
                        </h2>
                      </div> 

                      <div id="video" class="collapse" aria-labelledby="message-title-heading" data-parent="#accordionExample">
                        <div class="card-body">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Visit video *</label>
                            <div class="col-sm-6">
                              <input type="file"  class="form-control" placeholder="Select video" id="videoinpt" name="video" accept="video/mp4,video/x-m4v,video/*"  value="" onchange="Filevalidation()">
                            </div>
                          </div>

                        </div>
                      </div> 
                        <!-- For  title   -->
                          <div class="card-header" id="title-heading">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#title" aria-expanded="true" aria-controls="title">
                                Title
                              </button>
                            </h2>
                          </div>

                          <div id="title" class="collapse" aria-labelledby="title-heading" data-parent="#accordionExample">
                              <div class="card-body">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label"> Title  *</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter First Name" name="title" value="<?php echo e(isset($settings['title']) ? $settings['title'] : ''); ?>">
                                </div>

                              </div>
                            </div>
                        </div>

                            <!-- For email  -->
                          <div class="card-header" id="title-heading">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#colemail" aria-expanded="true" aria-controls="colemail">
                                Email
                              </button>
                            </h2>
                          </div>

                          <div id="colemail" class="collapse" aria-labelledby="colemail-heading" data-parent="#accordionExample">
                              <div class="card-body">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label"> Email  *</label>
                                  <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Enter Last Name" name="email" value="<?php echo e(isset($settings['email']) ? $settings['email'] : ''); ?>">
                                </div>

                              </div>
                            </div>
                        </div>
                          <!-- For Phone  -->
                          <div class="card-header" id="title-heading">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#colphone" aria-expanded="true" aria-controls="colphone">
                                Phone
                              </button>
                            </h2>
                          </div>

                          <div id="colphone" class="collapse" aria-labelledby="colphone-heading" data-parent="#accordionExample">
                              <div class="card-body">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label"> Phone  *</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter Last Name" name="phone" data-inputmask='"mask": "(+99) 9999999999"' data-mask value="<?php echo e(isset($settings['phone']) ? $settings['phone'] : ''); ?>">
                                </div>

                              </div>
                            </div>
                        </div>

                        <!-- For  Whatsapp   -->
                        <div class="card-header" id="title-heading">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#whatsapp" aria-expanded="true" aria-controls="whatsapp" >
                              Whatsapp
                            </button>
                          </h2>
                        </div>

                        <div id="whatsapp" class="collapse" aria-labelledby="whatsapp-heading" data-parent="#accordionExample">
                            <div class="card-body">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Whatsapp  *</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="Enter First Name" name="whatsapp" data-inputmask='"mask": "(+99) 9999999999"' data-mask value="<?php echo e(isset($settings['whatsapp']) ? $settings['whatsapp'] : ''); ?>">
                              </div>

                            </div>
                          </div>
                      </div>

                       <!-- For  Address   -->
                    <div class="card-header" id="title-heading">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#address" aria-expanded="true" aria-controls="address">
                          About Us
                        </button>
                      </h2>
                    </div>

                    <div id="address" class="collapse" aria-labelledby="address-heading" data-parent="#accordionExample">
                      <div class="card-body">

                          <div class="row" >
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>About us in English</label>
                              <input type="text" class="form-control" placeholder="About us English" name="about_en"   value="<?php echo e(isset($settings['about_en']) ? $settings['about_en'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>About us in Urdu</label>
                              <input type="text" class="form-control" placeholder="About us Urdu" name="about_ur"  value="<?php echo e(isset($settings['about_ur']) ? $settings['about_ur'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>About us in Arabic</label>
                              <input type="text" class="form-control" placeholder="About us Arabic" name="about_ar"   value="<?php echo e(isset($settings['about_ar']) ? $settings['about_ar'] : ''); ?>">
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>

                      <!-- For  Opening Time   -->
                      <div class="card-header" id="title-heading">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#colsopening" aria-expanded="true" aria-controls="colsopening">
                            Opening Time
                          </button>
                        </h2>
                      </div>

                      <div id="colsopening" class="collapse" aria-labelledby="colsopening-heading" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label"> Opening Time  *</label>
                              <div class="col-sm-6">
                                <input type="time" class="form-control" placeholder="Enter First Name" name="opening_time" value="<?php echo e(isset($settings['opening_time']) ? $settings['opening_time'] : ''); ?>">
                            </div>

                          </div>
                        </div>
                    </div>

                     <!-- For Download Links   -->
                     <div class="card-header" id="title-heading">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#download_links" aria-expanded="true" aria-controls="download_links">
                          Download Links
                        </button>
                      </h2>
                    </div>

                    <div id="download_links" class="collapse" aria-labelledby="download_links-heading" data-parent="#accordionExample">
                        <div class="card-body">
                          <div class="row" >
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>Play Store</label>
                              <input type="url" class="form-control" placeholder="Play store Link" name="play_store"   value="<?php echo e(isset($settings['play_store']) ? $settings['play_store'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>App Store</label>
                              <input type="url" class="form-control" placeholder="App store Link" name="app_store"  value="<?php echo e(isset($settings['app_store']) ? $settings['app_store'] : ''); ?>">
                              </div>
                            </div>
                          </div>

                          </div>
                      </div>
                      <!-- For Social Links   -->
                     <div class="card-header" id="title-heading">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#social_links" aria-expanded="true" aria-controls="social_links">
                          Social Links
                        </button>
                      </h2>
                    </div>

                    <div id="social_links" class="collapse" aria-labelledby="social-links-heading" data-parent="#accordionExample">
                        <div class="card-body">
                          <div class="row" >
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>FaceBook</label>
                              <input type="url" class="form-control" placeholder="facebook" name="facebook"   value="<?php echo e(isset($settings['facebook']) ? $settings['facebook'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>Linkedin</label>
                              <input type="url" class="form-control" placeholder="Linkedin" name="linkedin"  value="<?php echo e(isset($settings['linkedin']) ? $settings['linkedin'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>Pinterest</label>
                              <input type="url" class="form-control" placeholder="pinterest" name="pinterest"  value="<?php echo e(isset($settings['pinterest']) ? $settings['pinterest'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>Twitter</label>
                              <input type="url" class="form-control" placeholder="twitter" name="twitter"  value="<?php echo e(isset($settings['twitter']) ? $settings['twitter'] : ''); ?>">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group ">
                              <label>Youtube</label>
                              <input type="url" class="form-control" placeholder="youtube" name="youtube"  value="<?php echo e(isset($settings['youtube']) ? $settings['youtube'] : ''); ?>">
                              </div>
                            </div>
                          </div>

                          </div>
                      </div>

                  </div>

                      </div>
                    </div> <!-- end of accordian -->
                          <div class="d-flex justify-content-end mb-3 mr-3">
                              <a href="<?php echo e(URL('admin/dashboard')); ?>" class="btn btn-info mr-3"> Cancel </a>
                              <button type="submit" class="btn btn-primary float-right"> Update Settings </button>
                          </div>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-scripts'); ?>
  <!-- jQuery -->
  <script src="<?php echo e(asset('assets/admin/jquery/jquery.min.js')); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(asset('assets/admin/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- jquery-validation -->
  <script src="<?php echo e(asset('assets/admin/jquery-validation/jquery.validate.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/jquery-validation/additional-methods.min.js')); ?>"></script>
  <!-- InputMask -->
  <script src="<?php echo e(asset('assets/admin/moment/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/inputmask/jquery.inputmask.min.js')); ?>"></script>
  <!-- bs-custom-file-input -->
  <script src="<?php echo e(asset('assets/admin/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('assets/admin/dist/js/adminlte.min.js')); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo e(asset('assets/admin/dist/js/demo.js')); ?>"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $('[data-mask]').inputmask();
      bsCustomFileInput.init();
      $('#user-form').validate({
        rules:
        {
          title: {
            required: true,
          },
          email: {
            required: true,
          },
          phone:{
            required: true,
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
    Filevalidation = () => {
        const fi = document.getElementById('videoinpt');
        // Check if any file is selected.
        if (fi.files.length > 0) {
                const fsize = fi.files.item(0).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 8192) {
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select a file less than 8mb',
                    })
                    fi.value='';
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
        }
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Room_booking/resources/views/admin/settings.blade.php ENDPATH**/ ?>