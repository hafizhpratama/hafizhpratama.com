
<?php $__env->startSection('content'); ?>
<h1 class="pb-3 fw-bold h3-font pt-5">Blog</h1>
<div class="row row-cols-1 row-cols-md-3">
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col">
        <div class="card mb-4">
            <img src="<?php echo e(Storage::url($post->image)); ?>" class="card-img-top border-radius-1" alt="Image Blog" />
            <div class="card-body">
                <a class="text-dark" style="text-decoration: none" href="/blog/<?php echo e($post->url); ?>"><h4 class="card-title fw-bold" style="font-size: 18px">
                    <?php echo e(ucfirst($post->title)); ?>

                </h4>
                </a>
                <p class="card-text" style="font-size: 16px">
                    <?php
                    $string = strip_tags($post->content);
                    if (strlen($string) > 160) {

                        // truncate string
                        $stringCut = substr($string, 0, 160);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                        $string .= '... <a style="color: rgb(235, 68, 50); text-decoration: none" href="/blog/' . $post->url . '">Read More</a>';
                    }
                    echo $string;
                    ?>
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p class="text-warning">No blog Posts available</p>
    <?php endif; ?>
</div>
<div class="mt-5">
    <?php echo $posts->withQueryString()->links('pagination::bootstrap-5'); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel\hafizhpratama.dev\resources\views/blog.blade.php ENDPATH**/ ?>