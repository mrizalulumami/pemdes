<!-- modal -->
<div id="modal-tambah-desa" class="modal">
    <div class="modal__content-bayar">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Data Desa</h5>
        </div>

        <div class="mt-3">

        <?= form_open_multipart('menu/tambah_desanya'); ?>
                <div class="form-group tb-point">
                    <label for="exampleInputEmail1"><b>Nama Desa</b></label>
                    <input type="text" name="desa" value="" class="form-control" id="desa">
                </div>
        </div>
        <div class="d-flex">
            <div class="ml-auto mt-4">
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="#" class="ml-1 btn btn-warning">Batal</a>
            </div>
        </div>
        </form>

    </div>

</div>
</div>
<!-- end Modal -->