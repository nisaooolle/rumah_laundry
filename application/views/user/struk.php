<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="shortcut icon" href="<?= base_url('_assets/img/logo/favicon.svg') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('_assets/css/invoice.css') ?>">
</head>

<body>
    <div class="invoice">
        <div class="invoice-content">
            <div class="invoice-header">
                <div class="logo">
                    <img src="<?= base_url('_assets/img/logo/logo.png') ?>" width="145" alt="Logo rumah laundry">
                </div>
                <?php foreach ($struk as $data): ?>
                    <div class="invoice-no_order">
                        <span>Invoice number :
                            <?= $data->or_ck_number ?>
                        </span>
                    </div>
                </div>

                <h4 style="text-align: center; color:#4d4d4d;">Bukti Transaksi</h4>

                <div class="invoice-body">
                    <table class="table-invoice">
                        <tr>
                            <th>Nama pelanggan</th>
                            <td>
                                <?= $data->nama_pel_ck ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nomor telepon</th>
                            <td>
                                <?= $data->no_telp_ck ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>
                                <?= $data->alamat_ck ?>
                            </td>
                        </tr>
                    </table>

                    <table class="table-invoice">
                        <tr>
                            <th>Tanggal order</th>
                            <td>
                                <?= $data->tgl_masuk_ck ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Diambil pada</th>
                            <td>
                                <?= $data->tgl_keluar_ck ?>
                            </td>
                        </tr>
                    </table>

                    <table class="tb_byr">
                        <tr>
                            <th class="tb_heading">Jenis paket</th>
                            <th class="tb_heading">Berat (Kg)</th>
                            <th class="tb_heading">Harga Per-kilo</th>
                        </tr>
                        <tr>
                            <td>
                                <?= $data->jenis_paket_ck ?>
                            </td>
                            <td>
                                <?= $data->berat_qty_ck . " Kg" ?>
                            </td>
                            <td>
                                <?= "Rp. " . $data->harga_perkilo . " x " . $data->berat_qty_ck ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="ub">Total</th>
                            <td class="ub-col">
                                <?= "Rp. " . $data->tot_bayar ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="ub">Nominal Bayar</th>
                            <td class="ub-col">
                                <?= "Rp. " . $data->nominal_byr ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="ub">Uang kembali</th>
                            <td class="ub-col">
                                <?= "Rp. " . $data->kembalian ?>
                            </td>
                        </tr>
                    </table>

                    <div class="ket">
                        <p><span>Keterangan : </span>
                            <?= $data->keterangan ?>
                        </p>
                    </div>
                <?php endforeach ?>
                <div class="invoice-footer">
                    <h3 class="foot_logo"><span>Rumah</span> Laundry</h3>
                    <p>Terima kasih telah menggunakan jasa kami.</p>
                </div>

            </div>
        </div>

        <div class="printbtn" id="btnPrint">
            <img src="<?= base_url('_assets/img/printer.svg') ?>" width="48" alt="print icon">
            <span>Cetak Invoice</span>
        </div>

        <a href="<?= base_url('riwayat_transaksi/riwayat.php') ?>" class="btn-back">Kembali</a>
    </div>

    <script>
        let print = document.getElementById('btnPrint');
        print.addEventListener('click', function () {
            return window.print();
        });
    </script>
</body>

</html>