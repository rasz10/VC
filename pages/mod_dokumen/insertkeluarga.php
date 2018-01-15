<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$iddebitur = $_POST['iddebitur'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir_ = $_POST['tanggal_lahir'];
	$bulan_lahir = $_POST['bulan_lahir'];
	$tahun_lahir = $_POST['tahun_lahir'];
	$tanggal_lahir = $tahun_lahir."-".$bulan_lahir."-".$tanggal_lahir_;
	$no_ktp = $_POST['no_ktp'];
	$alamat = $_POST['alamat'];
	$no_npwp = $_POST['no_npwp'];
	$hubungan_debitur = $_POST['hubungan_debitur'];

	//get id penjamin
	$tanggalhariini = date('Y-m-d H:i:s');
    //cari batchno
        $batchno_=substr($tanggalhariini, 0,7);
        $batchno= preg_replace("/[^0-9]/","", $batchno_); 

        // echo $batchno;

	$getcountkeluarga = getcountkeluarga($conn);
	if ($getcountkeluarga == 0) {
		$nokeluarga = 1;
	}else{
		$getmaxkeluarga = getmaxkeluarga($conn);
		// $hasil = substr($getmax, 7);
		// echo $hasil;
		$nokeluarga = $getmaxkeluarga + 1;
		// echo "<br/>".$nodebt;
	}
		//cari kode debitur
        $idkeluarga = "PS".$batchno."".$nokeluarga;

    $sql = mysqli_query($conn,"INSERT INTO acc_deb_keluarga (no,idkeluarga,nama,tempat_lahir,tanggal_lahir,no_ktp,alamat,no_npwp,hubungan_debitur,iddebitur,cdate) VALUES ('$nokeluarga','$idkeluarga','$nama','$tempat_lahir','$tanggal_lahir','$no_ktp','$alamat','$no_npwp','$hubungan_debitur','$iddebitur','$tanggalhariini')");

	if ($sql) {
		echo "<div class='alert alert-success'>Berhasil Disimpan !! Silahkan Upload Dokumen !!<br><br></div>|".$idkeluarga."";
	}else{
		echo "<div class='alert alert-danger'>Gagal Disimpan !!</div>";
	}

?>