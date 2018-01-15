<?php
	include "../config/koneksi.php";
	if(is_uploaded_file($_FILES['dok_slik']['tmp_name'])) {
		$sourcePath = $_FILES['dok_slik']['tmp_name'];
		$namafile = $_FILES['dok_slik']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_pic_slik/".$namabaru;
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_master_debitur SET upload_by_slik='$namabaru' where iddebitur='$iddebitur' ";
				$sql = mysqli_query($conn,$query);

				// $monitoring = "INSERT INTO acc_monitoring (iddebitur,uploaddokumensid) VALUES ('$iddebitur','1')";
				// $sqlmonitoring = mysqli_query($conn,$monitoring);
				// $sukses1 = "SUKSES";
				echo "SUKSES";
				echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt'; </script>";


			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL";
				echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php'; </script>";
			}
	}

?>