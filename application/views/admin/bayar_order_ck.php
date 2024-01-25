<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($bayar as $data): ?>
        <title>Bayar Order
            <?= $data['or_ck_number'] ?>
        </title>
    <?php endforeach ?>

    <link rel="stylesheet" href="<?= base_url('_assets/css/payments.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('_assets/img/logo/favicon.svg') ?>" type="image/x-icon">
</head>

<body>

    <div class="card-payment">
        <div class="icon-header">
            <img src="<?= base_url('_assets/img/payment.svg') ?>" alt="Icon Payment" width="178">
        </div>

        <div class="txt">
            <h3>#no_order:
                <?= $data['or_ck_number'] ?>
            </h3>
            <p>Masukkan nominal untuk melakukan transaksi</p>
        </div>
        <form action="" method="post">
            <input type="hidden" name="or_number" value="<?= $data['or_ck_number'] ?>">
            <input type="hidden" name="pelanggan" value="<?= $data['nama_pel_ck'] ?>">
            <input type="hidden" name="no_telp" value="<?= $data['no_telp_ck'] ?>">
            <input type="hidden" name="alamat" value="<?= $data['alamat_ck'] ?>">
            <input type="hidden" name="j_paket" value="<?= $data['jenis_paket_ck'] ?>">
            <input type="hidden" name="wkt_kerja" value="<?= $data['wkt_krj_ck'] ?>">
            <input type="hidden" name="berat" value="<?= $data['berat_qty_ck'] ?>">
            <input type="hidden" name="h_perkilo" value="<?= $data['harga_perkilo'] ?>">
            <input type="hidden" name="tgl_msk" value="<?= $data['tgl_masuk_ck'] ?>">
            <input type="hidden" name="tgl_klr" value="<?= $data['tgl_keluar_ck'] ?>">
            <input type="hidden" name="total" value="<?= $data['tot_bayar'] ?>">
            <input type="hidden" name="keterangan" value="<?= $data['keterangan_ck'] ?>">

            <input type="text" name="nominal" required autofocus autocomplete="off" placeholder="Nominal ex: '120000'">
            <button type="submit" name="bayar">Bayar</button>
        </form>
    </div>
</body>

</html>