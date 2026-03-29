<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perhitungan Diskon - Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Sistem Perhitungan Diskon Bertingkat</h1>

    <?php
    
    $nama_pembeli = "Nur Khalimatus Sa'diah";
    $judul_buku = "Laravel Advanced";
    $harga_satuan = 165000;
    $jumlah_beli = 2;
    $is_member = true;


    $subtotal = $harga_satuan * $jumlah_beli;

    if ($jumlah_beli <= 2) {
        $persentase_diskon = 0;
    } elseif ($jumlah_beli <= 5) {
        $persentase_diskon = 10;
    } elseif ($jumlah_beli <= 10) {
        $persentase_diskon = 15;
    } else {
        $persentase_diskon = 20;
    }

    $diskon = $subtotal * ($persentase_diskon / 100);

    $total_setelah_diskon1 = $subtotal - $diskon;

    $diskon_member = 0;
    if ($is_member) {
        $diskon_member = $total_setelah_diskon1 * 0.05;
    }

    $total_setelah_diskon = $total_setelah_diskon1 - $diskon_member;

    $ppn = $total_setelah_diskon * 0.11;

    $total_akhir = $total_setelah_diskon + $ppn;

    $total_hemat = $diskon + $diskon_member;
    ?>

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Pembelian</h5>
        </div>
        <div class="card-body">

            <p><strong>Nama:</strong> <?php echo $nama_pembeli; ?></p>
            <p><strong>Status:</strong> 
                <span class="badge <?php echo $is_member ? 'bg-success' : 'bg-secondary'; ?>">
                    <?php echo $is_member ? 'Member' : 'Non Member'; ?>
                </span>
            </p>

            <table class="table table-bordered">
                <tr>
                    <th>Judul Buku</th>
                    <td><?php echo $judul_buku; ?></td>
                </tr>
                <tr>
                    <th>Harga Satuan</th>
                    <td>Rp <?php echo number_format($harga_satuan,0,',','.'); ?></td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td><?php echo $jumlah_beli; ?></td>
                </tr>
                <tr>
                    <th>Subtotal</th>
                    <td>Rp <?php echo number_format($subtotal,0,',','.'); ?></td>
                </tr>
                <tr>
                    <th>Diskon (<?php echo $persentase_diskon; ?>%)</th>
                    <td>Rp <?php echo number_format($diskon,0,',','.'); ?></td>
                </tr>

                <?php if ($is_member) { ?>
                <tr>
                    <th>Diskon Member (5%)</th>
                    <td>Rp <?php echo number_format($diskon_member,0,',','.'); ?></td>
                </tr>
                <?php } ?>

                <tr>
                    <th>Total Setelah Diskon</th>
                    <td>Rp <?php echo number_format($total_setelah_diskon,0,',','.'); ?></td>
                </tr>
                <tr>
                    <th>PPN (11%)</th>
                    <td>Rp <?php echo number_format($ppn,0,',','.'); ?></td>
                </tr>
                <tr class="table-success">
                    <th>Total Akhir</th>
                    <td><strong>Rp <?php echo number_format($total_akhir,0,',','.'); ?></strong></td>
                </tr>
                <tr class="table-warning">
                    <th>Total Hemat</th>
                    <td><strong>Rp <?php echo number_format($total_hemat,0,',','.'); ?></strong></td>
                </tr>
            </table>

        </div>
    </div>

</div>
</body>
</html>