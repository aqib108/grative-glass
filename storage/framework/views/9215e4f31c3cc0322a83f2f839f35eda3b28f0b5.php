<?php $__env->startPush('header-scripts'); ?>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/fontawesome-free/css/all.min.css')); ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/dist/css/adminlte.min.css')); ?>">
<!-- SummerNote -->
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
                    <h1 class="m-0">Booking Invoice</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(URL('admin/room-booking')); ?>">Rooms Booking</a></li>
                        <li class="breadcrumb-item active">Create  Booking</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="container">
  <div class="card">
<div class="card-header">
Invoice :
<strong><?php echo e(date('Y-m-d')); ?></strong> 
  <span class="float-right"> <strong>Status:</strong> Complete</span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">From:</h6>
<div>
<strong>Booking NO</strong>
</div>
<div>Customer Name</div>
<div>Mobile No</div>
<div>Addres</div>
<div>National Id</div>
</div>

<div class="col-sm-6">
<h6 class="mb-3">To:</h6>
<div>
<strong><?php echo e($invoice?->booking_no); ?></strong>
</div>
<div><?php echo e($invoice?->name); ?></div>
<div><?php echo e($invoice?->mobile_no); ?></div>
<div><?php echo e($invoice?->address); ?></div>
<div><?php echo e($invoice?->nid); ?></div>
</div>



</div>
<?php
$start_date = new DateTime($invoice?->start_date);
$end_date = new DateTime($invoice?->end_date);
$interval = $start_date->diff($end_date);
$days = $interval->days;
$total_price = (float)$invoice?->price*$days;
?>
<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>
<th class="center">#</th>
<th>Room No</th>
<th>Customer No</th>
<th class="right">Per Night</th>
<th class="center">start Date</th>
<th class="right">End Date</th>
</tr>
</thead>
<tbody>
<tr>
<td class="center">1</td>
<td class="left strong"><?php echo e($invoice?->room_number); ?></td>
<td class="left"><?php echo e($invoice?->customer_number); ?></td>

<td class="right"><?php echo e(number_format((float)$invoice?->price, 2)); ?></td>
  <td class="center"><?php echo e($invoice?->start_date); ?></td>
<td class="right"><?php echo e($invoice?->start_date); ?></td>
</tr>
</tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>
<tr>
<td class="left">
<strong>Per Night</strong>
</td>
<td class="right"><?php echo e(number_format((float)$invoice?->price, 2)); ?></td>
</tr>
<tr>
<td class="left">
<strong>Days</strong>
</td>
<td class="right"><?php echo e($days); ?></td>
</tr>
<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong><?php echo e(number_format((float)$total_price, 2)); ?></strong>
</td>
</tr>
</tbody>
</table>

</div>

</div>

</div>
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
<!-- SummerNote -->
<script src="<?php echo e(asset('assets/admin/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- Page specific script -->
<script>
    $(function() {

        $('#department-form').validate({
            rules: {}
            , errorElement: 'span'
            , errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            }
            , highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            }
            , unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    $('textarea').summernote({
        height: ($(window).height() - 300)
        , callbacks: {
            onImageUpload: function(image) {
                uploadImage(image[0]);
            }
        }
    })

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Room_booking/resources/views/admin/roombooking/booking-invoice.blade.php ENDPATH**/ ?>