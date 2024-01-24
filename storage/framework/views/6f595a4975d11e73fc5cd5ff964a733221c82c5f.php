<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <!-- <i class="far fa-bell"></i> -->
        <i class="fas fa-user-cog"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="<?php echo e(URL('admin/profile')); ?>" class="dropdown-item">
          <i class="fas fa-user-alt mr-2"></i> Profile
        </a>
        <?php if(have_right('update-settings')): ?>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(URL('admin/site-setting')); ?>" class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> Site Setting
          </a>
        <?php endif; ?>
        <div class="dropdown-divider"></div>
        <a href="<?php echo e(URL('admin/logout')); ?>" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Log Out
        </a>
      </div>
    </li>
  </ul> 
</nav>
  <!-- /.navbar --><?php /**PATH /var/www/html/Room_booking/resources/views/admin/sections/header.blade.php ENDPATH**/ ?>