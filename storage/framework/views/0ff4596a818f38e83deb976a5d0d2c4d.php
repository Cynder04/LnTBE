<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
         body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: green; /* Warna latar belakang selain form */
            color: white; /* Warna teks untuk kontras */
        }
        form {
            width: 50%; 
            margin-bottom: 20px;
            border: 1px solid white; 
            padding: 20px; 
            background-color: #343a40; 
            border-radius: 10px; 
        }
        .form-nama_karyawan,
        .form-umur_karyawan,
        .form-alamat_karyawan {
            margin-bottom: 15px;
        }
        label {
            color: pink;
        }
        input {
            width: 100%; /* Panjang input menyesuaikan dengan panjang form */
            padding: 5px; /* Tambahkan padding agar isi input tidak terlalu dekat dengan border */
            box-sizing: border-box; /* Termasuk padding dan border dalam lebar dan tinggi total */
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method ="POST" action ="/add_karyawan1">
        <?php echo csrf_field(); ?>
        <div class="form-nama_karyawan">
            <div class="nama_karyawan">
                <label for="nama_karyawan">Nama_Karyawan</label>
            </div>    
            <input type ="text" name = "nama_karyawan" id="nama_karyawan" value="<?php echo e(old('nama_karyawan')); ?>">
            <?php $__errorArgs = ['nama_karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="form-umur_karyawan">
            <div class="umur_karyawan">
                <label for="umur_karyawan">Umur</label>
            </div>
                <input type="number" name= "umur_karyawan" id="umur_karyawan" placeholder="Contoh : 18" value="<?php echo e(old('umur_karyawan')); ?>">
                <?php $__errorArgs = ['umur_karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="form-alamat_karyawan">
            <label for="alamat_karyawan">Alamat</label>
            <div class="alamat_karyawan">
                <input type="text" name = "alamat_karyawan" id="alamat_karyawan" placeholder="Masukan Alamat Karyawan" value="<?php echo e(old('alamat_karyawan')); ?>">
                <?php $__errorArgs = ['alamat_karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        
        <div class="form-nomor_karyawan">
            <label for="nomor_karyawan">Nomor Telp</label>
            <div class="nomor_karyawan">
                <input type="text" name = "nomor_karyawan" id="nomor_karyawan" placeholder="Masukan Alamat Karyawan" value="<?php echo e(old('nomor_karyawan')); ?>">
                <?php $__errorArgs = ['nomor_karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html><?php /**PATH /Users/rendyciang/Desktop/LnTProject/resources/views/add_karyawan.blade.php ENDPATH**/ ?>