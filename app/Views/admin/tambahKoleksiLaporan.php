<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
<!-- Page content-->
<div class="container bg-light p-4 br25 ">
    <h2 class="">Tambah Koleksi Dari Laporan Masyarakat</h2>
    <!-- <input type="text" placeholder="kolom pencarian" id="carilaporan" /> -->
    <!-- <div class="mt-3">
      <a class="btn btn-transparant" href="?php base_url() ?>/Admin/sortingDownloadLaporan">Download Laporan</a>
    </div> -->
    <!-- tabel koleksi -->
    <div class="card-body">
    <form action="<?php base_url() ?>/Admin/tambahKoleksiDariLaporan/<?= $laporan['id_laporan'] ?>" method="POST" class="needs-validation"  id="admin-form-tambah" enctype="multipart/form-data" novalidate>
    <?= csrf_field(); ?>
      <input type="hidden" class="d-none" value="<?= $laporan['gambar']; ?>" name="gambarlama">
      <input type="hidden" class="d-none" value="<?= $laporan['gambar2']; ?>" name="gambarlama2">
      <input type="hidden" class="d-none" value="<?= $laporan['gambar3']; ?>" name="gambarlama3">
      <input type="hidden" class="d-none" value="<?= $laporan['gambar4']; ?>" name="gambarlama4">
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="gambar">
            <div class="form-input">

            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="preview">
                  <img
                    id="file-ip-1-preview"
                    style="max-width: 250px;"
                    src="<?php base_url()?>/assets/img/gambarlaporan/<?= $laporan['gambar'] ?>"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-1" class="mt10">
                    <div class="btn btn-transparant">upload</div>
                  </label>
                  <input
                  class="d-none"
                    type="file"
                    id="file-ip-1"
                    accept="image/*"
                    onchange="showPreview(event);"
                    name="gambar"
                    style="max-width: 300px;"
                  />
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="preview2">
                  <img
                    id="file-ip-2-preview"
                    style="max-width: 250px;"
                    src="<?php base_url()?>/assets/img/gambarlaporan/<?= $laporan['gambar2'] ?>"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-2" class="mt10">
                    <div class="btn btn-transparant">upload</div>
                  </label>
                  <input
                  class="d-none"
                    type="file"
                    id="file-ip-2"
                    accept="image/*"
                    onchange="showPreview2(event);"
                    name="gambar2"
                    style="max-width: 300px;"
                  />
                  
                </div>
              </div>
              <div class="col-lg-6 col-12 mt-2">
                <div class="preview3">
                  <img
                    id="file-ip-3-preview"
                    style="max-width: 250px;"
                    src="<?php base_url()?>/assets/img/gambarlaporan/<?= $laporan['gambar3'] ?>"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-3" class="mt10">
                    <div class="btn btn-transparant">upload</div>
                  </label>
                  <input
                  class="d-none"
                    type="file"
                    id="file-ip-3"
                    accept="image/*"
                    onchange="showPreview3(event);"
                    name="gambar3"
                    style="max-width: 300px;"
                  />
                </div>
              </div>
              <div class="col-lg-6 col-12 mt-2">
                <div class="preview4">
                  <img
                    id="file-ip-4-preview"
                    style="max-width: 250px;"
                    src="<?php base_url()?>/assets/img/gambarlaporan/<?= $laporan['gambar4'] ?>"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-4" class="mt10">
                    <div class="btn btn-transparant">upload</div>
                  </label>
                  <input
                  class="d-none"
                    type="file"
                    id="file-ip-4"
                    accept="image/*"
                    onchange="showPreview4(event);"
                    name="gambar4"
                    style="max-width: 300px;"
                  />
                </div>
              </div>
            </div>
            <div class=" mt50 pt-4" style="border-top: 2px solid;">
              <label for="sejarah">Sejarah :</label>
              <textarea
                style="height: 50vh !important; "
                name="sejarah"
                id="sejarah"
                class="w-100"
              ></textarea>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="namabenda mt-5">
            <label for="namabenda">Nama Benda :</label>
            <input
              required
              class="w-100 ps-3 p-2 mt-2"
              id="namabenda"
              type="text"
              name="namabenda"
            />
            <div class="invalid-feedback">Nama Benda tidak boleh kosong</div>
            
          </div>
          <div class="jenis mt-4">
            <label for="jenisbenda">Jenis Benda :</label>
            <select class="form-select mt-2" id="jenisbenda" name="jenisbenda" required>
              <option disabled selected value ></option>
              <?php foreach ($jenisbenda as $jenisbenda) :?>
                <option value="<?= $jenisbenda['id_jenis_benda']; ?>"><?= $jenisbenda['jenis_benda']; ?></option>
              <?php endforeach ?>
            </select>
            <div class="invalid-feedback">Jenis benda tidak boleh kosong</div>
          </div>
          <div class="Lokasi mt-4">
            <label for="lokasisaatini">Lokasi :</label>
            <textarea
              required
              name="lokasisaatini"
              id="lokasisaatini"
              class="w-100"
            >Desa <?= $laporan['desa_penemuan']; ?> Dusun <?= $laporan['dusun_penemuan']; ?> RT <?= $laporan['rt_penemuan']; ?>/RW <?= $laporan['rw_penemuan']; ?> Kecamatan <?= $laporan['kec_penemuan']; ?>
            </textarea>
            <div class="invalid-feedback">Lokasi tidak boleh kosong</div>
          </div>
          <div class="koordinat mt-4">
            <label for="koordinat">Koordinat :</label>
            <input
              type="text"
             
              id="koordinat"
              name="koordinat"
              class="w-100"
            />
            <!-- <div class="invalid-feedback">Koordinat tidak boleh kosong</div> -->
          </div>
          <div class=" mt-4">
            <label for="">Nama Pendata :</label>
            <input
              type="text"
              required
              id="pendata"
              name="pendata"
              class="w-100"
            />
            <div class="invalid-feedback">Pendata tidak boleh kosong</div>
          </div>
          <div class="keterangan mt-4">
            <label for="keterangan">Keterangan :</label>
            <textarea
              required
              name="keterangan"
              id="keterangan"
              class="w-100"
            ></textarea>
            <div class="invalid-feedback">Data tidak boleh kosong</div>
          </div>
          <div class="Lokasi mt-4">
            <label for="jupel">Juru Pemelihara :</label>
            <textarea
              name="jupel"
              id="jupel"
              class="w-100"
            ></textarea>
          </div>
          
          <div class="tgl_dtmkn mt-4">
            <label for="tgl_dtmkn">Tanggal Ditemukan :</label>
            <input
              type="date"
              style="cursor: pointer"
              id="tanggalDitemukan"
              name="tanggalDitemukan"
              class="w-100"
              value="<?= $laporan['tanggal_penemuan'] ?>"
            />
          </div>
          <div class="kegunaan mt-4">
            <label for="kegunaan">Kegunaan :</label>
            <textarea
              name="kegunaan"
              id="kegunaan"
              class="w-100"
            ></textarea>
          </div>
          <div class="submite mt-4 justify-content-end d-flex">
            <button type="submit" class="btn btn-hitam w-100 tengah">
              Tambah
            </button>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>

<?= $this->endSection(); ?>