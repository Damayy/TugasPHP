<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <div class="card-title text-white">
                                <h2>Form Belanja</h2>
                            </div>
                            <form action="tugas2.php" method="post">
                                <div class="card-body bg-white">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputNamaPelanggan">NamaPelanggan</label>
                                                <input type="text" name="namaPelanggan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="produkList">Produk</label>
                                                <select name="produk" id="produkList" class="form-control">
                                                    <option value="">--- Pilih Produk ---</option>
                                                    <option value="TV">TV</option>
                                                    <option value="Kulkas">Kulkas</option>
                                                    <option value="Mesin Cuci">Mesin Cuci</option>
                                                    <option value="AC">AC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="jumlahBeli">Jumlah Beli</label>
                                                <input type="number" name="jmlBeli" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <div class="form-group row">
                                        <button class="btn btn-primary" name="proses" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 align="center">Informasi Belanja</h3>
                            </div>
                            <div class="card-body">
                                <?php

                                error_reporting(0);
                                $nama = $_POST['namaPelanggan'];
                                $listProduk = $_POST['produk'];
                                $jmlBeli = (int)$_POST['jmlBeli'];
                                $proses = $_POST['proses'];

                                $hargaSatuan = 0;

                                if ($listProduk == "TV") {
                                    $hargaSatuan = 1250000;
                                } else if ($listProduk == "Kulkas") {
                                    $hargaSatuan = 3000000;
                                } else if ($listProduk == "Mesin Cuci") {
                                    $hargaSatuan = 3500000;
                                } elseif ($listProduk == "AC") {
                                    $hargaSatuan = 2000000;
                                } else "List Produk Kosong";


                                $totalBelanja = $jmlBeli * $hargaSatuan; //hitung Total belanja
                                $diskon = 0.2 * $totalBelanja; // hitung diskon
                                $ppn = 0.1 * ($totalBelanja - $diskon); // hitung PPN
                                $hargaBersih = ($totalBelanja - $diskon) + $ppn; // hitung Harga bersih

                                if (isset($proses)) { ?>

                                    <h3>Nama Pelanggan: <?php echo $nama ?></h3>
                                    <h3>Produk Pilihan: <?php echo $listProduk ?></h3>
                                    <h3>Jumlah Beli: <?php echo $jmlBeli ?></h3>
                                    <h3>Total Belanja: Rp. <?php echo number_format($totalBelanja, 0, ',', '.')  ?></h3>
                                    <h3>Potongan Diskon: Rp. <?php echo number_format($diskon, 0, ',', '.') ?></h3>
                                    <h3>PPN: Rp. <?php echo number_format($ppn, 0, ',', '.') ?></h3>
                                    <h3>Harga Bersih: Rp.<?php echo number_format($hargaBersih, 0, ',', '.') ?></h3>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>