<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
  <title>Sales Feild Service</title>
  <?php echo $__env->yieldPushContent('header-scripts'); ?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css/custom.css')); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo e(asset('assets/admin/dist/img/AdminLTELogo.png')); ?>" alt="HNI CRM" height="60" width="60">
    </div>

    <?php echo $__env->make('admin.sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sections.left-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('admin.sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    <?php echo $__env->make('admin.sections.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
  </div>

  <?php echo $__env->yieldPushContent('footer-scripts'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    <?php if(Session::has('message')): ?>
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.success("<?php echo e(session('message')); ?>");
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.error("<?php echo e(session('error')); ?>");
    <?php endif; ?>

    <?php if(Session::has('info')): ?>
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.info("<?php echo e(session('info')); ?>");
    <?php endif; ?>

    <?php if(Session::has('warning')): ?>
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.warning("<?php echo e(session('warning')); ?>");
    <?php endif; ?>
  </script>
</body>
</html>
<?php /**PATH /var/www/html/Room_booking/resources/views/admin/layout/app.blade.php ENDPATH**/ ?>