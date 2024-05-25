<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container bg-light p-4 br25 ">
          <h2 class=" tengah">Ubah Data</h2>
          <!-- <p class="text-center red"> Note : Upload gambar dengan resolusi 3:4</p> -->
          <form  class="needs-validation" novalidate action="<?php base_url() ?>/Admin/update/<?=$benda['id_benda']; ?>" method="POST"  enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <input type="hidden" class="d-none" value="<?= $benda['gambar']; ?>" name="gambarlama">
          <input type="hidden" class="d-none" value="<?= $benda['gambar2']; ?>" name="gambarlama2">
          <input type="hidden" class="d-none" value="<?= $benda['gambar3']; ?>" name="gambarlama3">
          <input type="hidden" class="d-none" value="<?= $benda['gambar4']; ?>" name="gambarlama4">
            <div class="row mt-4">
              <div class="col-lg-6 col-12 pt50">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-input">
                      <div class="preview">
                        <img
                          id="file-ip-1-preview"
                          src="<?php base_url() ?>/assets/img/benda/<?= $benda['gambar']; ?>"
                          style="width: 100%;height: 200px;"
                        />
                      </div>
                      <div class="prev">
                        <input
                        class="d-none"
                          type="file"
                          id="file-ip-1"
                          accept="image/*"
                          onchange="showPreview(event);"
                          name="gambar"
                        />
                      
                      </div>
                      <label for="file-ip-1" class="mt20 tengah">
                        <div class="btn btn-hitam">upload</div>
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-3">
                    <div class="form-input">
                      <div class="preview">
                        <img
                          id="file-ip-2-preview"
                          src="<?php base_url() ?>/assets/img/benda/<?= $benda['gambar2']; ?>"
                          style="width: 100%;height: 200px;"
                        />
                      </div>
                      <div class="prev">
                        <input
                        class="d-none"
                          type="file"
                          id="file-ip-2"
                          accept="image/*"
                          onchange="showPreview2(event);"
                          name="gambar2"
                        />
                      </div>
                      <label for="file-ip-2" class="mt20 tengah">
                        <div class="btn btn-hitam">upload</div>
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-3">
                    <div class="form-input">
                    <input type="hidden" class="d-none" value="<?= $benda['gambar3']; ?>" name="gambarlama3">
                        <div class="preview">
                          <img
                            id="file-ip-3-preview"
                            src="/assets/img/benda/<?= $benda['gambar3']; ?>"
                            style="width: 100%;height: 200px;"
                          />
                        </div>
                        <div class="prev">
                          <input
                          class="d-none"
                            type="file"
                            id="file-ip-3"
                            accept="image/*"
                            onchange="showPreview3(event);"
                            name="gambar3"
                          />
                        </div>
                        <label for="file-ip-3" class="mt20 tengah">
                          <div class="btn btn-hitam">upload</div>
                        </label>
                      </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-3">
                    <div class="form-input">
                    <input type="hidden" class="d-none" value="<?= $benda['gambar4']; ?>" name="gambarlama4">
                        <div class="preview">
                          <img
                            id="file-ip-4-preview"
                            src="/assets/img/benda/<?= $benda['gambar4']; ?>"
                            style="width: 100%;height: 200px;"
                          />
                        </div>
                        <div class="prev">
                          <input
                          class="d-none"
                            type="file"
                            id="file-ip-4"
                            accept="image/*"
                            onchange="showPreview4(event);"
                            name="gambar4"
                          />
                        </div>
                        <label for="file-ip-4" class="mt20 tengah">
                          <div class="btn btn-hitam">upload</div>
                        </label>
                      </div>
                  </div>
                </div>
                <div class=" mt50 pt-4" >
                  <label for="sejarah">Sejarah :</label>
                  <textarea
                    type="text"
                    style="height: 50vh !important; "
                    name="sejarah"
                    id="sejarah"
                    class="w-100"
                  ><?= $benda['sejarah']; ?></textarea>
                </div>
              </div>
              <div class="col-lg-6 col-12 batasisian" >
                <div class="namabenda mt-5">
                  <label for="namabenda">Nama Benda :</label>
                  <input
                    required
                    class="w-100 ps-3 p-2 mt-2"
                    id="namabenda"
                    type="text"
                    name="namabenda"
                    value="<?= $benda['nama_benda'] ?>"
                  />
                  <div class="invalid-feedback ">Nama benda tidak boleh kosong</div>
                </div>
                <div class="jenis mt-4">
                  <label for="jenisbenda">Jenis Benda : <span class="kuning"><?=  $benda['jenis_benda']; ?> </span> </label>
                  <select class="form-select mt-2" required id="jenisbenda" name="jenisbenda">
                    <?php foreach ($jenisbenda as $jenisbenda) :?>
                    <option <?= ($jenisbenda['id_jenis_benda'] == $benda['id_jenis_benda']) ? 'selected':''; ?> value="<?= $jenisbenda['id_jenis_benda']; ?>">  <?= $jenisbenda['jenis_benda']; ?></option>
                    <?php endforeach ?>
                  </select>
                  <div class="invalid-feedback">Jenis benda tidak boleh kosong</div>
                </div>
                
                <div class="Lokasi mt-4">
                  <label for="lokasisaatini">Lokasi  :</label>
                  <input type="text" required id="lokasisaatini" class="w-100" name="lokasisaatini" value="<?= $benda['lokasi_saat_ini'] ?>">
                  <div class="invalid-feedback ">Lokasi tidak boleh kosong</div>
                </div>
                <div class="Koordinat mt-4">
                  <label for="koordinat">Koordinat</label>
                  <input type="text" id="koordinat" class="w-100" name="koordinat" value="<?= $benda['koordinat'] ?>">
                </div>
                <div class="pendata mt-4">
                  <label for="pendata">Nama Pendata</label>
                  <input type="text" required id="pendata" class="w-100" name="pendata" value="<?= $benda['pendata'] ?>">
                  <div class="invalid-feedback">Juru pemelihara tidak boleh kosong</div>
                </div>
                <div class="Keterangan mt-4">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" required id="keterangan" class="w-100" name="keterangan" value="<?= $benda['keterangan'] ?>">
                </div>
                <div class="Lokasi mt-4">
                  <label for="jupel">Juru Pemelihara</label>
                  <input type="text"  id="jupel" class="w-100" name="jupel" value="<?= $benda['juru_pemelihara'] ?>">
                </div>
                <div class="tanggal_dtmkn mt-4">
                  <label for="tanggalDitemukan">Tanggal Ditemukan</label>
                  <input type="date"  id="tanggalDitemukan" class="w-100" name="tanggalDitemukan" value="<?= $benda['tanggal_ditemukan'] ?>">
                </div>
                <div class="kegunaan mt-4">
                  <label for="Kegunaan">Kegunaan</label>
                  <textarea class="w-100" name="kegunaan" id="kegunaan"><?= $benda['kegunaan'] ?></textarea>
                </div>
                <div class="submite mt-4 justify-content-end d-flex">
                  <button type="submit" class="btn btn-hitam w-100 tengah">
                    Kirim
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- script preview gambar -->
    <script>
      function showPreview(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
          preview.style.height = "100%";
          preview.style.width = "100%";
        }
      }
    </script>
  </body>
</html>


<?= $this->endSection(); ?>