<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$nama = $_POST['nama'];
	$badan_usaha = $_POST['badan_usaha'];
	$pengelola_akun = $_POST['pengelola_akun'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir_ = $_POST['tanggal_lahir'];
	$bulan_lahir = $_POST['bulan_lahir'];
	$tahun_lahir = $_POST['tahun_lahir'];
	$tanggal_lahir = $tahun_lahir."-".$bulan_lahir."-".$tanggal_lahir_;
	$no_ktp = $_POST['no_ktp'];
	$alamat = $_POST['alamat'];
	$no_npwp = $_POST['no_npwp'];
	$cuser = $_POST['cuser'];

	// echo $nama."|".$badan_usaha."|".$tempat_lahir."|".$tanggal_lahir."|".$alamat."|".$no_npwp;

	$tanggalhariini = date('Y-m-d H:i:s');
    //cari batchno
        $batchno_=substr($tanggalhariini, 0,7);
        $batchno= preg_replace("/[^0-9]/","", $batchno_); 

        // echo $batchno;

	$getcountdebt = getcountdebt($conn);
	if ($getcountdebt == 0) {
		$nodebt = 1;
	}else{
		$getmax = getmax($conn);
		// $hasil = substr($getmax, 7);
		// echo $hasil;
		$nodebt = $getmax + 1;
		// echo "<br/>".$nodebt;
	}
		//cari kode debitur
        $iddebitur = "D".$batchno."".$nodebt;
        // echo "<br>".$iddebitur;

	$sql = mysqli_query($conn,"INSERT INTO acc_master_debitur (no,iddebitur,badan_usaha,pengelola_akun,nama,tempat_lahir,tanggal_lahir,no_ktp,alamat,no_npwp,cuser,cdate) VALUES ('$nodebt','$iddebitur','$badan_usaha','$pengelola_akun','$nama','$tempat_lahir','$tanggal_lahir','$no_ktp','$alamat','$no_npwp','$cuser','$tanggalhariini')");

	if ($sql) {
		echo "<div class='alert alert-success'>Berhasil Disimpan !! Silahkan Upload Dokumen !!<br><br><a href='#modal-perorangan' data-id=".$iddebitur." data-debt=".$nama." data-username=".$cuser." data-toggle='modal' class='btn btn-primary modalupload'><i class='fa fa-upload'></i> Upload Dokumen</a>&nbsp;<a href='#' class='btn btn-warning'><i class='fa fa-print'></i> Cetak Output</a>&nbsp;<a href='home?par=inputpenjamin&par2=".$iddebitur."' target='_blank' class='btn btn-default modalpenjamin'><i class='fa fa-edit'></i> <font color='red'>Input Data<br>Penjamin</font></a>&nbsp;<a href='home?par=inputpasangan&par2=".$iddebitur."' target='_blank' class='btn btn-default modalpasangan'><i class='fa fa-edit'></i> <font color='red'>Input Data<br>Pasangan</font></a>&nbsp;<a href='home?par=inputpasanganpenjamin&par2=".$iddebitur."' target='_blank' class='btn btn-default modalpasangan'><i class='fa fa-edit'></i> <font color='red'>Input Data<br>Pasangan Penjamin</font></a>&nbsp;<a href='home?par=inputkeluarga&par2=".$iddebitur."' target='_blank' class='btn btn-default modalpasangan'><i class='fa fa-edit'></i> <font color='red'>Input Data<br>Keluarga</font></a><br><br><a href='home?par=inputdokumen' class='btn btn-danger'><i class='fa fa-check'></i> <font color='white'>Selesai</font></a>
		</div>";
	}else{
		echo "<div class='alert alert-danger'>Gagal Disimpan !!</div>";
	}

	//Backup
	// if ($sql) {
	// 	echo "<div class='alert alert-success'>Berhasil Disimpan !! Silahkan Upload Dokumen !!<br><br><a href='#modal-perorangan' data-id=".$iddebitur." data-debt=".$nama." data-username=".$cuser." data-toggle='modal' class='btn btn-primary modalupload'><i class='fa fa-upload'></i> Upload Dokumen</a>&nbsp;<a href='#' class='btn btn-warning'><i class='fa fa-print'></i> Cetak Output</a>&nbsp;<a href='#modal-perorangan-penjamin' data-id=".$iddebitur." data-debt=".$nama." data-toggle='modal' class='btn btn-default modalpenjamin'><i class='fa fa-edit'></i> <font color='red'>Input Data Penjamin</font></a>&nbsp;<a href='#modal-perorangan-pasangan' data-id=".$iddebitur." data-debt=".$nama." data-toggle='modal' class='btn btn-default modalpasangan'><i class='fa fa-edit'></i> <font color='red'>Input Data Pasangan</font></a></div>";
	// }else{
	// 	echo "<div class='alert alert-danger'>Gagal Disimpan !!</div>";
	// }


// 	if ($sql) {
// 		echo "<div class='alert alert-success'>Berhasil Disimpan !!&nbsp;&nbsp;<a href='mod_dokumen/uploaddokumen.php?par=$iddebitur' class='btn btn-success upload'><i class='fa fa-upload'></i> Upload Dokumen</a>
// &nbsp;<a href='#' class='btn btn-primary'><i class='fa fa-print'></i> Cetak Output</a></div>";
// 	}else{
// 		echo "<div class='alert alert-danger'>Gagal Disimpan !!</div>";
// 	}
?>
