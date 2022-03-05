<main class="app-content">
        <h4>Kartu Pelanggan PAMDES</h4>
        <div class="row mb-2">
            <div class="btn-group">
                <button type="button" class="btn btn-suci dropdown-toggle" data-toggle="dropdown"
                    aria-expanded="false">
                    Pilih Tahun
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item red" href="#"><b>2018</b></a>
                    <a class="dropdown-item red" href="#"><b>2019</b></a>
                    <a class="dropdown-item red" href="#"><b>2020</b></a>
                    <a class="dropdown-item red" href="#"><b>2021</b></a>
                    <a class="dropdown-item red" href="#"><b>2022</b></a>
                </div>
            </div>
            <div class="col-md-7">
               
				<form action="<?php echo base_url('admin/pembayaran');?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" id="form_search" name="form_search" class="form-control" placeholder="Masukan nomor kartu pelanggan"
                        aria-label="Masukan nomor pelanggan" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci" type="submit" id="button-addon2">Akses Kartu</button>
                    </div>
                </div>
				</form>
            </div>
            <div class="col-md-3">
                <a href="tambah-pelanggan.html" class="btn btn-suci"><i class="fa fa-plus"></i>Data Beban Pengguna</a>
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
                                    <th>Beban</th>
                                    <th>Tagihan bulan ini</th>
                                    <th>Bayar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
									
									foreach ($pelanggan->result_array() as $a):
										// $id_pelanggan=$a['id_pelanggan'];
										// $nama_pelanggan=$a['nama_pelanggan'];
										// $desa=$a['desa'];
										// $kecamatan=$a['kecamatan'];
										// $kategori=$a['kategori'];
										// $rt=$a['rt'];
										// $rw=$a['rw'];
										// $tggl_pemasangan=$a['tggl_pemasangan'];
								?>
                                <tr>
                                    <td><?= $a['id_pelanggan'];?></td>
                                    <td><?= $a['nama_pelanggan'];?></td>
                                    <td><?= $a['bulan'];?></td>
                                    <td><?= $a['tahun'];?></td>
                                    <td><?= $a['beban'];?>/m<sup>3</sup></td>
                                    <!-- total tagihan bulan ini -->
                                    <td>Rp. <?= ($a['beban'])*$perkubik;?></td>
                                    <!-- variabel total -->
                                    <?php $total=($a['beban'])*$perkubik;
                                    ?>
                                    <td>Rp. <?=$a['bayar'];?></td>
                                    <!-- penentuan status -->
                                    <td>
                                    <?php
                                    if($total == $a['bayar']){
                                        echo '<p style="color:#55ff00;">Lunas</p>';
                                    }
                                    else if($a['bayar'] < $total){
                                        echo '<p style = "color: #ff0000;">Belum Lunas</p>';
                                    }
                                    else{
                                        echo '<p style = "color: #ff0000;">Belum Lunas</p>';
                                    }?></td>
                                    <td>
                                        <button <?= $a['bayar'] == $total ? 'class="btn btn-light ml-auto disabled"' : 'class="btn btn-light ml-auto"' ?> id="cetakstruk" type="button" >Bayar</button>
                                        |
                                        <a <?= $a['bayar'] == $total ? 'class="btn btn-light ml-auto"' : 'class="btn btn-light ml-auto disabled"' ?> id="cetakstruk" href="<?= base_url('admin/printpdf/') . $a['id_pembayaran']; ?>" type="button" >Cetak Struck</a>
                                    </td>
                                </tr>
								<?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex ">
                <button type="button" class="btn btn-light ml-auto disabled">Cetak Total Struck</button>
                <!-- <a href="#demo-modal" type="button" class="btn btn-light ml-2">konfirmasi Pembayaran</a> -->
            </div>
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
