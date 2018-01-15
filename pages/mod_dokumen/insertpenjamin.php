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

	$getcountpenjamin = getcountpenjamin($conn);
	if ($getcountpenjamin == 0) {
		$nojaminan = 1;
	}else{
		$getmaxpenjamin = getmaxpenjamin($conn);
		// $hasil = substr($getmax, 7);
		// echo $hasil;
		$nojaminan = $getmaxpenjamin + 1;
		// echo "<br/>".$nodebt;
	}
		//cari kode debitur
        $idpenjamin = "PJ".$batchno."".$nojaminan;

    $sql = mysqli_query($conn,"INSERT INTO acc_deb_penjamin (no,idpenjamin,nama,tempat_lahir,tanggal_lahir,no_ktp,alamat,no_npwp,hubungan_debitur,iddebitur,cdate) VALUES ('$nojaminan','$idpenjamin','$nama','$tempat_lahir','$tanggal_lahir','$no_ktp','$alamat','$no_npwp','$hubungan_debitur','$iddebitur','$tanggalhariini')");

	if ($sql) {
		echo "<div class='alert alert-success'>Berhasil Disimpan !! Silahkan Upload Dokumen !!<br><br></div>|".$idpenjamin."";
	}else{
		echo "<div class='alert alert-danger'>Gagal Disimpan !!</div>";
	}

?>