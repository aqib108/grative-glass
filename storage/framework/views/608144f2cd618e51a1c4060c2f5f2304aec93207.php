<?php
    $departments = App\Models\Admin\Department::wherestatus(1)->orderBy('id', 'DESC')->get();
    $locations = App\Models\Admin\Location::wherestatus(1)->orderBy('id', 'DESC')->get();
    $library_types = App\Models\Admin\LibraryType::wherestatus(1)->orderBy('id', 'AsC')->get();
    $news = App\Models\Admin\News::wherestatus(1)->take(3)->orderBy('id', 'DESC')->get();
?>
<header class="header">
    <div class="bottom-header">
        <div class="container-fluid container-width">
            <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <div class="logo">
                        <img src="<?php echo e(asset(getSettingDataHelper('logo'))); ?>" alt="image not found" class="img-fluid" />
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse header-list" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link main-header-active" href="/"><?php echo e(__('app.home')); ?></a>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a class="nav-link d-flex align-items-center"> <?php echo e(__('app.about-us')); ?> <span class="next00"></span></a>
                                </div>
                                <div class="drop-down__menu-box">
                                    <ul class="drop-down__menu">
                                        <li><a href="/aims-&-object" class="drop-down__item" title=""><?php echo e(__('app.aims-object')); ?></a></li>
                                        <li><a href="/satzung" class="drop-down__item" title=""><?php echo e(__('app.satzung')); ?></a></li>
                                        <li><a href="/membership-form" class="drop-down__item" title=""><?php echo e(__('app.membership-form')); ?></a></li>
                                        <li><a href="/union" class="drop-down__item" title=""><?php echo e(__('app.union')); ?></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a class="nav-link d-flex align-items-center"><?php echo e(__('app.departments')); ?> <span class="next00"></span></a>
                                </div>
                                <div class="drop-down__menu-box">
                                    <ul class="drop-down__menu">
                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $depart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($depart->url); ?>" class="drop-down__item" title=""><?php echo set_locale($depart->name) ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a class="nav-link d-flex align-items-center"><?php echo e(__('app.location')); ?> <span class="next00"></span></a>
                                </div>
                                <div class="drop-down__menu-box">
                                    <ul class="drop-down__menu">
                                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($loc->location_link); ?>" class="drop-down__item" title=""><?php echo set_locale($loc->location_address) ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a href="<?php echo e(route('home.courses')); ?>" class="nav-link d-flex align-items-center"><?php echo e(__('app.courses')); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a class="nav-link d-flex align-items-center"><?php echo e(__('app.library')); ?> <span class="next00"></span></a>
                                </div>
                                <div class="drop-down__menu-box">
                                    <ul class="drop-down__menu">
                                        <?php $__currentLoopData = $library_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('home.library',['id'=>$library_type->id])); ?>" class="drop-down__item" title=""><?php echo set_locale($library_type->title) ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a href="/magazine-categories" class="nav-link d-flex align-items-center"><?php echo e(__('app.magzine')); ?></a>
                                </div>
                                
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a class="nav-link d-flex align-items-center"><?php echo e(__('app.news-events')); ?> <span class="next00"></span></a>
                                </div>
                                <div class="drop-down__menu-box">
                                    <ul class="drop-down__menu">
                                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('home.news-events-detail', ['id' => $new->id])); ?>" class="drop-down__item" title=""><?php echo set_locale($new->title) ?></a></li> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item custom-design-drop-down">
                            <div class="about-drop-down">
                                <div id="adropDown" class="drop-down__button">
                                    <a class="nav-link d-flex align-items-center" href="/contact-us"><?php echo e(__('app.contact-us')); ?></a>
                                </div>
                                
                            </div>
                        </li>
                        <li class="nav-item custom-design-drop-down">
                            <form action="/set-local" method="POST">
                                <?php echo csrf_field(); ?>
                            <select onChange="this.form.submit()" name="set_language" id='language_selector'>
                            <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(app()->getLocale()==$lang->short_name): ?>
                            <option value="<?php echo e($lang->short_name); ?>" selected ><?php echo e($lang->name); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($lang->short_name); ?>"><?php echo e($lang->name); ?></option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                           </select>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header><?php /**PATH /var/www/html/Room_booking/resources/views/home/sections/header.blade.php ENDPATH**/ ?>