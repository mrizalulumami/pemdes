<main class="app-content">
        <div class="row mb-2">
            <div class="col-md-12">
                <h4>Kartu Pelanggan PAMDES</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan nomor kartu pelanggan"
                        aria-label="Masukan nomor kartu pelanggan" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci" type="button" id="button-addon2">Akses Kartu</button>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor Kartu</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tunggakan</th>
                                    <th>Nominal Pembayaran</th>
                                    <th>Status</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex ">
                <button type="button" class="btn btn-light ml-auto disabled">Cetak Struck Transaksi</button>
                <a href="#demo-modal" type="button" class="btn btn-light ml-2">konfirmasi Pembayaran</a>
            </div>
            <!-- modal -->
            <div id="demo-modal" class="modal">
                <div class="modal__content">
                    <div class="d-flex">
                        <img src="images/logo.png" width="30%" class="img-responsive mr-auto">
                        <h5>Sabtu, 12 Februari 2022, 22:37 WITA</h5>
                    </div>

                    <div class="mt-5">
                        <div class="d-flex">
                            <h5><b>Nomor Kartu</b></h5>
                            <h5 class="abu ml-5">0192837645332009217</h5>
                        </div>
                        <div class="d-flex">
                            <h5><b>Nama Pelanggan</b></h5>
                            <h5 class="abu ml-5">Fendi Ngilang</h5>
                        </div>
                        <div class="d-flex">
                            <h5><b>Nominal Pemabyaran</b></h5>
                            <h5 class="abu ml-5">Rp 120,000.00</h5>
                        </div>
                    </div>

                    <div class="mt-3 d-flex">
                        <button type="button" class="btn btn-outline-info ml-3">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Cetak StruckTransaksi
                        </button>
                        <button type="button" class="btn btn-outline-danger ml-3">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Batalkan Pembayaran
                        </button>
                    </div>


                    <a href="#" class="modal__close">&times;</a>
                </div>
            </div>
            <!-- end Modal -->
        </div>
    </main>