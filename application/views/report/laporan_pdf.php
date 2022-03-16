<!DOCTYPE html>
<html lang="en"><head>
    <title></title>
</head><body>
    <h1><?= $title; ?></h1>
    <table>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Kartu</th>
                <th scope="col">Nama</th>
                <th scope="col">Tahun</th>
                <th scope="col">Pembayaran Bulan</th>
                <th scope="col">Beban Pemakaian</th>
                <th scope="col">Total Tagihan</th>
                <th scope="col">Bayar</th>
                <th scope="col">Status</th>
                
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($pdf_print as $a) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?=$a['id_pelanggan'];?></td>
                    <td><?= $a['nama_pelanggan'] ?></td>
                    <td><?= $a['tahun'] ?></td>
                    <td><?= $a['bulan'] ?></td>
                    <td><?= $a['beban'];?>/m<sup>3</sup></td>
                    <!-- total tagihan bulan ini -->
                    <td>Rp. <?= ($a['beban'])*$perkubik;?></td>
                    <!-- variabel total -->
                    <?php $total=($a['beban'])*$perkubik;
                    ?>
                    <td>Rp. <?=$a['bayar'];?></td>
                    <!-- penentuan status -->
                    <td>
                    <?php
                    if($total == $a['bayar']){
                        echo '<p style="color:#55ff00;">Lunas</p>';
                    }
                    else if($a['bayar'] < $total){
                        echo '<p style = "color: #ff0000;">Belum Lunas</p>';
                    }
                    else{
                        echo '<p style = "color: #ff0000;">Belum Lunas</p>';
                    }?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
    </table>
</body></html>