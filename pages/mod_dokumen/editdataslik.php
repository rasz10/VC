<?php
  $iddebitur = $_GET['par2'];
?>
<section class="panel">
    <header class="panel-heading tab-bg-dark-navy-blue">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#user-1">
                    <i class="fa fa-user"></i> Calon Debitur
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#user-2">
                    <i class="fa fa-user"></i> Penjamin
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#user-3">
                    <i class="fa fa-user"></i> Pasangan
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#user-4">
                    <i class="fa fa-user"></i> Pasangan Penjamin
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#user-5">
                    <i class="fa fa-user"></i> Keluarga
                </a>
            </li>
        </ul>
    </header>
    <div class="panel-body">
        <div class="tab-content">
            <div id="user-1" class="tab-pane active">
                <?php
                  // echo $iddebitur;
                  // $datamaster = getdatamaster($conn,$iddebitur);
                  $sql = mysqli_query($conn,"SELECT * from acc_master_debitur where iddebitur='$iddebitur'");
                  while ($datamaster = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
                ?>

                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style="border-color: #f1c500;">
                              Edit Data Calon Debitur ( <b>Badan Usaha : <?php echo $datamaster['badan_usaha'];?></b> ) 
                          </header>
                          <div class="panel-body"><br>
                              <form role="form" id="edit-calondebitur">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Nama (Sesuai KTP)</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo $datamaster['nama'];?>">
                                      <input type="hidden" class="form-control" name="badan_usaha" value="<?php echo $datamaster['badan_usaha'];?>">
                                      <input type="hidden" class="form-control" name="cuser" value="<?php echo $datamaster['cuser'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $datamaster['tempat_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $datamaster['tanggal_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. KTP</label>
                                      <input type="text" class="form-control" name="no_ktp" value="<?php echo $datamaster['no_ktp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea class="form-control" name="alamat"><?php echo $datamaster['alamat'];?></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. NPWP</label>
                                      <input type="text" class="form-control" name="no_npwp" value="<?php echo $datamaster['no_npwp'];?>">
                                    </div>
                                  </div>
                                </div>
                                <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                                <p><b>Dokumen-Dokumen</b></p>
                                <table class="table table-bordered">
                                  <tr>
                                    <td><b>FORM SLIK</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datamaster['dok_slik']?>" target="_blank"><?php echo $datamaster['dok_slik']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><b>FORM SLIK (Ditandatangani)</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datamaster['dok_slik_ttd']?>" target="_blank"><?php echo $datamaster['dok_slik_ttd']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                </table>
                                <br><br>
                                  <button type="button" class="btn btn-success simpan-edit-calondebitur" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i> Simpan</button>
                              </form>
                              <br>
                              <div id="resultperorangan"></div>
                          </div>
                      </section>
                  </div>
                </div>

                <?php

                  }
                ?>
            </div>
            <div id="user-2" class="tab-pane ">
                <!--DATA PENJAMIN-->
                <?php
                  // echo $iddebitur;
                  // $datamaster = getdatamaster($conn,$iddebitur);
                  $no = 1;
                  $sql = mysqli_query($conn,"SELECT * from acc_deb_penjamin where iddebitur='$iddebitur'");
                  while ($datapenjamin = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
                ?>

                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <b>[ Edit Data Penjamin ke - <?php echo $no;?> ]</b> 
                          </header>
                          <div class="panel-body">
                              <form role="form" id="edit-penjamin">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Nama (Sesuai KTP)</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo $datapenjamin['nama'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $datapenjamin['tempat_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $datapenjamin['tanggal_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. KTP</label>
                                      <input type="text" class="form-control" name="no_ktp" value="<?php echo $datapenjamin['no_ktp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea class="form-control" name="alamat"><?php echo $datapenjamin['alamat'];?></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. NPWP</label>
                                      <input type="text" class="form-control" name="no_npwp" value="<?php echo $datapenjamin['no_npwp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Hubungan dengan Calon Debitur</label>
                                      <input type="text" class="form-control" name="hubungan_debitur" value="<?php echo $datapenjamin['hubungan_debitur'];?>">
                                    </div>
                                  </div>
                                </div>
                                <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                                <p><b>Dokumen-Dokumen</b></p>
                                <table class="table table-bordered">
                                  <tr>
                                    <td><b>FORM SLIK</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datapenjamin['dok_slik']?>" target="_blank"><?php echo $datapenjamin['dok_slik']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><b>FORM SLIK (Ditandatangani)</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datapenjamin['dok_slik_ttd']?>" target="_blank"><?php echo $datapenjamin['dok_slik_ttd']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                </table>
                                <br><br>
                                  <button type="button" class="btn btn-success simpan-edit-penjamin" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i> Simpan</button>
                              </form>
                              <br>
                              <div id="resultperorangan"></div>
                          </div>
                      </section>
                  </div>
                </div>
                <div class="alert alert-danger"></div>
                <?php
                    $no++;
                  }
                ?>
            </div>
            <div id="user-3" class="tab-pane ">
                <!--DATA PASANGAN-->
                <?php
                  $no = 1;
                  // echo $iddebitur;
                  // $datamaster = getdatamaster($conn,$iddebitur);
                  $sql = mysqli_query($conn,"SELECT * from acc_deb_pasangan where iddebitur='$iddebitur'");
                  while ($datapasangan = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
                ?>

                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <b>[ Edit Data Pasangan ke - <?php echo $no;?> ]</b>
                          </header>
                          <div class="panel-body">
                              <form role="form" id="edit-pasangan">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Nama (Sesuai KTP)</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo $datapasangan['nama'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $datapasangan['tempat_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $datapasangan['tanggal_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. KTP</label>
                                      <input type="text" class="form-control" name="no_ktp" value="<?php echo $datapasangan['no_ktp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea class="form-control" name="alamat"><?php echo $datapasangan['alamat'];?></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. NPWP</label>
                                      <input type="text" class="form-control" name="no_npwp" value="<?php echo $datapasangan['no_npwp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Hubungan dengan Calon Debitur</label>
                                      <input type="text" class="form-control" name="hubungan_debitur" value="<?php echo $datapasangan['hubungan_debitur'];?>">
                                    </div>
                                  </div>
                                </div>
                                <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                                <p><b>Dokumen-Dokumen</b></p>
                                <table class="table table-bordered">
                                  <tr>
                                    <td><b>FORM SLIK</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datapasangan['dok_slik']?>" target="_blank"><?php echo $datapasangan['dok_slik']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><b>FORM SLIK (Ditandatangani)</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datapasangan['dok_slik_ttd']?>" target="_blank"><?php echo $datapasangan['dok_slik_ttd']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                </table>
                                <br><br>
                                  <button type="button" class="btn btn-success simpan-edit-pasangan" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i> Simpan</button>
                              </form>
                              <br>
                              <div id="resultperorangan"></div>
                          </div>
                      </section>
                  </div>
                </div>
                <div class="alert alert-danger"></div>
                <?php
                    $no++;
                  }
                ?>
            </div>
            <div id="user-4" class="tab-pane ">
                <!--DATA PASANGAN PENJAMIN-->
                <?php
                  $no = 1;
                  // echo $iddebitur;
                  // $datamaster = getdatamaster($conn,$iddebitur);
                  $sql = mysqli_query($conn,"SELECT * from acc_deb_pasangan_penjamin where iddebitur='$iddebitur'");
                  while ($datapasanganpenjamin = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
                ?>

                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <b>[ Edit Data Pasangan Penjamin ke - <?php echo $no;?> ]</b>
                          </header>
                          <div class="panel-body">
                              <form role="form" id="edit-pasanganpenjamin">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Nama (Sesuai KTP)</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo $datapasanganpenjamin['nama'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $datapasanganpenjamin['tempat_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $datapasanganpenjamin['tanggal_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. KTP</label>
                                      <input type="text" class="form-control" name="no_ktp" value="<?php echo $datapasanganpenjamin['no_ktp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea class="form-control" name="alamat"><?php echo $datapasanganpenjamin['alamat'];?></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. NPWP</label>
                                      <input type="text" class="form-control" name="no_npwp" value="<?php echo $datapasanganpenjamin['no_npwp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Hubungan dengan Calon Debitur</label>
                                      <input type="text" class="form-control" name="hubungan_debitur" value="<?php echo $datapasanganpenjamin['hubungan_debitur'];?>">
                                    </div>
                                  </div>
                                </div>
                                <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                                <p><b>Dokumen-Dokumen</b></p>
                                <table class="table table-bordered">
                                  <tr>
                                    <td><b>FORM SLIK</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datapasanganpenjamin['dok_slik']?>" target="_blank"><?php echo $datapasanganpenjamin['dok_slik']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><b>FORM SLIK (Ditandatangani)</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datapasanganpenjamin['dok_slik_ttd']?>" target="_blank"><?php echo $datapasanganpenjamin['dok_slik_ttd']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                </table>
                                <br><br>
                                  <button type="button" class="btn btn-success simpan-edit-pasanganpenjamin" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i> Simpan</button>
                              </form>
                              <br>
                              <div id="resultperorangan"></div>
                          </div>
                      </section>
                  </div>
                </div>
                <div class="alert alert-danger"></div>
                <?php
                    $no++;
                  }
                ?>
            </div>
            <div id="user-5" class="tab-pane ">
                <!--DATA PASANGAN PENJAMIN-->
                <?php
                  $no=1;
                  // echo $iddebitur;
                  // $datamaster = getdatamaster($conn,$iddebitur);
                  $sql = mysqli_query($conn,"SELECT * from acc_deb_keluarga where iddebitur='$iddebitur'");
                  while ($datakeluarga = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
                ?>

                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <b>[ Edit Data Keluarga ke - <?php echo $no;?> ]</b>
                          </header>
                          <div class="panel-body">
                              <form role="form" id="edit-keluarga">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Nama (Sesuai KTP)</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo $datakeluarga['nama'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $datakeluarga['tempat_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $datakeluarga['tanggal_lahir'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. KTP</label>
                                      <input type="text" class="form-control" name="no_ktp" value="<?php echo $datakeluarga['no_ktp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea class="form-control" name="alamat"><?php echo $datakeluarga['alamat'];?></textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>No. NPWP</label>
                                      <input type="text" class="form-control" name="no_npwp" value="<?php echo $datakeluarga['no_npwp'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Hubungan dengan Calon Debitur</label>
                                      <input type="text" class="form-control" name="hubungan_debitur" value="<?php echo $datakeluarga['hubungan_debitur'];?>">
                                    </div>
                                  </div>
                                </div>
                                <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                                <p><b>Dokumen-Dokumen</b></p>
                                <table class="table table-bordered">
                                  <tr>
                                    <td><b>FORM SLIK</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datakeluarga['dok_slik']?>" target="_blank"><?php echo $datakeluarga['dok_slik']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><b>FORM SLIK (Ditandatangani)</b></td>
                                    <td><a href="../upload/dok_slik/<?php echo $datakeluarga['dok_slik_ttd']?>" target="_blank"><?php echo $datakeluarga['dok_slik_ttd']?></a></td>
                                    <td>
                                      Ganti Dokumen<br>
                                      <input type="file" name="">
                                    </td>
                                  </tr>
                                </table>
                                <br><br>
                                  <button type="button" class="btn btn-success simpan-edit-keluarga" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i> Simpan</button>
                              </form>
                              <br>
                              <div id="resultperorangan"></div>
                          </div>
                      </section>
                  </div>
                </div>
                <div class="alert alert-danger"></div>
                <?php
                    $no++;
                  }
                ?>
            </div>
        </div>
    </div>
</section>





