<main class="app-content">
    <div class="row">
        <div class="col-lg-3">
            <center class="m-2">
                <div class="card" style="width: 18rem;">
                    <div class="m-4">
                        <img src="<?= base_url('assets/'); ?>images/ilus1.png" width="100%" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <center class="tb-point">
                            <h3>Jumlah Pelanggan</h3>
                            <h1><b><?= $j_pelanggan; ?></b></h1>
                        </center>
                    </div>
                </div>
            </center>
            <!-- <div class="widget-small primary coloured-icon"><i class="icon fa-solid fa-users fa-3x"></i>
          <div class="info">
            <h4>Jumlah Pelanggan</h4>
            <p><b>2892</b></p>
          </div>
        </div> -->
        </div>
        <div class="col-lg-3">
            <center class="m-1">
                <div class="card" style="width: 18rem;">
                    <div class="m-4">
                        <img src="<?= base_url('assets/'); ?>images/ilus2.png" width="100%" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <center class="tb-point">
                            <h3>Berkas Pembayaran</h3>
                            <?php 
                                foreach ($berkas1 as $b1):
                            ?>
                            <h1><b><?= $b1['total']; ?></b></h1>
                            <?php endforeach;?>
                        </center>
                    </div>
                </div>
            </center>
        </div>
        <div class="col-lg-3">
            <center class="m-2">
            <div class="card" style="width: 18rem;">
                <div class="m-4">
                <img src="<?=base_url('assets/');?>images/ilus2.png" width="100%" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                <center class="tb-point">
                    <h3>Berkas Pelanggan</h3>
                            <?php 
                                foreach ($berkas2 as $b2):
                            ?>
                            <h1><b><?= $b2['total']; ?></b></h1>
                            <?php endforeach;?>
                </center>
                </div>
            </div>
            </center>
        </div>
        <div class="col-lg-3">
            <center class="m-2">
                <div class="card" style="width: 18rem;">
                    <div class="m-4">
                        <img src="<?= base_url('assets/'); ?>images/ilus3.png" width="100%" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <center class="tb-point">
                            <h3>Jumlah Admin</h3>
                            <h1><b><?= $j_admin; ?></b></h1>
                        </center>
                    </div>
                </div>
            </center>
            <!-- <div class="widget-small warning coloured-icon"><i class="icon fa-solid fa-user fa-3x"></i>
          <div class="info">
            <h4>Jumlah Admin</h4>
            <h3><b>2</b></h3>
          </div>
        </div> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <h4>Riwayat Pembayaran Pelanggan</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tile">
                <div class="table-responsive">
                    <table class="table" id="tabel_julu">
                        <thead>
                            <tr>
                                <th>Nomor Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>Nominal Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

							foreach ($pelanggan->result_array() as $a) :
							?>
                            <tr>
                                <td><?= $a['id_pelanggan']; ?></td>
                                <td><?= $a['nama_pelanggan']; ?></td>
                                <td><?= $a['bayar']; ?></td>
                                <td>
                                    <?php
										if ($a['total_tagihan'] == $a['bayar']) {
											echo '<p style="color:#55ff00;">Lunas</p>';
										} else if ($a['bayar'] < $a['total_tagihan']) {
											echo '<p style = "color: #ff0000;">Belum Lunas</p>';
										} else if ($a['bayar'] > $a['total_tagihan']) {
											echo '<p style="color:#55ff00;">Lunas</p>';
										}else {
											echo '<p style = "color: #ff0000;">Belum Lunas</p>';
										} ?></td>
                                <td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <h4>Jumlah Data Pelanggan Berdasarkan Desa, Kecamatan</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tile">
                <div class="table-responsive">
                    <table class="table" id="tabel_jumdes">
                        <thead>
                            <tr>
                                <th>Nama Desa</th>
                                <th>Kecamatan</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

							foreach ($pelanggan_desa as $a) :
							?>
                            <tr>
                                <td><?= $a['desa']; ?></td>
                                <td><?= $a['kecamatan']; ?></td>
                                <td><?= $a['total']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
    </div>
</main>