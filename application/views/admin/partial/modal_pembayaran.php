<!-- modal -->
<div id="bayar-modal" class="modal">
    <div class="modal__content">

        <div class="modal-header">
            <h3 class="modal-title">Tambah Data Beban Meter</h3>
        </div>

        <div class="mt-1">

        <?= form_open_multipart('pelanggan/tambah_beban'); ?>
                <table id="mudak" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Pelanggan</th>
                        <th>Nama pengguna</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($pelanggan_woe->result_array() as $d):
                    ?>
                    <tr>
                        <td><a id="data" onClick="masuk(this,'<?= $d['id_pelanggan'];?>','<?= $d['nama_pelanggan'];?>')" href="javascript:void(0)"><?= $d['id_pelanggan'];?></a></td>
                        <td><?= $d['nama_pelanggan'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            <div class="form-group tb-point mt-2">
                <label for="exampleInputEmail1"><b>Id Pelanggan (Read only)</b></label>
                <input readonly type="text" name="id_pelanggan" value="" class="form-control" id="id_pelanggan"
                    aria-describedby="emailHelp" readonly>
                <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">,</small>'); ?>
            </div>
            <div class="form-group tb-point">
                <label for="exampleInputEmail1"><b>Nama Lengkap (Read only)</b></label>
                <input type="text" name="nama_pelanggan" readonly value="" class="form-control" id="nama_pelanggan"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Bulan</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="bulan" id="bulan">
                                <option selected>Pilih Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Beban Meter</b></label>
                        <input type="number" class="form-control qty" value="0" id="beban" name="beban">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Total Tagihan</b></label>
                        <input type="text" readonly value="0" name="total_tagihan" class="form-control"
                            id="total_tagihan">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Tahun</b></label>
                        <input type="number" name="tahun" placeholder="Tulis tahun tunggakan" class="form-control"
                            id="tahun" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto mt-4">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="#" class="btn btn-warning">Batal</a>
                </div>
            </div>



        </div>











        </form>
    </div>
</div>
</div>
<!-- end Modal -->