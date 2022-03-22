<?php

foreach ($menu_we as $a) {
?>
<!-- modal -->
<div id="edit-modal-pma<?= $a['id'];?>" class="modal">
    <div class="modal__content-bayar">
        <div class="modal-header">
            <h5 class="modal-title">Edit Dana PMA</h5>
        </div>

        <div class="mt-3">

        <?= form_open_multipart('menu/edit_pma'); ?>
                <div class="form-group tb-point">
                    <input type="hidden" name="id" value="<?= $a['id'];?>" class="form-control" id="id">
                    <label for="exampleInputEmail1"><b>Nilai PMA</b></label>
                    <input type="text" name="pma" value="<?= $a['pma'];?>" class="form-control" id="pma">
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
<!-- end Modal -->
<?php }?>