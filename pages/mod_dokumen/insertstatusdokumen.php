<?php
	include "../config/koneksi.php";

	$iddebitur = $_POST['iddebitur'];
	$statussid = $_POST['statussid'];
	// echo $iddebitur."|".$statussidf;

	$NANO = count($iddebitur);
	
	for($i=0; $i<$NANO; $i++){
		$sql = mysqli_query($conn,"UPDATE acc_master_debitur SET statussidf='$statussid[$i]' where iddebitur='$iddebitur[$i]'");

		if ($sql) {
			echo "SUKSES";
		}else{
			echo "GAGAL";
		}
	}
?>