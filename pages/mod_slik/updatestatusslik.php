<?php
	// $statusslikf = $_POST['statusslik'];
	// echo $statusslikf;

	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$iddebitur = $_POST['iddebitur'];
	$statusslikf = $_POST['statusslik'];
	$catatanslik = $_POST['catatanslik'];
	$slik_user = $_POST['username'];
	$slik_date = $_POST['todaytime'];
	// echo $iddebitur."|".$statusslikf;

	$NANO = count($iddebitur);
	
	for($i=0; $i<$NANO; $i++){
		if ($statusslikf[$i] != "-") {
			$query = "UPDATE acc_master_debitur SET statusslikf='$statusslikf[$i]',catatanslik='$catatanslik[$i]',slik_user='$slik_user[$i]',cdate='$slik_date[$i]' where iddebitur='$iddebitur[$i]'";
			$sql = mysqli_query($conn,$query);

			$monitoring = "UPDATE acc_monitoring SET verifikasi_slik='1',user_verifikasi_slik='$slik_user[$i]"."|"."$slik_date[$i]' where iddebitur='$iddebitur[$i]'";
			$sqlmonitoring = mysqli_query($conn,$monitoring);
			// echo $query."<br>";
			// echo $monitoring."<br>";
		if ($sql)
	            {
	                    echo "<script>alert('Data Berhasil di Update'); location='../home?par=lihatdataslik'; </script>";
	                    }
	            else
	            {
	                     echo "<script>alert('Mohon Maaf Update Gagal !! Silahkan Update Lagi.. '); location='lihatdataslik.php'; </script>";
	            } 	
		}
	}
?>