<main class="app-content">
        <div class="row mb-2">
            <div class="col-md-12">
                <h4>Daftar Berkas Pelaporan</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Temukan Berkas Terkait"
                        aria-label="Temukan Berkas Terkait" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci" type="button" id="button-addon2">Cari Berkas</button>
                    </div>
                </div>
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
                                    <th>Tanggal</th>
                                    <th>Unduh</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
									foreach ($laporan->result_array() as $a):
							?>
                                <tr>
                                    <td>Data Pelanggan <?= $a=['tahun'];?></td>
                                    <td>Berisi data pelanggan PAMDES Pringgasela tahun <?= $a=['tahun'];?></td>
                                    <td>Dimodifikasi pada <?= $a=['update_at'];?></td>
                                    <td>
                                        <a type="button" href="<?=$a['admin/export_excell/'].$a['tahun'];?>">Excel (.xls)</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- pagination -->
                <div class="d-flex">
                    <div class="mx-auto">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item jarak">
                                    <a class="page-link" href="#">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item jarak"><a class="page-link" href="#">1</a></li>
                                <li class="page-item jarak"><a class="page-link" href="#">2</a></li>
                                <li class="page-item jarak"><a class="page-link" href="#">3</a></li>
                                <li class="page-item jarak">
                                    <a class="page-link" href="#">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- end paginations -->
            </div>
        </div>
    </main>