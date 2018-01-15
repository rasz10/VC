<?php
	// $statussidf = $_POST['statussid'];
	// echo $statussidf;

	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$iddebitur = $_POST['iddebitur'];
	$status = $_POST['status'];
	$catatan = $_POST['catatan'];
	$user = $_POST['username'];
	$date = $_POST['todaytime'];
	// echo $iddebitur."|".$statussidf;

	$NANO = count($iddebitur);
	
	for($i=0; $i<$NANO; $i++){
		if ($status[$i] != "-") {
			// $query = "UPDATE acc_master_debitur SET statussidf='$statussidf[$i]',catatansid='$catatansid[$i]',user='$user[$i]',cdate='$sid_date[$i]' where iddebitur='$iddebitur[$i]'";
			// echo $query."<br>";
			// $sql = mysqli_query($conn,$query);

			$monitoring = "UPDATE acc_monitoring SET validasiproposal_vco_korporasi='$status[$i]',user_validasiproposal_vco_korporasi='$user[$i]"."|"."$date[$i]',note_validasiproposal_vco_korporasi='$catatan[$i]' where iddebitur='$iddebitur[$i]'";
			// echo $monitoring."<br>";
			$sqlmonitoring = mysqli_query($conn,$monitoring);
			// echo $query."<br>";
			// echo $monitoring."<br>";
		if ($sqlmonitoring)
            {
                    echo "<script>alert('Data Berhasil di Update'); location='../home?par=lihatdata&par2=proposal'; </script>";
                    }
            else
            {
                     echo "<script>alert('Mohon Maaf Update Gagal !! Silahkan Update Lagi.. '); location='../home?par=lihatdata&par2=proposal'; </script>";
            } 	
		}
	}
?>