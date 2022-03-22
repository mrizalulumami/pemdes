<?php

foreach ($pelanggan->result_array() as $a) {
	
?>

<!-- modal -->
<div id="acc-bayar-modal<?= $a['id_pembayaran']; ?>" class="modal">
    <div class="modal__content-bayar">

        <div class="modal-header mb-3">
            <h3 class="modal-title">Pembayaran Tunggakan</h3>
        </div>

        <div class="mt-2">

            <?= form_open_multipart('admin/acc_pembayaran'); ?>
            <input readomly type="hidden" id="id_pembayaran" name="id_pembayaran" value="<?=$a['id_pembayaran'];?>">
            <table>
                <tr>
                    <th>Nomor Pelanggan</th>
                    <th> : </th>
                    <th><?= $a['id_pelanggan']; ?></th>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th> : </th>
                    <th><?= $a['nama_pelanggan']; ?></th>
                </tr>
                <tr>
                    <th>Bulan</th>
                    <th> : </th>
                    <th><?= $a['bulan']; ?></th>
                </tr>
                <tr>
                    <th>Tahun</th>
                    <th> : </th>
                    <th><?= $a['tahun']; ?></th>
                </tr>
                <tr>
                    <th>Beban Meter</th>
                    <th> : </th>
                    <th><?= $a['pemakaian']; ?>/m<sup>3</sup></th>
                </tr>
                <tr>
                    <th>Total Tagihan</th>
                    <th> : </th>
                    <th>Rp. <?= $a['total_tagihan']; ?></th>
                </tr>
                <tr>
                    <th>Bayar</th>
                    <th> : </th>
                    <th>
                        <input type="number" class="form-control" value="0" id="bayar_tagihan" name="bayar_tagihan">
                    </th>
                </tr>
            </table>
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
<?php } ?>




<!-- end Modal -->
