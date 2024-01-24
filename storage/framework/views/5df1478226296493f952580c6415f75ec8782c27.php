<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo e(getSettingDataHelper('title')); ?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo e(asset('images/favicon.png')); ?>">
  <!-- Style CSS -->
   <!-- Bootstrap-5 CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/bootstrap-5.min.css')); ?>" />
   <!-- owl carousel -->
   <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/owl.carousel.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/owl.theme.default.min.css')); ?>" />
   <!--font awsome-->
   <link href="<?php echo e(asset('assets/front/css/font-awesome.min.css')); ?>" rel="stylesheet" />
   <!--aos animation-->
   <link href="<?php echo e(asset('assets/front/css/aos.css')); ?>" rel="stylesheet" />
   <!-- style -->
   <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/style.css')); ?>" />

  <?php echo $__env->yieldPushContent('header-scripts'); ?>

</head>

<body>

    <div class="wrapper">
      <?php echo $__env->make('home.sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <main>
        <?php echo $__env->yieldContent('content'); ?> 
      </main>
      <?php echo $__env->make('home.sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    

    <!-- Bootstrap Bundle with Popper -->
    <script src="<?php echo e(asset('assets/front/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/bootstrap-5.min.js')); ?>"></script>
    <!--aos script-->
    <script src="<?php echo e(asset('assets/front/js/aos.js')); ?>"></script>
    <!--owl script-->
    <!-- <script src="js/popper.min.js"></script> -->
    <script src=" <?php echo e(asset('assets/front/js/script.js')); ?> "></script>
    <script src="<?php echo e(asset('assets/front/js/owl.carousel.min.js')); ?>"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js" integrity="sha512-5/OHwmQzDSBS0Ous4/hlYoWLHd06/d2r7LdKZQVBXOA6PvOqWVXtdboiLTU7lQTGyVoKVTNkwi0ol4gHGlw5ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.all.js" integrity="sha512-HKvssviZjuAw/ZSnp0DC8SK7yYGxv9SslEBTe/+kNfe97fpmx7UTNQsj5JG9NOqYGz8M/vJSiosTvr3AAKT0cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
      AOS.init();
    </script>
    <?php if(\Session::has('msg')): ?>
    <?php $message = \Session::get('msg');  ?>
    <script>
      Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Successfully perform you Action',
  showConfirmButton: false,
  timer: 2000
     })
    </script>
    <?php endif; ?>
    <script>
      $(".search-icon").click(function () {
          $(".search-wrapper").toggleClass("active");
      });
      $(".item.selected").click(function () {
          $(".font-wrapper").addClass("active");
      });
      $(".close-icon").click(function () {
          $(".font-wrapper").removeClass("active");
      });
      $("#owl-one").owlCarousel({
          autoplay: true,
          autoPlaySpeed: 2000,
          autoPlayTimeout: 2000,
          items: 1,
          dots: false,
          nav: true,
          loop: true,
          navText: ["<div class='nav-button owl-prev'><i class='fa fa-angle-left'></i></div>", "<div class='nav-button owl-next'><i class='fa fa-angle-right'></i></div>"],
      });
      $("#owl-three").owlCarousel({
          autoplay: true,
          autoPlaySpeed: 5000,
          autoPlayTimeout: 5000,
          items: 1,
          dots: true,
          nav: false,
          loop: true,
          navText: ["<div class='nav-button owl-prev'><i class='fa fa-angle-left'></i></div>", "<div class='nav-button owl-next'><i class='fa fa-angle-right'></i></div>"],
      });
      $("#owl-two").owlCarousel({
        items: 1,
        dots: true,
        loop: true,
        margin: 20,
        navText: ["<div class='nav-button owl-prev'><i class='fa fa-angle-left'></i></div>", "<div class='nav-button owl-next'><i class='fa fa-angle-right'></i></div>"],
        responsive: {
            575: {
                items: 1,
            },
            991: {
                items: 3,
            },
            1300: {
                items: 4,
            },
        },
      });
      $(document).ready(function () {
        
          $("#adropDown").click(function () {
              $(".about-drop-down").toggleClass("drop-down--active");
          });
      });
      $(document).ready(function () {
          $("#dropDown").click(function () {
              $(".drop-down").toggleClass("drop-down--active");
          });
      });
      $(document).ready(function () {
          $("#moredropDown").click(function () {
              $(".more-drop-down").toggleClass("drop-down--active");
          });
      });
      $(document).on('click', '#clickWay', function() {
      $("#donate-now-btn").click();
      });

</script>
  <?php echo $__env->yieldPushContent('footer-scripts'); ?>

</body>
</html>
<?php /**PATH /var/www/html/Room_booking/resources/views/home/layout/app.blade.php ENDPATH**/ ?>