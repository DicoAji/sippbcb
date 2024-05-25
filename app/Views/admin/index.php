<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
<!-- Page content-->
<div class="container bg-light p-4 br25">
  <h2 class="mt25 ">Koleksi <span class="">Benda</span> </h2>

  <input class="mt20" type="text" placeholder="kolom pencarian" id="caribenda" />
  <div class="mt25">
    <a href="<?php base_url() ?>/Admin/tambah" class="btn btn-transparant  "> Tambah Data Benda</a>
    <a class="btn btn-transparant downloadkoleksi ms-lg-3 ms-0 " href="<?php base_url() ?>/Admin/downloadKoleksiSorting">Download koleksi</a>
  </div>
  <?php if (session()->getFlashdata('add-benda')) : ?>
    <div class="alert mt-4 mb-4 alert-success bg-success text-white text-center d-flex align-items-center fw-bold " width="24" height="24" role="alert">
      <div>
        <i class="bi bi-folder-plus me-3"></i><?= session()->getFlashdata('add-benda'); ?>
      </div>
    </div>
  <?php endif; ?>
  <!-- session delete benda  -->
  <?php if (session()->getFlashdata('delete-benda')) : ?>
    <div class="alert mt-4 mb-4 alert-danger text-white text-center d-flex align-items-center fw-bold " width="24" height="24" role="alert">
      <div>
        <i class="bi bi-trash3-fill me-3"></i><?= session()->getFlashdata('delete-benda'); ?>
      </div>
    </div>
  <?php endif; ?>
  <!-- session update benda  -->
  <?php if (session()->getFlashdata('update-benda')) : ?>
    <div class="alert mt-4 mb-4 alert-info text-white text-center d-flex align-items-center fw-bold " width="24" height="24" role="alert">
      <div>
        <i class="bi bi-clipboard-check me-3"></i><?= session()->getFlashdata('update-benda'); ?>
      </div>
    </div>
  <?php endif; ?>
  <!-- tabel koleksi -->
  <div class="card-body mt25">
    <div class="table-responsive tabel">
      <table id="table" class="display table table-hover">
        <thead class="">
          <tr class="bg-kuning">
            <th>Nama Benda</th>
            <!-- <th>Jenis Benda</th> -->
            <th>Pendata</th>
            <th>Waktu Pendataan</th>
            <th>Lokasi </th>
            <th>Keterangan </th>
            <th>Tanggal ditemukan </th>
            <th>Kegunaan</th>
            <th>Koordinat </th>
            <th>Jupel</th>
            <th>Sejarah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="mt-2">
          <tr class="data">
            <?php foreach ($benda as $data) : ?>
              <?php $date = date_create($data['waktu_pendataan']);
              $tgl = date_format($date, 'd/m/Y');
              $jam = date_format($date, 'H:i:s'); ?>
              <td><?= $data['nama_benda']; ?></td>
              <td><?= $data['pendata']; ?></td>
              <td><?= $tgl ?>. Pukul: <?= $jam; ?> WIB</td>
              <td><?= $data['lokasi_saat_ini']; ?></td>
              <td><?= $data['keterangan']; ?></td>
              <td id="tgl_ditemukan">
                <?= $data['tanggal_ditemukan']; ?>
                <!-- ?= date( strtotime($data['tanggal_ditemukan'],'d-m-Y') ); ?>  -->
              </td>
              <td><?= $data['kegunaan']; ?></td>
              <td><?= $data['koordinat']; ?></td>
              <td><?= $data['juru_pemelihara']; ?></td>
              <td><?= $data['sejarah']; ?></td>
              <td>
                <a class="btn btn-danger fw-bold" href="<?php base_url() ?>/Admin/delete/<?= $data['id_benda'] ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data <?= $data['nama_benda']; ?>?');">hapus</a>
                <a class="btn btn-info mt-2 fw-bold" href="<?php base_url() ?>/Admin/ubahdata/<?= $data['id_benda'] ?>" class="ungu">ubah</a>
              </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>