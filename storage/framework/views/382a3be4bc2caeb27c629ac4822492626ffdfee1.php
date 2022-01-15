<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Learning</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::user() && Auth::user()->hasRole('Admin')): ?>
                        <a href="<?php echo e(url('/Okemin')); ?>">Home</a>

                    <?php elseif(Auth::user() && Auth::user()->hasRole('Teacher')): ?>
                        <a href="<?php echo e(url('/Teacher')); ?>">Home</a>

                    <?php elseif(Auth::user() && Auth::user()->hasRole('Student')): ?>
                        <a href="<?php echo e(url('/Student')); ?>">Home</a>

                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    <!--<?php echo e(config('app.name')); ?>-->
                    <img src="img/logo.png">
                </div>

                <div class="links col-md-12">
                    <a href="#"></a>
                    <br>
                    <p>©Copyright 2021 E-Learning. Created By <strong>E-Learning's Team</strong>.</p>
                    <h2>SMA Perguruan Cikini!</h2>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\Oranta19\LaraELearn\resources\views/welcome.blade.php ENDPATH**/ ?>