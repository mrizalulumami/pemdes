<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/vendor/bootstrap.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>Struk Pembayaran</title>
  </head><body>
    <?php foreach ($pdf_print as $a) : ?>
    <div class="container">
      <center>
        <img src="<?= base_url('assets/');?>images/Logo.png" alt="" />
      </center>
      <center>
        <span>(BUKTI PEMBAYARAN TAGIHAN PAMDES PRINGGASELA)</span>
      </center>
      <center class="mb-2">
        <span><b>Sabtu, 5 Maret 2022</b></span>
      </center>
      <hr class="m-0" style="border: 2px solid #000" />
      <div class="row mt-2">
        <div class="col-3">
          <table>
            <tr>
              <th>No Kartu</th>
            </tr>
            <tr>
              <th>Nama</th>
            </tr>
            <tr>
              <th>Pembayaran Bulan</th>
            </tr>
          </table>
        </div>
        <div class="col-2">
          <table>
            <tr>
              <th>: <?=$a['id_pelanggan'];?></th>
            </tr>
            <tr>
              <th>: <?=$a['nama_pelanggan'];?></th>
            </tr>
            <tr>
              <th>: <?=$a['bulan'];?></th>
            </tr>
          </table>
        </div>
        <div class="col-3">
          <table>
            <tr>
              <th>Pemakaian</th>
            </tr>
            <tr>
              <th>Total Pemakaian</th>
            </tr>
            <tr>
              <th>Total Tagihan</th>
            </tr>
            <tr>
              <th>Status</th>
            </tr>
          </table>
        </div>
        <div class="col-2">
          <table>
            <tr>
              <th>: <?= $a['beban'];?>/m<sup>3</sup></th>
            </tr>
            <tr>
              <th>: Rp. <?= ($a['beban'])*$perkubik;?></th>
            </tr>
            <?php $total=($a['beban'])*$perkubik;?>
            <tr>
              <th>: Rp. <?=$a['bayar'];?></th>
            </tr>
            <tr>
                <th>
                <?php
                if($total == $a['bayar']){
                    echo '<p style="color:#55ff00;">: Lunas</p>';
                }
                else if($a['bayar'] < $total){
                    echo '<p style = "color: #ff0000;">: Belum Lunas</p>';
                }
                else{
                    echo '<p style = "color: #ff0000;">: Belum Lunas</p>';
                }?>
                </th>
            </tr>
          </table>
        </div>
      </div>
      <hr class="m-0" style="border: 2px solid #000" />
      <div class="text-center">
        <h5>
          PAMDES menyatakan struk ini sebagai bukti pembayaran yang sah, mohon
          di simpan dengan baik
        </h5>
        <h5>Terima Kasih</h5>
        <h5>Atas Kepercayaan Anda</h5>
      </div>
    </div>
    <h5>
      <i class="fa-solid fa-scissors"></i
      >======================================================================
    </h5>
    <?php endforeach; ?>
  </body></html>