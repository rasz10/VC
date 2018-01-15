<?php
	$badanusaha_ = $_POST['badanusaha'];
  $pengelola_akun = $_POST['pengelola_akun'];
  // echo $pengelola_akun;
  if (empty($badanusaha_) AND empty($pengelola_akun)) {
    echo "<font color='red'><b>Mohon Maaf Anda Belum Memilih</b></font>&nbsp;&nbsp;<br><a href='home?par=inputdokumen'>Input Lagi</a>";
    $badanusaha = "";
  }else if (empty($badanusaha_) AND !empty($pengelola_akun)) {
    echo "<font color='red'><b>Mohon Maaf Anda Belum Memilih Jenis Badan Usaha</b></font>&nbsp;&nbsp;<br><a href='home?par=inputdokumen'>Input Lagi</a>";
    $badanusaha = "";
  }else if (!empty($badanusaha_) AND empty($pengelola_akun)) {
    echo "<font color='red'><b>Mohon Maaf Anda Belum Memilih Pengelola Akun</b></font>&nbsp;&nbsp;<br><a href='home?par=inputdokumen'>Input Lagi</a>";
    $badanusaha = "";
  }else{
    $ex_badanusaha = explode("|", $badanusaha_);
    $badanusaha = $ex_badanusaha[0];
    $cuser = $ex_badanusaha[1];
  }
  
  // $cuser = $_POST['username'];
?>
<!-- <a href="#" onclick="window.open('mod_dokumen/uploaddokumen.php','popwin','width=700, height=480')" class="btn btn-success"><i class="fa fa-upload"></i> Upload Dokumen</a>
&nbsp;
<a href="#" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Output</a> -->
<!-- <br> -->
<?php
	switch ($badanusaha) {
		case 'Perusahaan':
?>
<div class="row">
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Calon Debitur ( <b>Badan Usaha : <?php echo $badanusaha;?></b> ) 
          </header>
          <div class="panel-body">
          	<table class="table">
          		<tr>
          			<td>
          				<form role="form">
		                  <div class="form-group">
		                      <label>Nama (Sesuai KTP)</label>
		                      <input type="text" class="form-control">
                          <input type="hidden" class="form-control" name="badanusaha" value="<?php echo $badanusaha;?>">
		                  </div>
		                  <div class="form-group">
		                      <label>Tanggal Lahir</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>No. KTP</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Alamat</label>
		                      <textarea class="form-control"></textarea>
		                  </div>
		                  <div class="form-group">
		                      <label>No. NPWP</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <button type="submit" class="btn btn-info">Submit</button>
		              </form>	
          			</td>
          		</tr>
          	</table>
          </div>
      </section>
  </div>
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Penjamin ( <b>Badan Usaha : <?php echo $badanusaha;?></b> )  
          </header>
          <div class="panel-body">
          	<table class="table">
          		<tr>
          			<td>
          				<form role="form">
		                  <div class="form-group">
		                      <label>Nama (Sesuai KTP)</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Tanggal Lahir</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>No. KTP</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Alamat</label>
		                      <textarea class="form-control"></textarea>
		                  </div>
		                  <div class="form-group">
		                      <label>No. NPWP</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Kaitan dengan Calon Debitur</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <button type="submit" class="btn btn-info">Submit</button>
		              </form>
          			</td>
          		</tr>
          	</table>
          </div>
      </section>
  </div>
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Pasangan  ( <b>Badan Usaha : <?php echo $badanusaha;?></b> ) 
          </header>
          <div class="panel-body">
          	<table class="table">
          		<tr>
          			<td>
          				<form role="form">
		                  <div class="form-group">
		                      <label>Nama (Sesuai KTP)</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Tanggal Lahir</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>No. KTP</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Alamat</label>
		                      <textarea class="form-control"></textarea>
		                  </div>
		                  <div class="form-group">
		                      <label>No. NPWP</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <div class="form-group">
		                      <label>Kaitan dengan Calon Debitur</label>
		                      <input type="text" class="form-control">
		                  </div>
		                  <button type="submit" class="btn btn-info">Submit</button>
		              </form>
          			</td>
          		</tr>
          	</table>
          </div>
      </section>
  </div>
</div>
<?php
			break;

		case 'Perorangan':
?>
<div class="row">
  <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
              Input Data Calon Debitur ( <b>Badan Usaha : <?php echo $badanusaha;?></b> ) 
          </header>
          <div class="panel-body">
              <form role="form" id="debitur-perorangan">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Nama (Sesuai KTP)</label>
                      <input type="text" class="form-control" name="nama">
                      <input type="hidden" class="form-control" name="badan_usaha" value="<?php echo $badanusaha;?>">
                      <input type="hidden" class="form-control" name="pengelola_akun" value="<?php echo $pengelola_akun;?>">
                      <input type="hidden" class="form-control" name="cuser" value="<?php echo $cuser;?>">
                    </div>
                  </div>
                  <div class="col-lg-2">
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
                </div>
                <br><br>
                  <button type="button" class="btn btn-success simpan-perorangan" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i> Simpan</button>
              </form>
              <br>
              <div id="resultperorangan"></div>
          </div>
      </section>
  </div>
  <!-- <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Penjamin ( <b>Badan Usaha : <?php echo $badanusaha;?></b> )  
          </header>
          <div class="panel-body">
              <form role="form">
                  <div class="form-group">
                      <label>Nama (Sesuai KTP)</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>No. KTP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label>No. NPWP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Kaitan dengan Calon Debitur</label>
                      <input type="text" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
              </form>

          </div>
      </section>
  </div>
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Pasangan  ( <b>Badan Usaha : <?php echo $badanusaha;?></b> ) 
          </header>
          <div class="panel-body">
              <form role="form">
                  <div class="form-group">
                      <label>Nama (Sesuai KTP)</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>No. KTP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label>No. NPWP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Kaitan dengan Calon Debitur</label>
                      <input type="text" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
              </form>

          </div>
      </section>
  </div> -->
</div>
<?php
			break;

		case 'Koperasi':
?>
<div class="row">
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Calon Debitur ( <b>Badan Usaha : <?php echo $badanusaha;?></b> ) 
          </header>
          <div class="panel-body">
              <form role="form">
                  <div class="form-group">
                      <label>Nama (Sesuai KTP)</label>
                      <input type="text" class="form-control">
                      <input type="hidden" class="form-control" name="badanusaha" value="<?php echo $badanusaha;?>">
                  </div>
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>No. KTP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label>No. NPWP</label>
                      <input type="text" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
              </form>

          </div>
      </section>
  </div>
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Penjamin ( <b>Badan Usaha : <?php echo $badanusaha;?></b> )  
          </header>
          <div class="panel-body">
              <form role="form">
                  <div class="form-group">
                      <label>Nama (Sesuai KTP)</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>No. KTP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label>No. NPWP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Kaitan dengan Calon Debitur</label>
                      <input type="text" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
              </form>

          </div>
      </section>
  </div>
  <div class="col-lg-6">
      <section class="panel">
          <header class="panel-heading">
              Input Data Pasangan  ( <b>Badan Usaha : <?php echo $badanusaha;?></b> ) 
          </header>
          <div class="panel-body">
              <form role="form">
                  <div class="form-group">
                      <label>Nama (Sesuai KTP)</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>No. KTP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label>No. NPWP</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Kaitan dengan Calon Debitur</label>
                      <input type="text" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
              </form>

          </div>
      </section>
  </div>
</div>
<?php
			break;
		
		default:
			# code...
			break;
	}
?>
 
 <script type="text/javascript">
   $(document).ready(function() {
    $(".simpan-perorangan").click(function(e){
           $(".simpan-perorangan").prop('disabled', true);  
        });
    $(".simpan-perorangan").click(function () {
            // alert(kodekendaraan);
            dataString = $("#debitur-perorangan").serialize();
            //alert(dataString);
            //alert( $("form").serialize() );
                $.ajax({
                type: "POST",
                url: "mod_dokumen/do_form_badanusaha.php",
                data: dataString,
                success: function(e){
                    // alert(e);
                    // if (e == "SUKSES") {
                    //   success="<div class='alert alert-success'>Berhasil Disimpan !!</div>";
                      $("#resultperorangan").html(e);
                    // }else{
                    //   failed="<div class='alert alert-danger'>Gagal Disimpan !!</div>";
                    //   $("#resultperorangan").html(failed);
                    // }
                    
                    //$(".loading").fadeOut('slow');
                }   
            });  
      });
    // $(".upload").click(function () {
    //         window.open('mod_dokumen/uploaddokumen.php','popwin','width=700, height=480');
    //   });

 });

 </script>

<script type="text/javascript">
  $(document).on("click", ".modalupload", function () {
     var id_debitur = $(this).data('id');
     var nama_debt = $(this).data('debt');
     var username = $(this).data('username');

     $(".modal-body .iddebitur").val( id_debitur );
     $(".modal-body .namadebitur").val( nama_debt );
     $(".modal-body .username").val( username );
});

  $(document).on("click", ".modalpenjamin", function () {
     var id_debitur = $(this).data('id');
     var nama_debt = $(this).data('debt');
     $(".modal-body .iddebitur").val( id_debitur );
     $(".modal-body .namadebitur").val( nama_debt );
});

  $(document).on("click", ".modalpasangan", function () {
     var id_debitur = $(this).data('id');
     var nama_debt = $(this).data('debt');
     $(".modal-body .iddebitur").val( id_debitur );
     $(".modal-body .namadebitur").val( nama_debt );
});

  $(document).on("click", ".modal-perorangan-tambah-penjamin", function () {
     var no = $(this).data('no');
     $(".modal-body .no").val( no );
});

$(document).ready(function() {

$(".refreshupload").click(function(e){
    var kosong = "";
    $("#resultdokumen1").hide();
    $("#resultdokumen2").hide();
    $(".inputslik").val(kosong);
    $(".inputslikttd").val(kosong);
  });
});
</script>
<script src="../js/my.js"></script>
<!--  <script>
function myFunction() {
    window.open("mod_dokumen/uploaddokumen.php",'popwin','width=700, height=480');
}
</script> -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-perorangan" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Upload Dokumen</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="upload_dok_calon_debitur">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Nama Calon Debitur</label>
                        <input type="text" class="form-control namadebitur" id="namadebitur" name="namadebitur" readonly>
                        <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                        <input type="hidden" name="username" class="username">
                      </div>
                    </div>
                    <div class="col-lg-12">
                       <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Form SLIK</label>
                        <input type="file" class="form-control inputslik" name="form_slik">
                        <input type="hidden" name="jenis_individu" value="calondebitur">
                      </div>
                    </div>
                    <div class="col-lg-12" id="resultdokumen1">
                    </div>
                    <!-- <div class="col-lg-12">
                      <div class="form-group">
                        <button class="btn btn-primary">Upload</button>&nbsp;<button class="btn btn-danger">Hapus</button>
                      </div>
                    </div> -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Form SLIK (Sudah Ditandatangani)</label>
                        <input type="file" class="form-control inputslikttd" name="form_slik_ttd">
                      </div>
                    </div>
                    <div class="col-lg-12" id="resultdokumen2">
                    </div>
                    <div class="col-lg-12">
                      <button type="button" class="btn btn-primary simpanuploaddokumen">Simpan</button>&nbsp;<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>&nbsp;<button class="btn btn-warning refreshupload" type="button"><i class="fa fa-refresh"></i></button>
                    </div>
                    <!-- <div class="col-lg-12">
                      <div class="form-group">
                        <button class="btn btn-primary">Upload</button>&nbsp;<button class="btn btn-danger">Hapus</button>
                      </div>
                    </div> -->
                    <div class="col-lg-12">
                    </div>
                    <br>
                    <div class="col-lg-12" id="resultdokumen">
                    </div>
                  </div>
                  <br>
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-perorangan-penjamin" class="modal fade" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Input Data Penjamin</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="form-penjamin-perseorangan">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Nama Calon Debitur</label>
                        <input type="text" class="form-control namadebitur" id="namadebitur" readonly>
                        <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                      </div>
                    </div>
                    <div class="col-lg-12">
                       <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Nama Penjamin(Sesuai KTP)</label>
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
                        <button type="button" class="btn btn-success simpan-penjamin-perseorangan"><i class="fa fa-floppy-o"></i> Simpan</button><br>
                      </div>
                    </div>
                    <div class="col-lg-12" id="resultjaminanperseorangan">
                    </div>
                    </form>
                    <div class="col-lg-12">
                    </div>
                    <form role="form" id="form-upload-penjamin-perseorangan">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Upload Form SLIK</label>
                          <input type="file" class="form-control" name="form_slik_penjamin">
                          <input type="hidden" name="jenis_individu" value="penjamin">
                          <input type="hidden" class="form-control namadebitur" id="namadebitur" name="namadebitur" readonly>
                          <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-primary simpanuploaddokumenpenjamin">Upload</button>
                        </div>
                      </div>
                      <div class="col-lg-12" id="resultjaminanuploadperseorangan">
                      </div>
                    </form>
                  </div>
                  <br>
                  <br>
                  <a href='#modal-perorangan-tambah-penjamin' data-toggle='modal' data-no="1" class='btn btn-default modal-perorangan-tambah-penjamin'><i class='fa fa-plus'></i> <font color="red">Tambah Data Penjamin</font></a>
                  <!-- <a href='#modal-perorangan-tambah-penjamin' data-toggle='modal' data-no="2" class='btn btn-default modal-perorangan-tambah-penjamin'><i class='fa fa-plus'></i> <font color="red">Tambah Data Penjamin 2</font></a>
                  <a href='#modal-perorangan-tambah-penjamin' data-toggle='modal' data-no="3" class='btn btn-default modal-perorangan-tambah-penjamin'><i class='fa fa-plus'></i> <font color="red">Tambah Data Penjamin 3</font></a>
                  <a href='#modal-perorangan-tambah-penjamin' data-toggle='modal' data-no="4" class='btn btn-default modal-perorangan-tambah-penjamin'><i class='fa fa-plus'></i> <font color="red">Tambah Data Penjamin 4</font></a> -->
                  <!-- <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Tambah Data Penjamin 1</button> -->
                  <!-- &nbsp;&nbsp;<button type="submit" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Tambah Data Penjamin 2</button>
                  &nbsp;&nbsp;<button type="submit" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Tambah Data Penjamin 3</button>
                  &nbsp;&nbsp;<button type="submit" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Tambah Data Penjamin 4</button> -->
                
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-perorangan-tambah-penjamin" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" style="border: 5px solid #e8a735;">
            <div class="modal-header" style="background: #e8a735;">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Input Tambah Data Penjamin</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="form-penjamin-perseorangan-tambah">
                  <div class="row">
                    <!-- <div class="col-lg-4">
                      <div class="form-group">
                        <label>No</label>
                        <input type="text" class="form-control no" id="no" name="no" readonly>
                      </div>
                    </div> -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Nama Calon Debitur</label>
                        <input type="text" class="form-control namadebitur" id="namadebitur" name="namadebitur" readonly>
                        <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                      </div>
                    </div>
                    <div class="col-lg-12">
                       <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Nama (Sesuai KTP)</label>
                        <input type="text" class="form-control" name="nama">
                        <input type="hidden" class="form-control" name="badan_usaha" value="<?php echo $badanusaha;?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                      </div>
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-4">
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
                  <div class="col-lg-4">
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
                  <div class="col-lg-4">
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
                        <button type="submit" class="btn btn-success simpan-penjamin-perseorangan-tambah"><i class="fa fa-floppy-o"></i> Simpan</button><br>
                      </div>
                    </div>
                    </form>
                    <div class="col-lg-12" id="resultjaminanperseorangantambah">
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <form role="form" id="form-upload-penjamin-perseorangan-tambah">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Upload Form SLIK</label>
                          <input type="file" class="form-control" name="form_slik_penjamin">
                          <input type="hidden" name="jenis_individu" value="penjamin">
                          <input type="hidden" class="form-control namadebitur" id="namadebitur" name="namadebitur" readonly>
                          <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-primary simpanuploaddokumenpenjamintambah">Upload</button>
                        </div>
                      </div>
                      <div class="col-lg-12" id="resultjaminanuploadperseorangantambah">
                      </div>
                      </form>
                  </div>
                  
                  
                  <br><br>
                
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-perorangan-pasangan" class="modal fade" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Input Data Pasangan</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="form-pasangan-perseorangan">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Nama Calon Debitur</label>
                        <input type="text" class="form-control namadebitur" id="namadebitur" readonly>
                        <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
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
                        <button type="button" class="btn btn-success simpan-pasangan-perseorangan"><i class="fa fa-floppy-o"></i> Simpan</button><br>
                      </div>
                    </div>
                    <div class="col-lg-12" id="resultpasanganperseorangan">
                    </div>
                    <div class="col-lg-12">
                    </div>
                    
                  </div>

                  <!-- <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan 2</font></a>
                  <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan 3</font></a>
                  <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan 4</font></a> -->
                </form>
                <div class="row">
                  <form role="form" class="form-upload-pasangan-perseorangan">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Form SLIK</label>
                        <input type="file" class="form-control" name="form_slik_pasangan">
                        <input type="hidden" name="jenis_individu" value="pasangan">
                          <input type="hidden" class="form-control namadebitur" id="namadebitur" name="namadebitur" readonly>
                          <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <button type="button" class="btn btn-primary simpanuploaddokumenpasangan">Upload</button>
                      </div>
                    </div>
                      <div class="col-lg-12" id="resultpasanganuploadperseorangan">
                      </div>
                  </form>
                  <br><br>
                  <a href='#modal-perorangan-tambah-pasangan' data-toggle='modal' class='btn btn-default'><i class='fa fa-plus'></i> <font color="red">Tambah Data Pasangan</font></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-perorangan-tambah-pasangan" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" style="border: 5px solid #e8a735;">
            <div class="modal-header" style="background: #e8a735;">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Input Tambah Data Pasangan</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="form-pasangan-perseorangan-tambah">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Nama Calon Debitur</label>
                        <input type="text" class="form-control namadebitur" id="namadebitur" readonly>
                        <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                      </div>
                    </div>
                    <div class="col-lg-12">
                       <hr style="border : 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); ">
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Nama (Sesuai KTP)</label>
                        <input type="text" class="form-control" name="nama">
                        <input type="hidden" class="form-control" name="badan_usaha" value="<?php echo $badanusaha;?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                      </div>
                    </div>
                     <div class="col-lg-12">
                    </div>
                    <div class="col-lg-4">
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
                  <div class="col-lg-4">
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
                  <div class="col-lg-4">
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
                        <button type="submit" class="btn btn-success simpan-pasangan-perseorangan-tambah"><i class="fa fa-floppy-o"></i> Simpan</button><br>
                      </div>
                    </div>
                    </form>
                    <div class="col-lg-12" id="resultpasanganperseorangantambah">
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <form role="form" id="form-upload-pasangan-perseorangan-tambah">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Upload Form SLIK</label>
                          <input type="file" class="form-control" name="form_slik_pasangan">
                          <input type="hidden" name="jenis_individu" value="pasangan">
                          <input type="hidden" class="form-control namadebitur" id="namadebitur" name="namadebitur" readonly>
                          <input type="hidden" class="form-control iddebitur" id="iddebitur" name="iddebitur" readonly>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-primary simpanuploaddokumenpasangantambah">Upload</button>
                        </div>
                      </div>
                      <div class="col-lg-12" id="resultpasanganuploadperseorangantambah">
                      </div>
                      </form>
                  </div>
            </div>
        </div>
    </div>
</div>
