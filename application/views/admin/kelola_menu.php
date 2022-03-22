<main class="app-content">
    <div class="form-row">
        <div class="col">
            <div class="tile">
                <div class="table-responsive">
                    <h4>Kelola Harga Air Perkubik</h4>
                    <table class="table" id="tabel_air">
                        <thead>
                            <tr>
                                <th>Harga Air Perkubik</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($menu_we as $a) :
                            ?>
                            <tr>
                                <td><?= $a['harga_air'];?></td>
                                <td><a href="#edit-modal-air<?= $a['id']; ?>" type="button"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="tile">
                <div class="table-responsive">
                    <h4>Kelola Dana PMA</h4>
                    <table class="table" id="tabel_pma">
                        <thead>
                            <tr>
                                <th>Dana PMA</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($menu_we as $a) :
                            ?>
                            <tr>
                                <td><?= $a['pma'];?></td>
                                <td><a href="#edit-modal-pma<?= $a['id']; ?>" type="button"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="tile">
                <div class="table-responsive">
                    <h4>Kelola Dana Beban</h4>
                    <table class="table" id="tabel_beban">
                        <thead>
                            <tr>
                                <th>Beban</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($menu_we as $a) :
                            ?>
                            
                            <tr>
                                <td><?= $a['beban'];?></td>
                                <td><a href="#edit-modal-beban<?= $a['id']; ?>" type="button"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <div class="tile">
                <div class="table-responsive">
                    <h4>Kelola Data RW</h4>
                    <table class="table" id="tabel_rw">
                        <a href="#modal-tambah-rw" class="btn btn-suci"><i class="fa fa-plus"></i> Tambah Data</a>
                        <thead>
                            <tr>
                                <th>RW</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($menu_rw as $a) :
                            ?>
                            <tr>
                                <td><?= $a['alamat'];?></td>
                                <td>
                                    <a href="#edit-modal-rw<?= $a['id']; ?>" type="button"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="#modal-delete-rw<?= $a['id']; ?>" type="button"><i class="fas fa-trash-alt"
                                            style="color: red"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="tile">
                <div class="table-responsive">
                    <h4>Kelola Data Desa</h4>
                    <table class="table" id="tabel_desa">
                        <a href="#modal-tambah-desa" class="btn btn-suci"><i class="fa fa-plus"></i> Tambah Data</a>
                        <thead>
                            <tr>
                                <th>Desa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($menu_desa as $a) :
                            ?>
                            <tr>
                                <td><?= $a['desa']?></td>
                                <td>
                                    <a href="#edit-modal-desa<?= $a['id']; ?>" type="button"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="#modal-delete-desa<?= $a['id']; ?>" type="button"><i class="fas fa-trash-alt"
                                            style="color: red"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="tile">
                <div class="table-responsive">
                    <h4>Kelola Data Kecamatan</h4>
                    <table class="table" id="tabel_kecamatan">
                        <a href="#modal-tambah-kecamatan" class="btn btn-suci"><i class="fa fa-plus"></i> Tambah
                            Data</a>
                        <thead>
                            <tr>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($menu_kecamatan as $a) :
                            ?>
                            <tr>
                                <td><?= $a['kecamatan']?></td>
                                <td>
                                    <a href="#edit-modal-kecamatan<?= $a['id']; ?>" type="button"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="#modal-delete-kecamatan<?= $a['id']; ?>" type="button"><i class="fas fa-trash-alt"
                                            style="color: red"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>