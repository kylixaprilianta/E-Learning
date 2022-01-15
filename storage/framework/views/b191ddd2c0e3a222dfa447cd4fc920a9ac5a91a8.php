<!DOCTYPE html>
<html>
    <head>  
        <title>LaraELearn - <?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->make('partials.dashHead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        <div class="wrapper">
            <?php echo $__env->make('partials.dashNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <!-- Checking Role For Sidebar -->
            <?php if(Auth::user()->hasRole("Admin")): ?> 
                <?php echo $__env->make('partials.okemin.dashSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif(Auth::user()->hasRole("Teacher")): ?>
                <?php echo $__env->make('partials.teacher.dashSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('partials.student.dashSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <div class="content-wrapper">
                <!-- This Line is For Breadcrumb -->
                <!-- Main content -->
                <section class="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </section>
                <!-- End of Main content -->
            </div>
            <?php echo $__env->make('partials.dashFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </body>
</html>

<?php /**PATH C:\Users\Oranta19\LaraELearn\resources\views/layouts/dash.blade.php ENDPATH**/ ?>