<?php $__env->startSection('title', 'List Materi'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Materi</h1>
                    </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Materi</li>
                    <li class="breadcrumb-item active">List Materi</li>
                </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Daftar Materi</h3>
                    <div class="card-tools">
                        <form action="/Teacher/Materi/List/Search/" method="get">
                            <?php echo csrf_field(); ?>
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button name="submit" type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                        <!-- /.card-header -->

                <div class="card-body table-responsive p-0" style="height: auto;">
                  <table class="table table-head-fixed">
                    <thead>
                      <tr>
                        <th>Mapel</th>
                        <th>Kelas</th>
                        <th>Judul Materi</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $materis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($materi->mapel); ?></td>
                            <td><?php echo e($materi->kelas); ?></td>
                            <td><?php echo e($materi->judul); ?></td>
                            <td><?php echo e($materi->keterangan); ?></td>
                            <td>
                                <a type="button" class="btn btn-block bg-gradient-primary btn-xs" href="/Teacher/Materi/Edit/<?php echo e($materi->id); ?>">Edit</a>
                                <a type="button" class="btn btn-block bg-gradient-danger btn-xs" href="/Teacher/Materi/Delete/<?php echo e($materi->id); ?>">Delete</a>
                            </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Oranta19\LaraELearn\resources\views/pages/teacher/materi/showMateri.blade.php ENDPATH**/ ?>