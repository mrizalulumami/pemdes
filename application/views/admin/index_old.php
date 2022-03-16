<main class="app-content">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <center class="m-2">
          <div class="card" style="width: 18rem;">
            <div class="m-4">
              <img src="<?=base_url('assets/');?>images/ilus1.png" width="100%" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <center class="tb-point">
                <h3>Jumlah Pelanggan</h3>
                <h1><b><?= $j_pelanggan;?></b></h1>
              </center>
            </div>
          </div>
        </center>
        <!-- <div class="widget-small primary coloured-icon"><i class="icon fa-solid fa-users fa-3x"></i>
          <div class="info">
            <h4>Jumlah Pelanggan</h4>
            <p><b>2892</b></p>
          </div>
        </div> -->
      </div>
      <div class="col-md-6 col-lg-4">
        <center class="m-2">
          <div class="card" style="width: 18rem;">
            <div class="m-4">
              <img src="<?=base_url('assets/');?>images/ilus2.png" width="100%" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <center class="tb-point">
                <h3>Berkas Pembayaran</h3>
                <h1><b>56</b></h1>
              </center>
            </div>
          </div>
        </center>
      </div>
      
      <div class="col-md-6 col-lg-4">
        <center class="m-2">
          <div class="card" style="width: 18rem;">
            <div class="m-4">
              <img src="<?=base_url('assets/');?>images/ilus3.png" width="100%" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <center class="tb-point">
                <h3>Jumlah Admin</h3>
                <h1><b><?= $j_admin;?></b></h1>
              </center>
            </div>
          </div>
        </center>
        <!-- <div class="widget-small warning coloured-icon"><i class="icon fa-solid fa-user fa-3x"></i>
          <div class="info">
            <h4>Jumlah Admin</h4>
            <h3><b>2</b></h3>
          </div>
        </div> -->
      </div>
    </div>
    <div class="row mb-4 mt-2">
      <div class="col">
        <!-- <a href="#" class="btn btn-info btn-lg m-2"><i class="fa fa-plus-circle" aria-hidden="true"></i>Tambah Data
          Pelanggan</a>
        <a href="#" class="btn btn-secondary btn-lg m-2"><i class="fa fa-plus-circle" aria-hidden="true"></i>Tambah
          Admin
          Pamdes</a> -->
        <a href="#" class="btn btn-info btn-lg m-2 p-4"><i class="fa fa-print" aria-hidden="true"></i>Cetak Berkas
          Pelaporan</a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex">
          <h4>Riwayat Pembayaran Pelanggan</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="tile">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nomor Pelanggan</th>
                  <th>Nama Pelanggan</th>
                  <th>Nominal Pembayaran</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0192286571125107</td>
                  <td>Khafiz Hairy</td>
                  <td>Rp 150,000.00</td>
                  <td class="green">Sudah Bayar</td>
                </tr>
                <tr>
                  <td>0207644820982731</td>
                  <td>Ali Kopter</td>
                  <td>Rp 50,000.00</td>
                  <td class="green">Sudah Bayar</td>
                </tr>
                <tr>
                  <td>0195663901288213</td>
                  <td>0195663901288213</td>
                  <td>Rp 20,000.00</td>
                  <td class="green">Sudah Bayar</td>
                </tr>
                <tr>
                  <td>0218447263209918</td>
                  <td>Ical Starmaker</td>
                  <td>Rp 100,000.00</td>
                  <td class="green">Sudah Bayar</td>
                </tr>
                <tr>
                  <td>0219273648823761</td>
                  <td>Agi Warawiri</td>
                  <td>Rp 200,000.00</td>
                  <td class="green">Sudah Bayar</td>
                </tr>
                <tr>
                  <td>0229466472001238</td>
                  <td>Erwin Edi Mulyadi</td>
                  <td>Rp 500,000.00</td>
                  <td class="green">Sudah Bayar</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>