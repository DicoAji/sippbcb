<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
<!-- Page content-->
<div class="container ubahstatus bg-light p-4 br25 ">
  <h2 class=" text-center">Ubah Status <span class="">Laporan</span></h2>
  <form action="<?php base_url() ?>/Admin/updatestatus/<?= $laporan['id_laporan']; ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="ketegori ">
      <div class="tengah mb-4">
        <label>Update status laporan nama pelapor <?= $laporan['nama_pelapor']; ?> </label>
      </div>
      <div class=" mt-4">
        <div class="gambar tengah m20">
          <a href="<?php base_url() ?>/assets/img/gambarlaporan/<?= $laporan['gambar'] ?>" download>
            <img class="d-block " src="<?php base_url() ?>/assets/img/gambarlaporan/<?= $laporan['gambar']; ?>" alt="" style="width: 500px;">
          </a>
        </div>
        <div class="gambar2 tengah">
          <a href="<?php base_url() ?>/assets/img/gambarlaporan/<?= $laporan['gambar2']; ?>" download>
            <img class="d-block" src="<?php base_url() ?>/assets/img/gambarlaporan/<?= $laporan['gambar2']; ?>" alt="" style="width: 500px;">

          </a>
        </div>
        <div class="gambar3 tengah m20">
          <a href="<?php base_url() ?>/assets/img/gambarlaporan/<?= $laporan['gambar3']; ?>" download>
            <img class="d-block" src="<?php base_url() ?>/assets/img/gambarlaporan/<?= $laporan['gambar3']; ?>" alt="" style="width: 500px;">
          </a>
        </div>
      </div>
      <p class="tengah"></p>
      <div class="statuslaporan mt-2 tengah ">
        <div class="belum">
          <input type="radio" value="belum" class="btn-check" name="status" id="option1" autocomplete="off" checked>
          <label class="btn btn-danger" for="option1">Belum diperiksa</label>
        </div>
        <div class="proses ms-3 me-3">
          <input type="radio" value="proses" class="btn-check" name="status" id="option2" autocomplete="off">
          <label class="btn btn-warning" for="option2">Proses pemeriksaan</label>
        </div>
        <div class="sucess me-3">
          <input type="radio" value="selesai" class="btn-check" name="status" id="option3" autocomplete="off">
          <label class="btn btn-success" for="option3">Selesai pemeriksaan </label>
        </div>
        <!-- <div class="terdata">
                  <input type="radio" value="terdata" class="btn-check" name="status" id="option4" autocomplete="off">
                  <label class="btn btn-primary" for="option4">Terdata</label>
                </div> -->
      </div>
    </div>
    <!-- submit -->
    <div class=" tengah mt25">
      <button class=" w-100 btn btn-transparant">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<!-- <script src="js/scripts.js"></script> -->
</body>

</html>
<?= $this->endSection(); ?>