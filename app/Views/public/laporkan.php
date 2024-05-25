<?= $this->extend('templete/templete-public'); ?>

<?= $this->section('content'); ?>
    <!-- sekilas info -->
    <div class="bg-hitam pt50">
      <div class="  p-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="borobudur slide-right"></div>
            </div>
            <div class="col-lg-6 col-12 slide-left">
              <h2 class="kuning mt20">SEKILAS INFO</h2>
              <p class="kuning mt20">
                Benda cagar budaya merupakan benda alam dan atau benda buatan
                manusia yang dimanfaatkan oleh manusia, serta sisa-sisa biota yang
                dapat dihubungkan dengan kegiatan manusia dan/atau dapat
                dihubungkan dengan <strong>SEJARAH MANUSIA</strong> . Benda cagar budaya dapat
                bersifat bergerak atau tidak bergerak dan merupakan kesatuan atau
                kelompok
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- end navbar -->
      <!-- bg abu laporkan -->
      <div class="isianlaporkan">
        <div class="container pt50">
          <!-- set fleshdata -->
          <?php if (session()->getFlashdata('pesan-laporan')) : ?>
            <div class="alert alert-success d-flex align-items-center " width="24" height="24" role="alert">
              <i class="bi bi-check-circle-fill me-2"></i>
              <div>
                <?= session()->getFlashdata('pesan-laporan'); ?>
              </div>
            </div>
          <?php endif ; ?>
          <div class="row pt25 pb100">
            <div class="col-lg-6 col-12 laporanheader">
              <h3 class="kuning">Laporkan</h3>
              <p>
                “ Ingat Jangan Asal Lapor” Sebelum anda melaporkan pastikan benda
                yang anda temui sesuatu yang berkaitan dengan benda cagar budaya.
              </p>
              <h2>jadilah masyarakat yang bijak</h2>
              <div class="gambarcari mt50 slide-up"></div>
            </div>
            <div class="col-lg-6 col-12 p-3">
              <!-- formlaporan -->
              <form class="needs-validation form-laporkan" action="<?php base_url() ?>/Umum/tambahlaporan" name="laporan" method="POST" novalidate enctype="multipart/form-data" id="public-form-laporan">
                <?= csrf_field(); ?>
                <div class="nama mt-lg-2 mt-1">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" required />
                  <div class="invalid-feedback">Nama tidak boleh kosong</div>
                </div>
                <div class="email mt-lg-2 mt-1">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" required />
                  <div class="invalid-feedback">Input harus sesuai format email dan tidak boleh kosong</div>
                </div>
                <div class="nik mt-lg-2 mt-1">
                  <label for="nik">NIK (Nomor Induk Kepedudukan)</label>
                  <input type="number"  name="nik" id="nik" required />
                  <div class="invalid-feedback">
                    NIK 16 karakter dan tidak boleh kosong
                  </div>
                </div>
                <div class="lokasi mt-lg-2 mt-1 ">
                  <label for="lokasi">Lokasi penemuan (<small class="biru">*Pastikan alamat terisi lengkap</small>)</label>
                  <div class="mt-2 ms-3">
                    <div class="desa">
                      <label for="">Desa</label>
                      <input type="text" name="desaPenemuan" id="desa" required>
                      <div class="invalid-feedback">Desa tidak boleh kosong</div>
                    </div>
                    <div class="dusun">
                      <label for="">Dusun</label>
                      <input type="text" name="dusunPenemuan" id="dusun" required>
                      <div class="invalid-feedback">Dusun tidak boleh kosong</div>
                    </div>
                    <div class="rt">
                      <label for="">RT</label>
                      <input type="number" name="rtPenemuan" id="rt" required>
                      <div class="invalid-feedback">RT tidak boleh kosong</div>
                    </div>
                    <div class="rw">
                      <label for="">RW</label>
                      <input type="number" name="rwPenemuan" id="rw"required>
                      <div class="invalid-feedback">RW tidak boleh kosong</div>
                    </div>
                    <div class="kec">
                      <label for="">Kecamatan</label>
                      <select style="font-size: 11px;" class="form-select mt-2 bg-transparent border-dark" id="kecamatan" name="kecPenemuan" required>
                        <option disabled selected value>--pilih kecamatan--</option>
                          <option value="Batang">Batang</option>
                          <option value="Tulis">Tulis</option>
                          <option value="Warungasem">Warungasem</option>
                          <option value="Bandar">Bandar</option>
                          <option value="Blado">Blado</option>
                          <option value="Wonotunggal">Wonotunggal</option>
                          <option value="Subah">Subah</option>
                          <option value="Gringsing">Gringsing</option>
                          <option value="Limpung">Limpung</option>
                          <option value="Bawang">Bawang</option>
                          <option value="Reban">Reban</option>
                          <option value="Tersono">Tersono</option>
                          <option value="Kandeman">Kandeman</option>
                          <option value="Pecalungan">Pecalugan</option>
                          <option value="Banyuputih">Banyuputih</option>
                      </select>
                      <div class="invalid-feedback">Kecamatan tidak boleh kosong</div>
                      
                    </div>
                    
                  </div>
                  <!-- <div class="invalid-feedback">
                    Lokasi penemuan tidak boleh kosong
                  </div> -->
                </div>
                <div class="tanggal  mt-lg-3 mt-2">
                  <label for="tanggal">Tanggal penemuan</label>
                  <input
                    type="date"
                    id="tanggal"
                    required
                    name="tanggal"
                  />
                  <div class="invalid-feedback">
                    Tanggal penemuan tidak boleh kosong
                  </div>
                </div>
                <div class="nomor mt-lg-2 mt-1">
                  <label for="nomor">Nomor Hp/Telepon</label>
                  <input type="number" name="nomor" id="nomor" required />
                  <div class="invalid-feedback">
                    Nomor hubung tidak boleh kosong
                  </div>
                </div>
                <!-- input gambar -->
                <div class=" py-4 mt-lg-2 mt-1">
                  <label for="">Masukkan gambar ( <span class="biru">*</span><small class="biru">Minimal satu gambar</small> )</label>
                  <div class="container-fluid mt-2">
                    <div class="row mt25">
                      <div class="col-3">
                        <p style="font-size:10px ;">Tampak depan</p>
                        <div class="preview mb-1 ">
                          <img id="file-ip-1-preview" />
                        </div>
                        <label class="btn btn-transparant rounded" for="file-ip-1"
                          >+</label>
                        <div class="prev">
                          <input
                            required
                            class="d-none"
                            type="file"
                            id="file-ip-1"
                            accept="image/*"
                            onchange="showPreview(event);"
                            name="gambar"
                          />
                          <div class="invalid-feedback ">Silahkan masukkan gambar</div>
                        </div>
                      </div>
                      <div class="col-3">
                        <p style="font-size:10px ;">Tampak belakang</p>
                        <div class="preview  mb-1">
                          <img id="file-ip-2-preview" />
                        </div>
                        <label class="btn btn-transparant rounded" for="file-ip-2"
                          >+</label>
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
                      </div>
                      <div class="col-3">
                        <p style="font-size:10px ;">Tampak kiri</p>
                        <div class="preview  mb-1">
                          <img id="file-ip-3-preview" />
                        </div>
                        <label class="btn btn-transparant rounded" for="file-ip-3"
                          >+</label>
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
                      </div>
                      <div class="col-3">
                        <p style="font-size:10px ;">Tampak kanan</p>
                      
                        <div class="preview  mb-1">
                          <img id="file-ip-4-preview" />
                        </div>
                        <label class="btn btn-transparant rounded" for="file-ip-4"
                          >+</label>
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
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end input gambar -->
                <!-- chapta -->
                <div class="mt20 captcha__section">
                    <label for="captcha">Captcha</label>
                    <div class=" justify-content-between mt10">
                        <div class="captcha__content">
                            <div id="captcha" class="captcha">
                                <script>
                                createCaptcha();
                                </script>
                            </div>
                        </div>
                        <div id="errCaptcha" class="errmsg mt10 mb10"></div>
  
                        <div class="input mt20">
                            <input class="daftar__input " type="text" name="reCaptcha" id="reCaptcha"
                                placeholder="Masukkan captcha" />
                        </div>
                    </div>
                    
                    <div class="restart mt10">
                        <a href="#" onclick="createCaptcha()" style="font-size: 10px;" class="fs14 ">Ubah kode>></a>
                    </div>
                    
                    <input hidden type="text" name="" id="hasilCaptcha">
                </div>
                      
                <!-- submit -->
                <div class="submit mt25">
                  <button type="submit" class="btn btn-transparant justify-content-center d-flex w-100">Kirim</button>
                </div>
                
              </form>
            </div>
          </div>
  
        </div>
      </div>
    
    <?= $this->endSection(); ?>