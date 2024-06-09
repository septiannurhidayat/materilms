

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($materi->title); ?></h1>
    <p><?php echo e($materi->description); ?></p>
    <p>Pertemuan: <?php echo e($materi->meeting_number); ?></p>
    <?php if($materi->file_path): ?>
        <p><a href="<?php echo e(asset('storage/' . $materi->file_path)); ?>" class="btn btn-link">Download File</a></p>
    <?php endif; ?>
    <a href="<?php echo e(route('materi.index')); ?>" class="btn btn-secondary">Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/materi/show.blade.php ENDPATH**/ ?>