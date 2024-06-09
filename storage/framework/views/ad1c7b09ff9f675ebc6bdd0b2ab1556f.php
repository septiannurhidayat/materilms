

<?php $__env->startSection('main-content'); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('kelas.index')); ?>">Detail Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Absensi</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('materi.index')); ?>">Daftar Materi</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{#  #}>Daftar Mahasiswa</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelasku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="card mb-3" style="background-color: <?php echo e($kelasku->warna); ?>;">
        <div class="card-body p-0 position-relative">
            <?php if($kelasku->gambar): ?>
            <img src="<?php echo e(asset('images/' . $kelasku->gambar)); ?>" class="card-img" alt="<?php echo e($kelasku->nama); ?>">
            <?php endif; ?>
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <a href="<?php echo e(route('kelas.show', ['id' => $kelasku->id])); ?>" class="text-decoration-none">
                    <h1 class="card-title font-weight-bold text-white"><?php echo e($kelasku->nama); ?></h1>
                </a>
                <div class="card-text text-white">
                    <span><?php echo e($kelasku->user->name ?? 'Tidak diketahui'); ?></span> | <?php echo e($kelasku->created_at->format('j F Y')); ?>

                </div>
                <p class="card-text mt-3 text-white"><?php echo e(Str::limit($kelasku->deskripsi, 80)); ?></p>
                <div class="d-flex">
                    <a href="<?php echo e(route('kelas.show', ['id' => $kelasku->id])); ?>" class="btn btn-danger mr-2">Detail Kelas &raquo;</a>
                    <form action="<?php echo e(route('kelas.destroy', ['id' => $kelasku->id])); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin mengarsipkan kelas ini?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-warning">Arsipkan Kelas</button>
                    </form>
                </div>
            </div>
        </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Tombol Tambah Kelas -->
    <div class="row justify-content-center mb-5">
        <a href="<?php echo e(route('kelas.create')); ?>" class="btn btn-primary">Tambah Kelas</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/kelas/index.blade.php ENDPATH**/ ?>