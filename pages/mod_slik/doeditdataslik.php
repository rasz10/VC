<?php
	include "../config/koneksi.php";

	$nama_debt = $_POST['namadebitur'];
	$iddebitur = $_POST['iddebitur'];
	$statussidf = $_POST['statussidf'];

	$querystatus = "UPDATE acc_master_debitur SET statussidf='$statussidf' where iddebitur='$iddebitur' ";
	$sqlstatus = mysqli_query($conn,$querystatus);


		// if(is_uploaded_file($_FILES['dok_sid']['tmp_name'])) {
		// 	$sourcePath = $_FILES['dok_sid']['tmp_name'];
		// 	$namafile = $_FILES['dok_sid']['name'];

			
			
		// 	$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		// 	$targetPath = "../../upload/dok_pic_sid/".$namabaru;
		// 		if(move_uploaded_file($sourcePath,$targetPath)) {
		// 			$query = "UPDATE acc_master_debitur SET upload_by_sid='$namabaru' where iddebitur='$iddebitur' ";
		// 			$sql = mysqli_query($conn,$query);
		// 		}
		// }

	if ($sqlstatus) {
		// echo "SUKSES";
		echo "<script>alert('Berhasil Update'); location='editdatasid.php?par=$iddebitur&par2=$nama_debt'; </script>";


	}else{
		// $gagal1 = "GAGAL";
		// echo "GAGAL";
		echo "<script>alert('Mohon Maaf Update Gagal '); location='editdatasid.php'; </script>";
	}


?>