<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
  <!-- Page content-->
  <div class="container bg-light p-4 br25">
    <h2 class="">Tambah <span class="">Data</span> </h2>
    
    <!-- <p class="text-center red"> Note : Upload gambar dengan resolusi 3:4</p> -->
    <!-- tambah jenis benda -->
    <!-- <div class="d-flex justify-content-end">
      <a href="" class="btn btn-transparant" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Jenis Benda</a>
    </div> -->
    <form action="<?php base_url() ?>/Admin/tambahbenda" method="POST" class="needs-validation"  id="admin-form-tambah" enctype="multipart/form-data" novalidate>
    <?= csrf_field(); ?>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="gambar">
            <div class="form-input">

            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="preview tengah">
                  <img
                    id="file-ip-1-preview"
                    style="max-width: 250px;"
                    src="<?php base_url() ?>/assets/img/uploadgambar/uploadgambar.jpg"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-1" class="mt10 tengah">
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
                    required
                  />
                  <div class="invalid-feedback text-center">Silahkan masukkan gambar</div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="preview2 tengah">
                  <img
                    id="file-ip-2-preview"
                    style="max-width: 250px;"
                    src="<?php base_url() ?>/assets/img/uploadgambar/uploadgambar.jpg"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-2" class="mt10 tengah">
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
                <div class="preview3 tengah">
                  <img
                    id="file-ip-3-preview"
                    style="max-width: 250px;"
                    src="<?php base_url() ?>/assets/img/uploadgambar/uploadgambar.jpg"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-3" class="mt10 tengah">
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
                <div class="preview4 tengah">
                  <img
                    id="file-ip-4-preview"
                    style="max-width: 250px;"
                    src="<?php base_url() ?>/assets/img/uploadgambar/uploadgambar.jpg"
                  />
                </div>
                <div class="prev">
                  <label for="file-ip-4" class="mt10 tengah">
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
            <div class=" mt50 pt-4" >
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
              <option disabled selected value></option>
              <?php foreach ($jenisbenda as $jenisbenda) :?>
                <option value="<?= $jenisbenda['id_jenis_benda']; ?>"><?= $jenisbenda['jenis_benda']; ?></option>
              <?php endforeach ?>
            </select>
            <div class="invalid-feedback">Jenis tidak boleh kosong</div>
          </div>
          <div class="Lokasi mt-4">
            <label for="lokasisaatini">Lokasi :</label>
            <textarea
              required
              name="lokasisaatini"
              id="lokasisaatini"
              class="w-100"
            ></textarea>
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
          <div class="jupel mt-4">
            <label for="jupel">Juru Pemelihara :</label>
            <input type="text" name="jupel" id="jupel" class="w-100">
          </div>
          
          <div class="tgl_dtmkn mt-4">
            <label for="tgl_dtmkn">Tanggal Ditemukan :</label>
            <input
              type="date"
              style="cursor: pointer"
              id="tanggalDitemukan"
              name="tanggalDitemukan"
              class="w-100"
              
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
<?= $this->endSection(); ?>
