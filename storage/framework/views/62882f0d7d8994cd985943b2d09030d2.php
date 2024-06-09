

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Materi</h1>
            <a href="<?php echo e(route('materi.create')); ?>" class="btn btn-primary mb-3">Tambah Materi</a>

            <?php if($materi->count()): ?>
                <ul class="list-group">
                    <?php $__currentLoopData = $materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <h2><?php echo e($item->title); ?></h2>
                            <p><?php echo e($item->description); ?></p>
                            <p>Pertemuan: <?php echo e($item->meeting_number); ?></p>
                            <?php if($item->file_path): ?>
                                <p><a href="<?php echo e(asset('storage/' . $item->file_path)); ?>" class="btn btn-link">Download File</a></p>
                            <?php endif; ?>
                            <a href="<?php echo e(route('materi.show', $item->id)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('materi.edit', $item->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('materi.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                    <?php $__env->startSection('content'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Materi</h1>
                                <a href="<?php echo e(route('materi.create')); ?>" class="btn btn-primary mb-3">Tambah Materi</a>
                    
                                <?php if($materi->count()): ?>
                                    <ul class="list-group">
                                        <?php $__currentLoopData = $materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item">
                                                <h2><?php echo e($item->title); ?></h2>
                                                <p><?php echo e($item->description); ?></p>
                                                <p>Pertemuan: <?php echo e($item->meeting_number); ?></p>
                                                <?php if($item->file_path): ?>
                                                    <p><a href="<?php echo e(asset('storage/' . $item->file_path)); ?>" class="btn btn-link">Download File</a></p>
                                                <?php endif; ?>
                                                <a href="<?php echo e(route('materi.show', $item->id)); ?>" class="btn btn-info">View</a>
                                                <a href="<?php echo e(route('materi.edit', $item->id)); ?>" class="btn btn-warning">Edit</a>
                                                <form action="<?php echo e(route('materi.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php else: ?>
                                    <p>No materi available.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $__env->stopSection(); ?>
                         </ul>
            <?php else: ?>
                <p>No materi available.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/materi/index.blade.php ENDPATH**/ ?>