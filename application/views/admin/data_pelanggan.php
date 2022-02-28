<main class="app-content">
        <div class="row mb-2">
            <div class="col-md-12">
                <h4>Cari Data Pelanggan</h4>
            </div>
            <div class="col-md-9">

                <div class="input-group mb-3">
                    <input type="text" class="form-control"
                        placeholder="Temukan nomor kartu, nama, atau status pelanggan.."
                        aria-label="Temukan nomor kartu, nama, atau status pelanggan..n"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci pl-3 pr-3" type="button" id="button-addon2">Cari
                            Data</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a href="#demo-modal" class="btn btn-suci"><i class="fa fa-plus"></i> Tambah Data</a>
                <!-- <a href="#" class="btn btn-suci"><i class="fa-solid fa-pencil"></i> Ubah Data</a> -->
                <div class="btn-group">
                    <button type="button" class="btn btn-suci dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        Status
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item green" href="#"><b>Sudah Bayar</b></a>
                        <a class="dropdown-item red" href="#"><b>Belum Bayar</b></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?= $this->session->flashData('message'); ?>
            <div class="col-md-12">
                <h4>Rincian Data Pelanggan</h4>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive tb-point">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                         <th>Nomor Pelanggan</th>
                                        <th>Nama Pelanggan</th>
										<th>Kategori</th>
                                        <th>Tunggakan</th>
                                        <th>Nominal Pembayaran</th>
                                        <th>Status</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									
									foreach ($pelanggan->result_array() as $a):
										$id_pelanggan=$a['id_pelanggan'];
										$nama_pelanggan=$a['nama_pelanggan'];
										// $tunggakan=$a['tunggakan'];
										$kategori=$a['kategori'];
										// $total_tagihan=$a['total_tagihan'];
										// $status=$a['status'];
								?>
                                    <tr>
                                        <td><?php echo $id_pelanggan;?></td>
                                        <td><?php echo $nama_pelanggan;?></td>
										<td><?php if($kategori == 'std'){
												echo 'Standar';}
											elseif($kategori =='kms'){
												echo 'Keluarga Miskin';}
											elseif($kategori =='ins'){
												echo 'Dinas / Instansi';}
											elseif($kategori == 'msj'){
												echo 'Mushola / Masjid';}?></td>
                                        <td></td>
                                        <td></td>
                                        <td class="green">Sudah Bayar</td>
										<td><center>
											<a href="#demo-modal" type="button"><i class="fas fa-edit"></i></a>
											|
											<a href="<?= base_url('pelanggan/delete_pelanggan/'). $a['id_pelanggan'];?>"><i class="fas fa-trash-alt" style="color: red"></i></a></center>
										</td>
                                    </tr>
									<?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>