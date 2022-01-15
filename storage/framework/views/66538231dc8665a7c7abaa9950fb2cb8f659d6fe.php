<?php $__env->startSection('title', 'Admin - Teacher Profile Page Manager'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teacher Profile Page Manager</h1>
                    </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item">Teacher</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                            <?php if($teacher->photo): ?>
                                <img class="profile-user-img img-fluid img-circle" src="/storage/avatars/<?php echo e($teacher->avatar); ?>" alt="User profile picture">
                            <?php else: ?>
                                <img class="profile-user-img img-fluid img-circle" src="<?php echo e(asset('/storage/avatars/defaultAvatar.png')); ?>" alt="User profile picture">
                            <?php endif; ?>
                        </div>

                      <h3 class="profile-username text-center"><?php echo e($teacher->name); ?></h3>

                      <p class="text-muted text-center"><?php echo e($teacher->jabatan); ?></p>

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>NIP</b> <a class="float-right"><?php echo e($teacher->nip); ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Kelas</b> <a class="float-right"><?php echo e($teacher->kelas); ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Jabatan</b> <a class="float-right"><?php echo e($teacher->jabatan); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>User Role</b> <a class="float-right">
                                <?php if($teacher->hasRole('Admin')): ?>
                                    Admin
                                <?php elseif($teacher->hasRole('Teacher')): ?>
                                    Teacher
                                <?php else: ?>
                                    Student
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Ganti Photo Profile User Ini?</b> <a href="/Okemin/User/Teacher/Profile/Picture/<?php echo e($teacher->id); ?>">Klik ini!</a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <!-- /.col -->
                <!-- Profile Details -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile Details</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Change Password</a></li>
                        </ul>

                        </div><!-- /.card-header -->
                        <div class="card-body">
                        <div class="tab-content">
                            <!-- Profile Details -->
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>INFO PRIBADI</h5>
                                            <h6>Name :</h6>
                                            <?php if($teacher->name): ?>
                                                <p><?php echo e($teacher->name); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>Tempat Lahir :</h6>
                                            <?php if($teacher->tempat_lahir): ?>
                                                <p><?php echo e($teacher->tempat_lahir); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>Tanggal Lahir :</h6>
                                            <?php if($teacher->tgl_lahir): ?>
                                                <p><?php echo e($teacher->tgl_lahir); ?>/<?php echo e($teacher->bulan_lahir); ?>/<?php echo e($teacher->tahun_lahir); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>Jenis Kelamin :</h6>
                                            <?php if($teacher->jenis_kelamin): ?>
                                                <p><?php echo e($teacher->jenis_kelamin); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>Agama :</h6>
                                            <?php if($teacher->agama): ?>
                                                <p><?php echo e($teacher->agama); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-6">
                                            <h5>INFO AKADEMIK</h5>
                                            <h6>NIP :</h6>
                                            <?php if($teacher->nip): ?>
                                                <p><?php echo e($teacher->nip); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>Jabatan :</h6>
                                            <?php if($teacher->jabatan): ?>
                                                <p><?php echo e($teacher->jabatan); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <!-- Garis Pembatas -->
                                    <hr>
                                    <!-- End of Garis Pembatas -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>INFO AKUN</h5>
                                            <h6>Username :</h6>
                                            <?php if($teacher->username): ?>
                                                <p><?php echo e($teacher->username); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>E-mail :</h6>
                                            <?php if($teacher->email): ?>
                                                <p><?php echo e($teacher->email); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>

                                            <h6>No. Telp :</h6>
                                            <?php if($teacher->no_telp): ?>
                                                <p><?php echo e($teacher->no_telp); ?></p>
                                            <?php else: ?>
                                                <p>Kosong...</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-content -->

                            <!-- Profile Setting Part -->
                            <div class="tab-pane" id="settings">
                                <!-- Success And Fail/Error Alert -->
                                <div class="row">
                                    <?php if(session('message.profile')): ?>
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong><?php echo e(session('message.profile')); ?></strong>
                                            <p>You can see it in the Profile Details</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- End of Success And Fail/Error Alert -->
                                <form class="form-horizontal" method="post" action="/Okemin/User/Teacher/Profile/Send/<?php echo e($teacher->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('PUT')); ?>


                                    <h5>INFO PRIBADI</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama*</label>
                                        <div class="col-sm-10">
                                            <input  name="name" type="name" class="form-control" placeholder="Name" value="<?php echo e($teacher->name); ?>">
                                            <?php if($errors->has('name')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('name')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo e($teacher->tempat_lahir); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Lahir*</label>
                                        <div class="col-sm-10">
                                            <input  name="tgl_lahir" type="text" class="form-control" placeholder="Tanggal Lahir, misal: 05" value="<?php echo e($teacher->tgl_lahir); ?>">
                                            <?php if($errors->has('tgl_lahir')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('tgl_lahir')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bulan Lahir*</label>
                                        <div class="col-sm-10">
                                            <input  name="bulan_lahir" type="text" class="form-control" placeholder="Bulan Lahir, misal: 12" value="<?php echo e($teacher->bulan_lahir); ?>">
                                            <?php if($errors->has('bulan_lahir')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('bulan_lahir')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tahun Lahir*</label>
                                        <div class="col-sm-10">
                                            <input  name="tahun_lahir" type="text" class="form-control" placeholder="Tahun Lahir, misal: 2003" value="<?php echo e($teacher->tahun_lahir); ?>">
                                            <?php if($errors->has('tahun_lahir')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('tahun_lahir')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <input name="jenis_kelamin" type="text" class="form-control" placeholder="Jenis Kelamin" value="<?php echo e($teacher->jenis_kelamin); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
                                            <input name="agama" type="text" class="form-control" placeholder="Agama" value="<?php echo e($teacher->agama); ?>">
                                        </div>
                                    </div>

                                    <!-- Garis Pembatas -->
                                    <hr>
                                    <!-- End of Garis Pembatas -->

                                    <h5>INFO AKADEMIK</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">NIP*</label>
                                        <div class="col-sm-10">
                                            <input  name="nip" type="text" class="form-control" placeholder="Nomor NIP" value="<?php echo e($teacher->nip); ?>">
                                            <?php if($errors->has('nip')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('nip')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan, misal: Komandan Kompi RPL" value="<?php echo e($teacher->jabatan); ?>">
                                        </div>
                                    </div>

                                    <!-- Garis Pembatas -->
                                    <hr>
                                    <!-- End of Garis Pembatas -->

                                    <h5>INFO AKUN</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Username*</label>
                                        <div class="col-sm-10">
                                            <input  name="username" type="text" class="form-control" placeholder="Username" value="<?php echo e($teacher->username); ?>">
                                            <?php if($errors->has('username')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('username')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">E-mail*</label>
                                        <div class="col-sm-10">
                                            <input  name="email" type="email" class="form-control" placeholder="E-mail" value="<?php echo e($teacher->email); ?>">
                                            <?php if($errors->has('email')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('email')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No. Telp*</label>
                                        <div class="col-sm-10">
                                            <input  name="no_telp" type="text" class="form-control" placeholder="No. Telp" value="<?php echo e($teacher->no_telp); ?>">
                                            <?php if($errors->has('no_telp')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('no_telp')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-content -->

                            <!-- Change Password Part -->
                            <div class="tab-pane" id="password">
                                <!-- Success And Fail/Error Alert -->
                                <div class="row">
                                    <?php if(session('message.password')): ?>
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong><?php echo e(session('message.password')); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- End of Success And Fail/Error Alert -->
                                <form class="form-horizontal" method="post" action="/Okemin/User/Teacher/Profile/changePassword/<?php echo e($teacher->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('POST')); ?>

                                    <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input name="new_password" type="password" class="form-control" id="inputName" placeholder="Your New Password">
                                                <?php if($errors->has('new_password')): ?>
                                                    <div class="text-danger">
                                                        <?php echo e($errors->first('new_password')); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Confirm New Password</label>
                                        <div class="col-sm-10">
                                            <input name="confirm_new_password" type="password" class="form-control" id="inputEmail" placeholder="Enter Your New Password, Again.">
                                            <?php if($errors->has('confirm_new_password')): ?>
                                                <div class="text-danger">
                                                    <?php echo e($errors->first('confirm_new_password')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button name="submit" type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
              <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Oranta19\LaraELearn\resources\views/pages/okemin/user/teacher/profile/profilePage.blade.php ENDPATH**/ ?>