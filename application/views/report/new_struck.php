<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="css/vendor/bootstrap.min.css" /> -->
  <!-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" /> -->

  <!-- style asu -->
  <style>
    .d-flex {
      display: -ms-flexbox !important;
      display: flex !important
    }

    .m-0 {
      margin: 0 !important
    }
  </style>
  <title>Struk Pembayaran</title>

</head><body>
    <?php foreach ($pdf_print as $a) : ?>
  <!-- bates ne -->
  <center>
    <span>(BUKTI PEMBAYARAN TAGIHAN PAMDES PRINGGASELA)</span>
  </center>
  <center>
    <span><b><?= $a['create_at'];?></b></span>
  </center>
  <hr style="border: 2px solid #000" />
  <center>
    <table>
      <thead>
        <tr>
          <th align="left" scope="col">No Katru</th>
          <th align="left" scope="col">: <?=$a['id_pelanggan'];?></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th align="left" scope="col">Pemakaian</th>
          <th align="left" scope="col">: <?= $a['beban'];?>/m<sup>3</sup></th>
        </tr>
        <tr>
          <th align="left" scope="col">Nama </th>
          <th align="left" scope="col">: <?=$a['nama_pelanggan'];?> </th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th align="left" scope="col">Total Bayar </th>
          <th align="left" scope="col">: Rp. <?= ($a['total_tagihan']);?></th>
        </tr>
        <tr class="m-0">
          <th align="left" scope="col">Pembayaran Bulan </th>
          <th align="left" scope="col">: <?=$a['bulan'];?></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th align="left" scope="col">Status </th>
          
          <th align="left" scope="col"><?php
                if($a['total_tagihan'] == $a['bayar']){
                    echo '<p style="color:#55ff00;">: Lunas</p>';
                }
                else if($a['bayar'] < $a['total_tagihan']){
                    echo '<p style = "color: #ff0000;">: Belum Lunas</p>';
                }
                else{
                    echo '<p style = "color: #ff0000;">: Belum Lunas</p>';
                }?></th>
        </tr>
      </thead>
    </table>
  </center>
  <hr style="border: 2px solid #000" />
  <center>
    <h5 class="m-0">
      PAMDES menyatakan struk ini sebagai bukti pembayaran yang sah, mohon
      di simpan dengan baik
    </h5>
    <h5 class="m-0">Terima Kasih</h5>
    <h5 class="m-0">Atas Kepercayaan Anda</h5>
  </center>
  <span>==========================================================================</span>
  <?php endforeach; ?>
</body></html>