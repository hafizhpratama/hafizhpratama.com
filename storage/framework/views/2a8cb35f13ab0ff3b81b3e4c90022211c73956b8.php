<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Hafizh Pratama</title>
    <link rel="icon" href="<?php echo e(asset('images/g.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body class="bd-masthead">
    <div class="col-lg-8 mx-auto px-3">
        <nav style="border-bottom: 1px solid" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img style="width: 154px" src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'home'){echo 'active fw-bold text-dark';} ?>" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'blog'){echo 'active fw-bold text-dark';} ?>" href="/blog">Blog</a>
                        </li>
                    </ul>
                    <button class="btn" style="background-color: rgb(235, 68, 50); color: white;" type="submit">
                        <p style="font-size: 16px" class="my-0">Resume</p>
                    </button>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>

        <footer style="border-top: 1px solid" class="mt-5 pt-3 text-dark">
        <div class="row">
            <div class="col-6 text-start">
                <p style="font-size: 16px">Designed & Built by Hafizh Pratama</p>
            </div>
            <div class="col-6 text-end">
                <a class="text-dark" style="text-decoration: none;" href="https://www.linkedin.com/in/hafizhpratama" target="_blank"><p style="font-size: 16px">LinkedIn</p></a>
            </div>
        </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp8\htdocs\laravel\hafizhpratama.dev\resources\views/layouts/main.blade.php ENDPATH**/ ?>