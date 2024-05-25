<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data_Koleksi_Benda_Cagar_Budaya</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php base_url() ?>/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- style.css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styledownload.css" />
</head>

<body>
  <div class="mx-auto" style="width: 90%;">
    <!-- pencarian -->
    <input class="mt-4 noPrint ps-1" type="text" placeholder="kolom sorting" id="caribenda" />
    <!-- end pencarian -->
    <div class="">
      <a href="" onclick="window.print()" class="btn btn-danger mt-2 mb-4 noPrint">Cetak</a>
    </div>
    <!-- head -->
    <div class="head-koleksi position-relative pb-2" style="border-bottom: 3px solid black;">
      <div class="text-left position-absolute ">
        <img class="logodinas" src="<?php base_url() ?>/assets/img/dinas/Logo-Batang-Kabupaten-Batang-Hitam-Putih.jpg" style="width: 60px;" alt="">
      </div>
      <span class="text-center flex-column">
        <h4>PEMERINTAH KABUPATEN BATANG <br>DINAS PENDIDIKAN DAN KEBUDAYAAN</h4>
      </span>
      <div class="alamat text-center">
        <p><small>Jalan Slamet Riyadi No.29 Telp.(0285) 391321 Fax.(0285) 391321 Batang 51214 <br>Laman: www.disdikbud.batangkab.go.id | Email: disdikbud@batangkab.go.id
          </small></p>
      </div>
    </div>
    <div class="" style="margin-top: 20px;">
      <div class="row">
        <div class="col-6">
          <p class="fw-bold">Data koleksi benda cagar budaya Kabupaten Batang</p>
        </div>
        <div class="col-6">
          <p class="text-right">
            <?php
            function tanggal_indonesia($tanggal)
            {
              $bulan = array(
                1 =>     'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
              );

              $var = explode('-', $tanggal);

              return $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
            }
            $date = tanggal_indonesia(date('Y-m-d'));
            // $tanggal = date('d-m-Y');
            ?>
          <p class="text-end"> Dicetak pada tanggal <?= $date; ?></p>
        </div>
      </div>


    </div>
    <!-- isian -->
    <div class="" style="margin-top: 10px;">
      <div class="table-responsive tabel">
        <table id="table" class="w-100 table-bordered ">
          <thead class="">
            <tr class="bg-kuning">
              <th>No.</th>
              <th style="width: 10%;">Nama Benda</th>
              <th>Lokasi </th>
              <th>Koordinat </th>
              <th>Pendata </th>
              <th>Waktu Pendataan </th>
              <th style="width: 20%;">Foto </th>
              <th style="width: 30%;">Keterangan </th>
            </tr>
          </thead>
          <tbody class="mt-2">
            <?php $i = 1; ?>
            <?php foreach ($benda as $data) : ?>
              <?php $date = date_create($data['waktu_pendataan']);
              $tgl = date_format($date, 'd/m/Y');
              $jam = date_format($date, 'H:i'); ?>
              <tr class="data">
                <td><?= $i; ?>.</td>
                <td><?= $data['nama_benda']; ?></td>
                <td><?= $data['lokasi_saat_ini']; ?></td>
                <td><?= $data['koordinat']; ?></td>
                <td><?= $data['pendata']; ?></td>
                <td><?= $tgl ?>. Pukul: <?= $jam; ?> WIB</td>
                <td class="tengah"> <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar']; ?>" class="tengah conta" alt="gambar_benda" style="max-width:20vh;" />
                </td>
                <td><?= $data['keterangan']; ?></td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end isian -->
  </div>
  <script src="<?php base_url() ?>/assets/jsadmin/dist/jquery.min.js"></script>
  <script src="<?php base_url() ?>/assets/jsadmin/scriptsadmin.js"></script>
</body>

</html>