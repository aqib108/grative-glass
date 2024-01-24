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
                    <h1 class="m-0">Create Room Booking</h1>
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
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Booking Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="department-form" action="<?php echo e(URL('admin/room-booking')); ?>" enctype="multipart/form-data" method="POST">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="action" value="<?php echo e($action); ?>">
                                <input type="hidden" name="id" value="<?php echo e(isset($id) ? $id : ''); ?>">
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Room No</label>
                                    <div class="col-sm-6">
                                        <select name="room_id" class="form-control">
                                        <option>Choose Room No</option>
                                        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($room->id); ?>" <?php echo e($room->id==$row?->room_id?'selected':''); ?>><?php echo e($room->room_number); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Customer No</label>
                                    <div class="col-sm-6">
                                        <select name="customer_id" class="form-control">
                                        <option>Choose Customer No</option>
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($customer->id); ?>" <?php echo e($customer->id==$row?->customer_id?'selected':''); ?>><?php echo e($customer->customer_no); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Booking Start Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control"  name="start_date" value="<?php echo e(isset($row->start_date) ? $row->start_date : ''); ?>">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Booking End Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="end_date" value="<?php echo e(isset($row->end_date) ? $row->end_date : ''); ?>">
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <div class="col-sm-12">
                                        <a href="<?php echo e(URL('admin/room-booking')); ?>" class="btn btn-info mr-2"> Cancel </a>
                                        <button type="submit" class="btn btn-primary float-right"> <?php echo e(($action=='add') ? 'Save' : 'Update'); ?> </button>
                                    </div>
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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Room_booking/resources/views/admin/roombooking/form.blade.php ENDPATH**/ ?>