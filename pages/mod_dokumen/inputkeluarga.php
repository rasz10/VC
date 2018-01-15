<?php
  $iddebitur = $_GET['par2'];

  $namadebitur = getnamadebitur($conn,$iddebitur);
  $getjumlahkeluarga = getjumlahkeluarga($conn,$iddebitur);
  $jumlahkeluarga = $getjumlahkeluarga + 1;
?>

<section class="panel">
  <header class="panel-heading">
      <h3>Input Data Keluarga ke <?php echo $jumlahkeluarga; ?></h3>
  </header>
  <div class="panel-body">
      <form role="form" id="form-keluarga-perseorangan">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label>Nama Calon Debitur</label>
            <input type="text" class="form-control namadebitur" id="namadebitur" value="<?php echo $namadebitur;?>" readonly>
            <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur"  value="<?php echo $iddebitur;?>" readonly>
          </div>
        </div>
        <div class="col-lg-12">
           <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label>Nama (Sesuai KTP)</label>
            <input type="text" class="form-control" name="nama">
            <input type="hidden" class="form-control" name="badan_usaha" value="<?php echo $badanusaha;?>">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir">
          </div>
        </div>
        <div class="col-lg-2">
        <div class="form-group">
          <label>Tgl Lahir</label>
          <!-- <input type="text" class="form-control" name="tanggal_lahir"> -->
          <select class="form-control" name="tanggal_lahir">
            <option>--</option>
              <?php
                for ($i=1; $i <= 31 ; $i++) { 
              ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php
                }
              ?>
            </select>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="form-group">
          <label>Bulan Lahir</label>
          <!-- <input type="text" class="form-control" name="tanggal_lahir"> -->
          <select class="form-control" name="bulan_lahir">
            <option>--</option>
            <?php
            $array = array("Januari-01","Februari-02","Maret-03","April-04","Mei-05","Juni-06","Juli-07","Agustus-08","September-09","Oktober-10","November-11","Desember-12");
            foreach($array as $value) {
              $getbulan = explode("-", $value);
            ?>
            <option value="<?php echo $getbulan[1];?>"><?php echo $getbulan[0];?></option>
            <?php
            }
          ?>
          </select>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="form-group">
          <label>Tahun Lahir</label>
          <!-- <input type="text" class="form-control" name="tanggal_lahir"> -->
          <select class="form-control" name="tahun_lahir">
            <option>--</option>
              <?php
                for ($i=1930; $i <= 2017 ; $i++) { 
              ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php
                }
              ?>
            </select>
        </div>
      </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label>No. KTP</label>
            <input type="text" class="form-control" name="no_ktp">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat"></textarea>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label>No. NPWP</label>
            <input type="text" class="form-control" name="no_npwp">
          </div>
        </div>
        <div class="col-lg-12">
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label>Hubungan dengan Calon Debitur</label>
            <input type="text" class="form-control" name="hubungan_debitur">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <button type="button" class="btn btn-success simpan-keluarga-perseorangan"><i class="fa fa-floppy-o"></i> Simpan</button><br>
          </div>
        </div>
        <div class="col-lg-12" id="resultkeluargaperseorangan">
        </div>
        <div class="col-lg-12">
        </div>
        
      </div>

      <!-- <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan 2</font></a>
      <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan 3</font></a>
      <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan 4</font></a> -->
      </form>
      <div class="row">
      <form role="form" class="form-upload-keluarga-perseorangan">
        <div class="col-lg-12">
          <div class="form-group">
            <label>Form SLIK</label>
            <input type="file" class="form-control" name="form_slik_keluarga">
            <input type="hidden" name="jenis_individu" value="keluarga">
            <input type="hidden" class="idkeluarga" name="idkeluarga">
            <input type="hidden" class="form-control namadebitur" id="namadebitur" name="namadebitur" value="<?php echo $namadebitur;?>" readonly>
            <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" value="<?php echo $iddebitur;?>" readonly>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <button type="button" class="btn btn-primary simpanuploaddokumenkeluarga">Upload</button>
          </div>
        </div>
        <div class="col-lg-12" id="resultkeluargauploadperseorangan">
        </div>
        <div class="col-lg-12"><br><br>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <a href='home?par=inputkeluarga&par2=<?php echo $iddebitur;?>' class='btn btn-default modal-perorangan-tambah-penjamin'><i class='fa fa-plus'></i> <font color="red">Tambah Data keluarga</font></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>