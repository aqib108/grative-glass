<?php $__env->startPush('header-scripts'); ?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/summernote/summernote-bs4.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($users); ?></h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(URL('admin/categories')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($products); ?></h3>
                <p>Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo e(URL('admin/customers')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e($orders); ?></h3>

                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo e(URL('admin/room-booking')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($categories); ?></h3>

                <p>Categories</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo e(URL('admin/room')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
      </div>
    </section>
    <!-- Main content -->

  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-scripts'); ?>
  <!-- jQuery -->
  <script src="<?php echo e(asset('assets/admin/jquery/jquery.min.js')); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo e(asset('assets/admin/jquery-ui/jquery-ui.min.js')); ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(asset('assets/admin/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- ChartJS -->
  <script src="<?php echo e(asset('assets/admin/chart.js/Chart.min.js')); ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo e(asset('assets/admin/sparklines/sparkline.js')); ?>"></script>
  <!-- JQVMap -->
  <script src="<?php echo e(asset('assets/admin/jqvmap/jquery.vmap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo e(asset('assets/admin/jquery-knob/jquery.knob.min.js')); ?>"></script>
  <!-- daterangepicker -->
  <script src="<?php echo e(asset('assets/admin/moment/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/daterangepicker/daterangepicker.js')); ?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo e(asset('assets/admin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
  <!-- Summernote -->
  <script src="<?php echo e(asset('assets/admin/summernote/summernote-bs4.min.js')); ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo e(asset('assets/admin/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('assets/admin/dist/js/adminlte.js')); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo e(asset('assets/admin/dist/js/demo.js')); ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo e(asset('assets/admin/dist/js/pages/dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/EStore/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>