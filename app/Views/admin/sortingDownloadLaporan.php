<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php

                                  use Kint\Zval\Value;

                                  base_url() ?>/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- style.css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styledownload.css" />
</head>
</head>

<body>
  <div class="mx-auto" style="width: 90%;">
    <!-- pencarian -->
    <input class="mt-4 noPrint ps-1" type="text" placeholder="kolom sorting" id="carilaporan" />
    <!-- end pencarian -->
    <div class="">
      <a href="" onclick="window.print()" class="btn btn-danger mt-2 mb-4 noPrint">Cetak</a>
    </div>
    <div class="head-koleksi position-relative pb-2" style="border-bottom: 3px solid black;">
      <div class="text-left position-absolute">
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
          <p class="fw-bold">Data Laporan Masyarakat</p>
        </div>
        <div class="col-6">
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
            // var 0 = tanggal
            // var 1 = bulan
            // var 2 = tahun
          }

          $date = tanggal_indonesia(date("Y-m-d"));
          ?>
          <p class="text-end "> Dicetak pada tanggal <?= $date; ?></p>
        </div>
      </div>


    </div>

    <!-- isian -->
    <div class="" style="margin-top: 10px;">
      <div class="table-responsive tabel">
        <table id="table" class="w-100 table-bordered">
          <thead class="">
            <tr class="bg-kuning">
              <th>No.</th>
              <th style="width: 20%;">Pelapor</th>
              <th style="width: 30%;">Lokasi penemuan</th>
              <th style="width: 15%;">Tanggal penemuan</th>
              <th>Foto</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="mt-2">
            <?php $i = 1; ?>
            <?php foreach ($laporan as $data) : ?>
              <tr class="data">
                <td><?= $i; ?></td>
                <td><?= $data['nama_pelapor']; ?></td>
                <td>Desa <?= $data['desa_penemuan']; ?> Dusun <?= $data['dusun_penemuan']; ?> RT <?= $data['rt_penemuan']; ?>/RW <?= $data['rw_penemuan']; ?> Kecamatan <?= $data['kec_penemuan']; ?></td>
                <td> <?= $formattanggal = date('d-m-Y', strtotime($data['tanggal_penemuan']));; ?></td>
                <td class="tengah"> <img class="tengah w-100 " src="<?php base_url() ?>/assets/img/gambarlaporan/<?= $data['gambar']; ?>" alt="gambar_benda" style="max-width:20vh;" /></td>
                <td>
                  <?php
                  if ($data['status'] != 'terdata') : ?>
                    <?= $data['status']; ?> pemeriksaan
                  <?php endif ?>
                  <?php if ($data['status'] == 'terdata') : ?>
                    <?= $data['status']; ?>
                  <?php endif ?>
                </td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end isian -->
  </div>
</body>
<script src=" <?php base_url() ?>/assets/jsadmin/dist/jquery.min.js">
</script>
<!-- link jquery -->
<script src="<?php base_url() ?>/assets/jsadmin/scriptsadmin.js"></script>

</html>