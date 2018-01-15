<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$iddebitur = $_GET['par'];
	$namadebitur = $_GET['par2'];

	$getdokumen = getdokumen($conn,$iddebitur);

	unlink("../../upload/dok_pic_slik/".$getdokumen);
			$update = mysqli_query($conn,"UPDATE acc_master_debitur SET upload_by_slik = '' where iddebitur='$iddebitur'");

			if ($update)
		    {
		            //echo "Data Anda Berhasil Upload";
		    		
		            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur");
		            echo "<script>alert('Berhasil Upload');</script>";
		    }
		    else
		    {
		            // echo "gagal";
		    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
		    }  
?>