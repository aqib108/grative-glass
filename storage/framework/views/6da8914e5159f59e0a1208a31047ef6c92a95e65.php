<?php
$url_1 = Request::segment(2);
$url_2 = Request::segment(3);
$url_3 = Request::segment(4);
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-link">
        <img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php if(have_right('Access-Dashboard')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e($url_1 == 'dashboard' ? 'active':''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php endif; ?>

                <!-- menu-open -->
                <?php if(have_right('Access-Admin') || have_right('Access-User') || have_right('Access-Roles-Managment')): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'admins' || $url_1 == 'roles' || $url_1 == 'customers') ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'admins' || $url_1 == 'roles' || $url_1 == 'customers') ? 'active':''); ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            System
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <?php if(have_right('Access-Admin')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/admins')); ?>" class="nav-link <?php echo e($url_1 == 'admins' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admins</p>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(have_right('Access-User')): ?>
                        
                        <?php endif; ?>
                        
                        <?php if(have_right('Access-Roles-Managment')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/roles')); ?>" class="nav-link <?php echo e($url_1 == 'roles' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles Managment</p>
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>

                </li>
                <?php endif; ?>
                
              <li class="nav-item">
                    <a href="<?php echo e(URL('admin/categories')); ?>" class="nav-link <?php echo e($url_1 == 'categories' ? 'active':''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            categories
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="<?php echo e(URL('admin/customers')); ?>" class="nav-link <?php echo e($url_1 == 'customers' ? 'active':''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(URL('admin/room-booking')); ?>" class="nav-link <?php echo e($url_1 == 'room-booking' ? 'active':''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>
                
                <!-- Contact & subscriptions menus by saad  -->

                <?php if(have_right('Access-Contacts') || have_right('Access-Subscription')): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'contacts' || $url_1 == 'subscriptions' ) ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'contacts' || $url_1 == 'subscriptions' ) ? 'active':''); ?>">
                        
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Queries
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <?php if(have_right('Access-Contacts')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/contacts')); ?>" class="nav-link <?php echo e($url_1 == 'contacts' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(have_right('Access-Subscription')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/subscriptions')); ?>" class="nav-link <?php echo e($url_1 == 'subscriptions' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subscriptions</p>
                            </a>
                        </li>
                        <?php endif; ?>




                    </ul>

                </li>
                <?php endif; ?>

                
                <?php if(have_right('Access-Magazine-Categories') || have_right('Access-Magazine') ): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'magazines'|| $url_1=='magazine-categories') ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'magazine-categories' || $url_1 == 'magazines' ) ? 'active':''); ?>">
                        <i class="nav-icon fas fa fa-book"></i>
                        <p>
                            Magazine
                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <?php if(have_right('Access-Magazine-Categories')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/magazine-categories')); ?>" class="nav-link <?php echo e($url_1 == 'magazine-categories' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Magazines Category</p>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(have_right('Access-Magazine')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/magazines')); ?>" class="nav-link <?php echo e($url_1== 'magazines' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Magazines</p>
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>

                </li>
                <?php endif; ?>

                

                
                <?php if(have_right('Access-Posts') || have_right('Access-Categories') || have_right('Access-Tags')|| have_right('Access-News-Feed') ): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'posts'|| $url_1=='categories' || $url_1=='tags' || $url_1=='news' ) ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'categories' || $url_1 == 'posts' || $url_1=='tags' || $url_1=='news') ? 'active':''); ?>">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>

                    <ul class="d-none nav nav-treeview">
                        <?php if(have_right('Access-Posts')): ?>
                        <li class="d-none nav-item">
                            <a href="<?php echo e(URL('admin/posts')); ?>" class="nav-link <?php echo e($url_1 == 'posts' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Posts
                                </p>
                            </a>
                        </li>                      
                        <?php endif; ?>
                        <?php if(have_right('Access-Categories')): ?>
                        <li class="d-none nav-item">
                            <a href="<?php echo e(URL('admin/categories')); ?>" class="nav-link <?php echo e($url_1 == 'categories' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Categories
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(have_right('Access-Tags')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/tags')); ?>" class="nav-link <?php echo e($url_1 == 'tags' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Tags
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(have_right('Access-News-Feed')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/news')); ?>" class="nav-link <?php echo e($url_1 == 'news' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Feeds</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>

                </li>
                <?php endif; ?>

                

                <!-- start of library section-->


                <?php if(have_right('Access-Library-Image') || have_right('Access-Library-Video') || have_right('Access-Library-Audio') || have_right('Access-Library-Book') || have_right('Access-Library-Document')): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'library'  ) ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'library'  ) ? 'active':''); ?>">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Library
                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>

                    <ul class="d-none nav nav-treeview">

                        <?php if(have_right('Access-Library-Image')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/library/1/edit')); ?>" class="nav-link <?php echo e($url_1.$url_2 == 'library1' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Image</p>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(have_right('Access-Library-Video')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/library/2/edit')); ?>" class="nav-link <?php echo e($url_1.$url_2 == 'library2' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Video</p>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(have_right('Access-Library-Audio')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/library/3/edit')); ?>" class="nav-link <?php echo e($url_1.$url_2 == 'library3' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Audio</p>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(have_right('Access-Library-Book')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/library/4/edit')); ?>" class="nav-link <?php echo e($url_1.$url_2 == 'library4' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Book Library</p>
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>

                </li>
                <?php endif; ?>
                <!-- end of library section-->

                <?php if(have_right('Access-Courses') || have_right('Access-Classes') ): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'courses'|| $url_1=='classes') ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'classes' || $url_1 == 'courses' ) ? 'active':''); ?>">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Courses
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="d-none nav nav-treeview">
                        <?php if(have_right('Access-Courses')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/courses')); ?>" class="nav-link <?php echo e($url_1 == 'courses' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Courses
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(have_right('Access-Classes')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/classes')); ?>" class="nav-link <?php echo e($url_1 == 'classes' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Classess</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>

                </li>
                <?php endif; ?>

                <?php if(have_right('Access-Message') || have_right('Access-Slider') || have_right('Access-Our-Aims')|| have_right('Access-Pages') || have_right('Access-Our-Testimonials') ): ?>
                <li class="d-none nav-item <?php echo e(($url_1 == 'ceomessage' || $url_1 == 'aims'|| $url_1=='sliders' || $url_1 == 'pages' || $url_1 == 'testimonials') ? 'menu-open':''); ?>">
                    <a href="#" class="nav-link <?php echo e(($url_1 == 'sliders' ||$url_1 == 'aims' || $url_1 == 'ceomessage'|| $url_1 == 'pages'|| $url_1 == 'testimonials') ? 'active':''); ?>">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <?php if(have_right('Access-Message')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/ceomessage')); ?>" class="nav-link <?php echo e($url_1 == 'ceomessage' ? 'active':''); ?>">
                                <i class="nav-icon  far fa-circle"></i>
                                <p>Ceo Message</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(have_right('Access-Slider')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/sliders')); ?>" class="nav-link <?php echo e($url_1 == 'sliders' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Sliders
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(have_right('Access-Our-Aims')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/aims')); ?>" class="nav-link <?php echo e($url_1 == 'aims' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Our Aims
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/document-uploader')); ?>" class="nav-link <?php echo e($url_1 == 'customers' ? 'active':''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Document Upload</p>
                            </a>
                        </li>
                        <?php if(have_right('Access-Pages')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/pages')); ?>" class="nav-link <?php echo e($url_1 == 'pages' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Pages
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(have_right('Access-Our-Testimonials')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(URL('admin/testimonials')); ?>" class="nav-link <?php echo e($url_1 == 'testimonials' ? 'active':''); ?>">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Testimonials
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>

                </li>
                <?php endif; ?>

                <?php if(have_right('Access-Our-Locations')): ?>
                <li class="d-none nav-item">
                    <a href="<?php echo e(URL('admin/locations')); ?>" class="nav-link <?php echo e($url_1 == 'locations' ? 'active':''); ?>">
                        <i class="fa fa-map-marker nav-icon"></i>
                        <p>Locations</p>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(have_right('Access-Our-Departments')): ?>
                <li class="d-none nav-item">
                    <a href="<?php echo e(URL('admin/department')); ?>" class="nav-link <?php echo e($url_1 == 'department' ? 'active':''); ?>">
                        <i class="nav-icon fa fa-graduation-cap"></i>
                        <p>
                            Departments
                        </p>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(have_right('Access-Doantions')): ?>
                <li class="d-none nav-item">
                    <a href="<?php echo e(URL('admin/donations')); ?>" class="nav-link <?php echo e($url_1 == 'donations' ? 'active':''); ?>">

                        <i class=" nav-icon fas fa-box"></i>
                        <p>
                            Donations
                        </p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /var/www/html/EStore/resources/views/admin/sections/left-nav.blade.php ENDPATH**/ ?>