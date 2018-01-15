<?php
	include "../config/fungsi.php";
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$jenis_barang = $_POST['jenis_barang'];
	$tipe_barang__ = $_POST['tipe_barang'];
	$tipe_barang_ = explode("=", $tipe_barang__);
	$tipe_barang = $tipe_barang_[1];
	$sifat_barang = $_POST['sifat_barang'];
	$penerima = $_POST['penerima'];
	$from = $_POST['from'];
	$to_ = $_POST['to'];
	$to = implode(",",$to_);
	$perihal = $_POST['perihal'];
	$tanggal = $_POST['tanggal'];
	$no_barang = $_POST['no_barang'];

	// echo $tipe_surat."|".$sifat_surat."|".$from."|".$to."|".$perihal."|".$tanggal."|".$no_surat;
	$tanggalhariini = date('Y-m-d H:i:s');
    //cari batchno
        $batchno_=substr($tanggalhariini, 0,10);
        $batchno= preg_replace("/[^0-9]/","", $batchno_); 

	$getcountsurat = getcountsurat($conn);
	if ($getcountsurat == 0) {
		$nosurat = 1;
	}else{
		$getmaxsurat = getmaxsurat($conn);
		// $hasil = substr($getmax, 7);
		// echo $hasil;
		$nosurat = $getmaxsurat + 1;
		// echo "<br/>".$nodebt;
	}
		//cari kode debitur
        $idsurat = "SR".$batchno."".$nosurat;
        // echo "<br>".$iddebitur;

    if (!empty($_POST['idsurat'])) {
    	$idsurat = $_POST['idsurat'];
    	$from_barang = $_POST['from_barang'];
    	$to_barang = $_POST['to_barang'];
    	$tipe_barang = $_POST['tipe_barang_edit'];

       	$text = "UPDATE acc_barangmasuk SET
       		jenis_barang = '$jenis_barang',
       		tipe_barang = '$tipe_barang',
       		sifat_barang = '$sifat_barang',
       		penerima = '$penerima',
       		from_barang = '$from_barang',
       		to_barang = '$to_barang',
       		perihal = '$perihal',
       		tanggal = '$tanggal',
       		no_barang = '$no_barang'

       		where idsurat = '$idsurat'
       	";
    }else{
	    $text = "INSERT INTO acc_barangmasuk (no,idsurat,jenis_barang,tipe_barang,sifat_barang,penerima,from_barang,to_barang,perihal,tanggal,no_barang) VALUES ('$nosurat','$idsurat','$jenis_barang','$tipe_barang','$sifat_barang','$penerima','$from','$to','$perihal','$tanggal','$no_barang')";
	    // echo $text;	
    }    

	$query = mysqli_query($conn,$text);

	if ($query) {
		echo "<script>alert('Berhasil Disimpan'); location='notifikasi?par=$idsurat&par2=$no_barang'; </script>";
	}else{
		// $gagal1 = "GAGAL";
		// echo "GAGAL|";
		echo "<script>alert('Mohon Maaf Gagal Disimpan '); location='surat'; </script>";
	}
?>