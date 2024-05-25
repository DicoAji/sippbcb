<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
<!-- Page content-->
<div class="container bg-light p-4 br25 ">
  <h2 class="mt25">Laporan <span class=" ">Masyarakat</span> </h2>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <input class="mt20" type="text" style="width:300px" placeholder="kolom pencarian" id="carilaporan" />
      <div class="mt25">
        <a class="btn btn-transparant" href="<?php base_url() ?>/Admin/sortingDownloadLaporan">Download Laporan</a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="note">
        <p class="bold mb-2"> Catatan Status: </p>
        <p><span class="red bold">belum</span> = laporan belum dilakukan pemeriksaan</p>
        <p> <span class="yellow bold">proses</span> = laporan dalam proses penelitian</p>
        <p><span class="green bold">selesai</span> = laporan sudah dilakukan penelitian</p>
        <p><span class="blue bold">terdata</span> = laporan sudah diteruskan ke data koleksi</p>
      </div>
    </div>
  </div>
  <!-- delete laporan -->
  <?php if (session()->getFlashdata('delete-laporan')) : ?>
    <div class="alert mt-4 mb-4 alert-danger text-white text-center d-flex align-items-center  " width="24" height="24" role="alert">
      <div>
        <i class="bi bi-trash3-fill me-3"></i><?= session()->getFlashdata('delete-laporan'); ?>
      </div>
    </div>
  <?php endif; ?>

  <!-- tabel koleksi -->
  <div class="card-body mt15">
    <div class="table-responsive tabel">
      <table id="table" class="display table ">
        <thead class="">
          <tr class="bg-kuning">

            <th>Pelapor</th>
            <th>NIK</th>
            <th>Email pelapor</th>
            <th>Lokasi penemuan</th>
            <th>Tanggal penemuan</th>
            <th>Nomor hubung</th>
            <th>Status Laporan</th>
            <th>Aksi</th>
            <th>Teruskan</th>
          </tr>
        </thead>
        <tbody class="mt-2">
          <?php foreach ($laporan as $data) : ?>
            <tr class="data">
              <td><?= $data['nama_pelapor']; ?></td>
              <td><?= $data['nik']; ?></td>
              <td><?= $data['email']; ?></td>
              <td>Desa <?= $data['desa_penemuan']; ?> Dusun <?= $data['dusun_penemuan']; ?> RT <?= $data['rt_penemuan']; ?>/RW <?= $data['rw_penemuan']; ?> Kecamatan <?= $data['kec_penemuan']; ?></td>
              <td> <?= $formattanggal = date('d-m-Y', strtotime($data['tanggal_penemuan']));; ?></td>
              <td><?= $data['nomor_hubung']; ?></td>
              <td class=" bold <?= ($data['status']) == 'belum' ? 'red' : (($data['status']) == 'proses' ? 'yellow' : (($data['status']) == 'selesai' ? 'green' :   'blue')) ?>  " id="status"> <?= $data['status']; ?> </td>
              <td class="text-center">
                <a href="<?php base_url() ?>/Admin/ubahlaporan/<?= $data['id_laporan'] ?>">
                  <i class="fas fa-edit <?= ($data['status']) == 'terdata' ? 'd-none' : 'd-inline' ?> " data-bs-toggle="tooltip" data-bs-placement="top" title="ubah status laporan" style="cursor: pointer"></i>
                </a>
                <a href="<?php base_url() ?>/Admin/hapuslaporan/<?= $data['id_laporan']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');">
                  <i style="color: red;" data-bs-toggle="tooltip" data-bs-placement="top" title="hapus laporan" class="fa-solid fa-trash-can"></i>
                </a>
              </td>
              <td> <?php if ($data['status'] == 'selesai') :    ?>
                  <div class="tengah">
                    <a href="<?php base_url() ?>/Admin/tambahDariLaporan/<?= $data['id_laporan']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Koleksi" class="btn btn-transparant">+</a>
              </td>
    </div>
  <?php endif ?>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
  </div>
</div>
</div>
<?= $this->endSection(); ?>