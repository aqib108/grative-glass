<?php $__env->startPush('header-scripts'); ?>
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/fontawesome-free/css/all.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
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
		        <h1 class="m-0">categories</h1>
		      </div><!-- /.col -->
		      <div class="col-sm-6">
		        <ol class="breadcrumb float-sm-right">
		          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
		          <li class="breadcrumb-item active">categories</li>
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
				  <div class="col-12">
				    <div class="card">
				      <div class="card-header">
					        <h3 class="card-title">
					        	<a href="<?php echo e(URL('admin/categories/create')); ?>" class="btn btn-primary"> Add New Category </a>
					        </h3>
				      </div>
				      <div class="card-body">
				        <table id="tags-datatable" class="table table-bordered table-striped" style="width:100%">
				          <thead>
				              <tr>
				                <th>ID</th>
				                <th>Category Name</th>
								<th>Description</th>
				                <th>Status</th>
				                <th>Actions</th>
				              </tr>
				          </thead>
				          <tbody>
				          </tbody>
				          <tfoot>
				              <tr>
				                <th>ID</th>
				                <th>Category Name</th>
								<th>Description</th>
				                <th>Status</th>
				                <th>Actions</th>
				              </tr>
				          </tfoot>
				        </table>
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
	<!-- DataTables  & Plugins -->
	<script src="<?php echo e(asset('assets/admin/datatables/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/jszip/jszip.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/pdfmake/pdfmake.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/pdfmake/vfs_fonts.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset('assets/admin/dist/js/adminlte.min.js')); ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo e(asset('assets/admin/dist/js/demo.js')); ?>"></script>
	<!-- Page specific script -->
	<script>
	  $(function () {
	    $('#tags-datatable').dataTable(
      	{
      		sort: false,
			pageLength: 50,
			scrollX: true,
			processing: false,
			language: { "processing": showOverlayLoader()},
			drawCallback : function( ) {
		        hideOverlayLoader();
		    },
			responsive: true,
			// dom: 'Bfrtip',
			lengthMenu: [[5, 10, 25, 50, 100, 200, -1], [5, 10, 25, 50, 100, 200, "All"]],
			serverSide: true,
			ajax: "<?php echo e(url('admin/categories')); ?>",
			columns: [
				{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
				{data: 'name', name: 'name'},
				{data: 'description', name: 'description'},
				{data: 'status', name: 'status'},
				{data: 'action', name: 'action', orderable: false, searchable: false},
			]
	    }).on( 'length.dt', function () {
		}).on('page.dt', function () {
	    }).on( 'order.dt', function () {
		}).on( 'search.dt', function () {
		});
	  });
	  function showOverlayLoader()
	  {
	  }
	  function hideOverlayLoader()
	  {
	  }
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/EStore/resources/views/admin/categories/listing.blade.php ENDPATH**/ ?>