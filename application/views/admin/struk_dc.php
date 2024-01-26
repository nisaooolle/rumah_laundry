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
                    <img style="width: 200px;"
                        src="https://dtdrycleaning.wpengine.com/wp-content/themes/dry-cleaning/images/logo.png"
                        alt="Dry Cleaning" title="Dry Cleaning" />
                    </a>
                </div>
                <?php foreach ($struk as $order_data): ?>
                    <div class="invoice-no_order">
                        <span>Invoice number :
                            <?= $order_data->or_dc_number ?>
                        </span>
                    </div>
                </div>

                <h4 style="text-align: center; color:#4d4d4d;">Bukti Transaksi</h4>

                <div class="invoice-body">
                    <table class="table-invoice">
                        <tr>
                            <th>Nama pelanggan : </th>
                            <td>
                                <?= $order_data->nama_pel_dc ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nomor telepon : </th>
                            <td>
                                <?= $order_data->no_telp_dc ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat : </th>
                            <td>
                                <?= $order_data->alamat_dc ?>
                            </td>
                        </tr>
                    </table>

                    <table class="table-invoice">
                        <tr>
                            <th>Tanggal order : </th>
                            <td>
                                <?= $order_data->tgl_masuk_dc ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Diambil pada : </th>
                            <td>
                                <?= $order_data->tgl_keluar_dc ?>
                            </td>
                        </tr>
                    </table>

                    <table class="tb_byr">
                        <tr>
                            <th class="tb_heading">Jenis paket : </th>
                            <th class="tb_heading">Berat (Kg) : </th>
                            <th class="tb_heading">Harga Per-kilo : </th>
                        </tr>
                        <tr>
                            <td>
                                <?= $order_data->jenis_paket_dc ?>
                            </td>
                            <td>
                                <?= $order_data->berat_qty_dc . " Kg" ?>
                            </td>
                            <td>
                                <!-- <?= "Rp. " . $order_data->harga_perkilo . " x " . $order_data->berat_qty_dc ?> -->
                                <?php
                                if ($order_data->harga_perkilo !== null) {
                                    echo 'Rp. ' . number_format($order_data->harga_perkilo, 2) . " x " . $order_data->berat_qty_dc;
                                } else {
                                    echo 'Rp. 0.00';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="ub">Total : </th>
                            <td class="ub-col">
                                <?php
                                if ($order_data->tot_bayar !== null) {
                                    echo 'Rp. ' . number_format($order_data->tot_bayar, 2);
                                } else {
                                    echo 'Rp. 0.00';
                                }
                                ?>
                            </td>
                        </tr>
                        <!-- <tr>
                            <th colspan="2" class="ub">Nominal Bayar</th>
                            <td class="ub-col">
                                <?= "Rp. " . $order_data->nominal_byr ?>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="ub">Uang kembali</th>
                            <td class="ub-col">
                                <?= "Rp. " . $order_data->kembalian ?>
                            </td>
                        </tr> -->
                    </table>

                    <div class="ket">
                        <p><span>Keterangan : </span>
                            <?= $order_data->keterangan_dc ?>
                        </p>
                    </div>
                <?php endforeach ?>
                <div class="invoice-footer">
                    <h3 class="foot_logo"><span>Dry </span> Cleaning</h3>
                    <p>Terima kasih telah menggunakan jasa kami.</p>
                </div>

            </div>
        </div>

        <div class="printbtn" id="btnPrint">
            <img src="<?= base_url('_assets/img/printer.svg') ?>" width="48" alt="print icon">
            <span>Cetak Invoice</span>
        </div>

        <a href="<?= base_url('admin/riwayat') ?>" class="btn-back">Kembali</a>
    </div>
    <script>
        let print = document.getElementById('btnPrint');
        print.addEventListener('click', function () {
            return window.print();
        });
    </script>
</body>

</html>