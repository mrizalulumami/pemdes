<!-- modal -->
<div id="demo-modal" class="modal">
    <div class="modal__content">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Data Pelanggan</h5>
        </div>

        <div class="mt-3">

            <?= form_open_multipart('pelanggan/tambah_pelanggan'); ?>
            <div class="form-group tb-point">
                <label for="exampleInputEmail1"><b>Id Pelanggan</b></label>
                <input type="text" name="id_pelanggan" value="<?= $kodeunik; ?>" class="form-control" id="id_pelanggan"
                    aria-describedby="emailHelp" readonly>
                <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">,</small>'); ?>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
                        <input type="text" name="nama_pelanggan" placeholder="Tulis nama lengkap pelanggan"
                            class="form-control" id="nama_pelanggan" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Jenis Kelamin</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="j_kelamin" id="j_kelamin">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="L">Laki- Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
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
                                <!-- <option value="Pringgasela">Pringgasela</option>
                                <option value="Pringgasela Selatan">Pringgasela Selatana</option> -->
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point">
                        <label for="exampleInputEmail1"><b>Desa</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="desa" id="desa">
                                <option selected>Pilih Desa</option>
                                <?php
                                    foreach ($menu_desa as $d) :
                                ?>
                                <option value="<?=$d['desa']?>"><?=$d['desa']?></option>
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
                                <option selected>Kecamatan</option>
                                <?php
                                    foreach ($menu_kecamatan as $d) :
                                ?>
                                <option value="<?=$d['kecamatan']?>"><?=$d['kecamatan']?></option>
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
                        <div class="input-group mb-3">
                            <select class="custom-select" name="kategori" id="kategori">
                                <option selected>Pilih Kategori</option>
                                <?php
                                    foreach ($menu_ktg as $d) :
                                ?>
                                <option value="<?=$d['kategori']?>"><?=$d['kategori']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Tanggal Daftar</b></label>
                        <input type="date" name="tggl_pemasangan" class="form-control" id='datepicker'
                            placeholder='Pilih Tanggal' style='width: 100%;'>
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
<!-- end Modal -->