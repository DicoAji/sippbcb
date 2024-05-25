<?= $this->extend('templete/templete-public'); ?>
<?= $this->section('content'); ?>
<div class="">
  <div class="bg-abu-abu pb100" style="padding-top: 150px;">
    <!-- isian -->
    <div class="container cari slide-right">
      <h2 class="kuning">Koleksi</h2>
      <p>
        Berikut merupakan kumpulan koleksi benda cagar budaya di <br>Dinas
        Pendidikan dan Kebudayaan Kabupaten Batang
      </p>
      <input type="text" class="pencarian mt-2" id="pencarianbenda" placeholder="kolom pencarian" />
    </div>
    <!-- koleksi -->
    <div class="container koleksi pt50">
      <div class="row gx-4 tengah">
        <?php foreach ($benda as $data) : ?>
          <div class="col-lg-3 col-md-4 col-12 mt-4 benda " id="carditem">
            <div class="border bs bg-white  p-3 " style="min-height: 300px;">
              <div class="tengah">
                <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar']; ?>" class="tengah conta" alt="gambar_benda" style="width:100%; height: 200px;" />
              </div>
              <!-- nama -->
              <div class="tengah mt10">
                <div class="tengah">
                  <h5 class="mx-auto" style="font-size: 12px !important;"><?= $data['nama_benda']; ?></h5>
                </div>
              </div>
              <div class="tengah mt-3">
                <a href="" class="btn btn-hitam boxshadow" data-bs-toggle="modal" data-bs-target="#benda_<?= $data['id_benda']; ?>">Detail</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- Sekilas Info -->


  </div>
</div>
<!-- Modal -->
<?php foreach ($benda as $data) : ?>
  <div class="modal fade w-100" id="benda_<?= $data['id_benda']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content p-4">
        <div class="img_empty">
          <div class="item mt-3">
            <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar']; ?>" class="<?= ($data['gambar']) == null ? 'd-none' : 'd-block' ?> w-100" alt="">
            <!-- <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar']; ?>" class=" d-block w-100" alt="..."> -->

          </div>
          <div class="item mt-3 ">
            <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar2']; ?>" class="<?= ($data['gambar2']) == null ? 'd-none' : 'd-block' ?> w-100" alt="">
            <!-- <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar2']; ?>" class="  d-block w-100" alt="..."> -->
          </div>
          <div class="item mt-3">
            <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar3']; ?>" class="<?= ($data['gambar3']) == null ? 'd-none' : 'd-block' ?> w-100" alt="">
            <!-- <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar3']; ?>" class=" d-block w-100" alt="..."> -->
          </div>
          <div class="item mt-3">
            <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar4']; ?>" class="<?= ($data['gambar4']) == null ? 'd-none' : 'd-block' ?> w-100" alt="">
            <!-- <img src="<?php base_url() ?>/assets/img/benda/<?= $data['gambar4']; ?>" class=" d-block w-100" alt="..."> -->
          </div>
        </div>
        <div class="mt25 tengah">
          <h3><?= $data['nama_benda']; ?></h3>
        </div>
        <div class="mt20">
          <p class="bold">Lokasi : </p>
          <small><?= $data['lokasi_saat_ini']; ?></small>
        </div>
        <div class="mt20">
          <p class="bold">Koordinat : </p>
          <small><?= $data['koordinat']; ?></small>
        </div>
        <div class="mt20">
          <p class="bold">Tanggal Ditemukan : </p>
          <!-- <small>  ?= date('d-m-Y', strtotime($data['tanggal_ditemukan']) ); ?></small> -->
          <small> <?= $data['tanggal_ditemukan']; ?></small>
        </div>
        <div class="mt20">
          <p class="bold">Keterangan : </p>
          <small> <?= $data['keterangan']; ?></small>
        </div>
        <div class="mt20">
          <p class="bold">Kegunaan : </p>
          <small> <?= $data['kegunaan']; ?></small>
        </div>
        <div class="mt20">
          <p class="bold">Sejarah : </p>
          <small> <?= $data['sejarah']; ?></small>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>


    </div>
  </div>
<?php endforeach ?>
<?= $this->endSection(); ?>