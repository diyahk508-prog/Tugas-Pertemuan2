<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Informasi Buku</h1>

    <?php
    $judul = "Laravel: From Beginner to Advanced";
    $harga = 125000;
    $stok = 8;

    $judul1 = "Introduction to Algorithms";
    $kategori1 = "Programming";
    $bahasa1 = "Inggris";
    $halaman1 = 1180;
    $berat1 = 1500;

    $judul2 = "Konsep Dasar Basis Data";
    $kategori2 = "Database";
    $bahasa2 = "Indonesia";
    $halaman2 = 85;
    $berat2 = 80;

    $judul3 = "Desain dan Pemrograman Web";
    $kategori3 = "Web Design";
    $bahasa3 = "Indonesia";
    $halaman3 = 225;
    $berat3 = 200;
    ?>

    
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><?php echo $judul; ?></h5>
        </div>
        <div class="card-body">
            <p>Harga: Rp <?php echo number_format($harga,0,',','.'); ?></p>
            <p>Stok: <?php echo $stok; ?> buku</p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo $judul1; ?></h5>
        </div>
        <div class="card-body">
            <p>Kategori: <span class="badge bg-primary"><?php echo $kategori1; ?></span></p>
            <p>Bahasa: <?php echo $bahasa1; ?></p>
            <p>Halaman: <?php echo $halaman1; ?></p>
            <p>Berat: <?php echo $berat1; ?> gram</p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo $judul2; ?></h5>
        </div>
        <div class="card-body">
            <p>Kategori: <span class="badge bg-success"><?php echo $kategori2; ?></span></p>
            <p>Bahasa: <?php echo $bahasa2; ?></p>
            <p>Halaman: <?php echo $halaman2; ?></p>
            <p>Berat: <?php echo $berat2; ?> gram</p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo $judul3; ?></h5>
        </div>
        <div class="card-body">
            <p>Kategori: <span class="badge bg-danger"><?php echo $kategori3; ?></span></p>
            <p>Bahasa: <?php echo $bahasa3; ?></p>
            <p>Halaman: <?php echo $halaman3; ?></p>
            <p>Berat: <?php echo $berat3; ?> gram</p>
        </div>
    </div>

</div>
</body>
</html>