<!-- modal -->
<div id="test-modal" class="modal">
    <div class="modal__content">
            <div class="modal-header">
                <h4 class="modal-title">Data Pelanggan</h4>
            </div>
            <div class="modal-body">
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
                    <tr id="data" onClick="masuk(this,'<?= $d['id_pelanggan'];?>')" href="javascript:void(0)">
                        <td><a id="data" onClick="masuk(this,'MHS001')" href="javascript:void(0)"><?= $d['id_pelanggan'];?></a></td>
                        <td><?= $d['nama_pelanggan'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>
<!-- end Modal -->