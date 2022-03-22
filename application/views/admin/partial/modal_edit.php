<?php

foreach ($pelanggan->result_array() as $a) {
	// $id_pelanggan = $a['id_pelanggan'];
	// $nama_pelanggan = $a['nama_pelanggan'];
	// $j_kelamin = $a['j_kelamin'];
	// $desa = $a['desa'];
	// $kecamatan = $a['kecamatan'];
	// $rt = $a['rt'];
	// $rw = $a['rw'];
	// $kategori = $a['kategori'];
	// $meter_pertama = $a['meter_pertama'];
	// $tggl_pemasangan = $a['tggl_pemasangan'];
?>
<!-- modal -->
<div id="edit-modal<?= $a['id_pelanggan']; ?>" class="modal">
    <div class="modal__content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data Pelanggan</h5>
        </div>

        <div class="mt-3">

            <?= form_open_multipart('pelanggan/edit_pelanggan'); ?>
            <div class="form-row">
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Id Pelanggan</b></label>
                        <input readonly type="text" name="id_pelanggan" value="<?= $a['id_pelanggan'] ?>"
                            class="form-control" id="id_pelanggan" aria-describedby="emailHelp" readonly>
                        <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
                        <input type="text" name="nama_pelanggan" value="<?= $a['nama_pelanggan'] ?>"
                            class="form-control" id="nama_pelanggan" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Jenis Kelamin</b></label>
                        <input readonly type="text" name="j_kelamin" value="<?= $a['j_kelamin'] ?>" class="form-control"
                            id="j_kelamin" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <!-- <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Alamat</b></label>
                        <input type="text" name="nama_pelanggan" placeholder="Tulis nama lengkap pelanggan"
                            class="form-control" id="nama_pelanggan" aria-describedby="emailHelp">
                    </div>
                </div> -->
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>RW</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="rw" id="rw">
                                <option selected>Pilih RW</option>
                                <?php
                                    foreach ($menu_rw as $d) :
                                ?>
                                <option value="<?= $d['alamat'];?>"><?= $d['alamat'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Desa</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="desa" id="desa">
                                <option selected><?= $a['desa'] ?></option>
                                <?php
                                    foreach ($menu_desa as $d) :
                                ?>
                                <option value="<?= $d['desa'];?>"><?= $d['desa'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Kecamatan</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="kecamatan" id="kecamatan">
                                <option selected><?= $a['kecamatan'] ?></option>
                                <?php
                                    foreach ($menu_kecamatan as $d) :
                                ?>
                                <option value="<?= $d['kecamatan'];?>"><?= $d['kecamatan'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Kategori</b></label>
                        <input readonly type="text" name="kategori" value="<?=$a['kategori']?>" class="form-control" id="kategori" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Pilih Tanggal</b></label>
                        <input type="date" name="tggl_pemasangan" value="<?= $a['tggl_pemasangan'] ?>"
                            class="form-control" id='datepicker' placeholder='Pilih Tanggal' style='width: 100%;'>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto mt-4">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="#" class="ml-1 btn btn-warning">Batal</a>
                </div>
            </div>




        </div>

        </form>

    </div>
</div>
</div>
<?php } ?>
<!-- end Modal -->