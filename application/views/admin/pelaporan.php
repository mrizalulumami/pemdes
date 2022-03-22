<main class="app-content">
        <div class="row mb-2">
            <div class="col-md-12">
                <h4>Daftar Berkas Pelaporan</h4>
                <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Temukan Berkas Terkait"
                        aria-label="Temukan Berkas Terkait" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci" type="submit" id="button-addon2">Cari Berkas</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Rincian Data Pelanggan</h4>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Nama Berkas</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah Data</th>
                                    <th>Update terakhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                           

                            <?php

                                foreach ($laporan_pelanggan->result_array() as $a) :
                                ?>
                                    <tr>
                                        <td>Data Pelanggan <?= $a['tahun_pemasangan']; ?></td>
                                        <td>Berisi data pelanggan PAMDES Pringgasela tahun <?= $a['tahun_pemasangan']; ?></td>
                                        <td><?= $a['total']; ?> Data</td>
                                        <td>Dimodifikasi pada tahun <?= $a['tahun_pemasangan']; ?></td>
                                        <td>
                                            <a type="button" href="<?= base_url('admin/export_excell/').$a['tahun_pemasangan'];?>">Download</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Rincian Data Pembayaran</h4>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable2">
                            <thead>
                                <tr>
                                    <th>Nama Berkas</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah Data</th>
                                    <th>Update terakhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                           

                            <?php

                                foreach ($laporan_pembayaran->result_array() as $a) :
                                ?>
                                    <tr>
                                        <td>Data pembayaran bulan <?= $a['bulan']; ?></td>
                                        <td>Berisi data pembayaran PAMDES Pringgasela tahun <?= $a['tahun']; ?></td>
                                        <td><?= $a['total']; ?> Data</td>
                                        <td>Dimodifikasi pada tahun <?= $a['tahun']; ?></td>
                                        <td>
                                            <a type="button" href="<?= base_url('admin/export_excell2/').$a['bulan'];?>">Download</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>