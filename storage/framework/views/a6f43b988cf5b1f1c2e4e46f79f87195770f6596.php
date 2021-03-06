<?php $__env->startSection('title', 'Change Photo Profile'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile Picture</h1>
                    </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home</a></li>
                    <li class="breadcrumb-item">Profile</a></li>
                    <li class="breadcrumb-item active">Profile Picture</li>
                </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Change Photo Profile</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                     <!-- Success And Fail/Error Alert -->
                     <div class="row">
                        <div class="row">
                            <?php if($message = Session::get('success')): ?>
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong><?php echo e($message); ?></strong>
                                </div>
                            <?php endif; ?>

                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End of Success And Fail/Error Alert -->
                    <div class="widget-user-image">
                        <?php if($user->avatar): ?>
                            <img class="img-circle mx-auto d-block" width="200px"  src="/storage/avatars/<?php echo e($user->avatar); ?>" alt="User Avatar">
                        <?php else: ?>
                            <img class="img-circle mx-auto d-block" width="200px"  src="<?php echo e(asset('/storage/avatars/defaultAvatar.png')); ?>" alt="User Avatar">
                        <?php endif; ?>
                    </div>

                <form role="form" action="/Teacher/Profile/Picture" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label><?php echo e($user->name); ?>'s Photo</label>
                        <br>
                        <input name="avatar" type="file" id="exampleInputFile">
                    </div>
                    <div class="callout callout-warning">
                        <p>Please upload a valid image file. Size of image should not be more than 2MB.</p>
                    </div>
                    <div class="callout callout-info">
                        <p>Photo in preview is your old Profile Photo, just info.</p>
                    </div>
                    <button name="submit" type="submit" class="btn btn-block bg-gradient-primary">Upload</button>
                </form>

                </div>
                <!-- /.card-body -->
            </div>

            <!-- /.card -->
            <div class="d-none" id="card-refresh-content">
                The body of the card after card refresh
            </div>
        </div>
        <!-- /.col -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Oranta19\LaraELearn\resources\views/pages/teacher/profile/picture.blade.php ENDPATH**/ ?>