<main class="app-content">
        <h4>Kartu Pelanggan PAMDES</h4>
        
		<form action="<?php echo base_url('admin/pembayaran');?>" method="POST">
        <div class="row mb-2">
            <div class="form-group tb-point">
				<div class="input-group mb-3">
					<select class="custom-select" name="tahun-search" id="tahun-search">
                        <option value="0" selected>Semua</option>
                        <?php
                        foreach ($tahun->result_array() as $dat):
                        ?>
                            <option value="<?= $dat['tahun'];?>"><?= $dat['tahun'];?></option>
                        <?php endforeach; ?>
					</select>
				</div>
			</div>
            <div class="col-md-7">
                <div class="input-group mb-3">
                    <input type="text" id="form_search" name="form_search" class="form-control penci" placeholder="Masukan nomor kartu pelanggan"
                        aria-label="Masukan nomor pelanggan" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci" type="submit" id="button-addon2">Akses Kartu</button>
                    </div>
                </div>
				
            </div>
        </form>
            <div class="col-md-3">
                <a href="#bayar-modal" class="btn btn-suci"><i class="fa fa-plus"></i>Data Pemakaian Pengguna</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Rincian Data Pembayaran</h4>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Nomor Pelanggan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Meter Awal</th>
                                    <th>Meter Akhir</th>
                                    <th>Pemakaian</th>
                                    <th>Tagihan bulan ini</th>
                                    <th>Bayar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
									
									foreach ($pelanggan->result_array() as $a):
								?>
                                <tr>
                                <td><?= $a['id_pelanggan']; ?></td>
                                <td><?= $a['nama_pelanggan']; ?></td>
                                <td><?= $a['bulan']; ?></td>
                                <td><?= $a['tahun']; ?></td>
                                <td><?= $a['meter_awal']; ?></td>
                                <td><?= $a['meter_akhir']; ?></td>
                                <td><?= $a['pemakaian']; ?> m<sup>3</sup></td>
                                <!-- total tagihan bulan ini -->
                                <td>Rp. <?= $a['total_tagihan']; ?></td>
                                <td>Rp. <?= $a['bayar']; ?></td>
                                <!-- penentuan status -->
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
                                   <center>
                                            <a <?= $a['bayar'] == $a['total_tagihan'] | $a['bayar'] >= $a['total_tagihan'] ? 'class="btn btn-light ml-auto disabled"' : 'class="btn btn-light ml-auto"' ?> href="#acc-bayar-modal<?= $a['id_pembayaran']; ?>"><i class="fa-solid fa-money-check-dollar"
                                                            style="color: green"></i>
                                                </a>
                                                <a <?= $a['bayar'] == $a['total_tagihan'] | $a['bayar'] >= $a['total_tagihan'] ? 'class="btn btn-light ml-auto"' : 'class="btn btn-light ml-auto disabled"' ?>
                                                    id=" cetakstruk"
                                                    href="<?= base_url('admin/printpdf/') . $a['id_pembayaran']; ?>"
                                                    type="button"><i class="fa-solid fa-print"></i></a>
                                                <a href="#modal-del_pembayaran<?= $a['id_pembayaran']; ?>"
                                                    class="btn btn-light ml-auto" type="button"><i class="fas fa-trash-alt"
                                                        style="color: red"></i></a>
                                   </center>
                                </td>
                                </tr>
								<?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12 d-flex ">
                <button type="button" class="btn btn-light ml-auto disabled">Cetak Total Struck</button>
            </div> -->
            <!-- modal -->
            <div id="demo-modal" class="modal">
                <div class="modal__content">
                    <div class="d-flex">
                        <img src="images/logo.png" width="30%" class="img-responsive mr-auto">
                        <h5>Sabtu, 12 Februari 2022, 22:37 WITA</h5>
                    </div>

                    <div class="mt-5">
                        <div class="d-flex">
                            <h5><b>Nomor Kartu</b></h5>
                            <h5 class="abu ml-5">0192837645332009217</h5>
                        </div>
                        <div class="d-flex">
                            <h5><b>Nama Pelanggan</b></h5>
                            <h5 class="abu ml-5">Fendi Ngilang</h5>
                        </div>
                        <div class="d-flex">
                            <h5><b>Nominal Pemabyaran</b></h5>
                            <h5 class="abu ml-5">Rp 120,000.00</h5>
                        </div>
                    </div>

                    <div class="mt-3 d-flex">
                        <button type="button" class="btn btn-outline-info ml-3">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Cetak StruckTransaksi
                        </button>
                        <button type="button" class="btn btn-outline-danger ml-3">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Batalkan Pembayaran
                        </button>
                    </div>


                    <a href="#" class="modal__close">&times;</a>
                </div>
            </div>
            <!-- end Modal -->
        </div>
    </main>
    
