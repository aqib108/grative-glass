<header>
		<!-- Header desktop -->
    <?php echo $__env->make('store.header.partial.desktop_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end of desktop header -->
		<!-- Header Mobile -->
    <?php echo $__env->make('store.header.partial.mobile_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end of mobile header-->
		<!-- Menu Mobile -->
    <?php echo $__env->make('store.header.partial.mobile_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end of mobile menu-->
		<!-- Modal Search -->
    <?php echo $__env->make('store.header.partial.modal_search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end of modal search -->
	</header><?php /**PATH /var/www/html/EStore/resources/views/store/header/header.blade.php ENDPATH**/ ?>