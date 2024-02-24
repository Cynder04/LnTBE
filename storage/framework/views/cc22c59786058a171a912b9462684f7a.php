<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset ('css/home.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Karyawan</a>
        </div>
    </nav>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nomor</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $KaryawanData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th scope="row"><?php echo e($data -> id); ?></th>
        <td><?php echo e($data -> nama_karyawan); ?></td>
        <td><?php echo e($data -> umur_karyawan); ?></td>
        <td><?php echo e($data -> alamat_karyawan); ?></td>
        <td><?php echo e($data -> nomor_karyawan); ?></td>
        <td>
            <button class="btn btn-light">
            <a href="/edit_karyawan/<?php echo e($data->id); ?>">Edit</a>
            <form action="/delete_karyawan/<?php echo e($data->id); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>
              <button type="submit" class="btn btn-dark">Delete</button>            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
        
        <a href="/add"class="btn btn-primary" href="#" role="button">Tambah</a>
    </div>
</body>

</html><?php /**PATH /Users/rendyciang/Desktop/LnTProject/resources/views/view_karyawan.blade.php ENDPATH**/ ?>