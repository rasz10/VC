<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";
	// include "../config/fungsi.php";
$jenis_individu = $_POST['jenis_individu'];
// echo "test";

switch ($jenis_individu) {
	case 'calondebitur':


if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['form_slik']['tmp_name'])) {
		$sourcePath = $_FILES['form_slik']['tmp_name'];
		$namafile = $_FILES['form_slik']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$username = $_POST['username'];
		$user = $username."|".$todaytime;
		$namabaru = $nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_slik/".$namabaru;
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_master_debitur SET dok_slik='$namabaru' where iddebitur='$iddebitur' ";
				$sql = mysqli_query($conn,$query);

				$monitoring = "INSERT INTO acc_monitoring (iddebitur,uploaddokumenslik,user_uploaddokumenslik) VALUES ('$iddebitur','1','$user')";
				$sqlmonitoring = mysqli_query($conn,$monitoring);
				// $sukses1 = "SUKSES";
				echo "SUKSES|";


			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL|";
			}
	}

	if(is_uploaded_file($_FILES['form_slik_ttd']['tmp_name'])) {
		$sourcePath2 = $_FILES['form_slik_ttd']['tmp_name'];
		$namafile2 = $_FILES['form_slik_ttd']['name'];
		$nama_debt2 = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$namabaru2 = $nama_debt2."-".$namafile2;
		$targetPath2 = "../../upload/dok_slik/".$namabaru2;
			if(move_uploaded_file($sourcePath2,$targetPath2)) {
				$query = "UPDATE acc_master_debitur SET dok_slik_ttd='$namabaru' where iddebitur='$iddebitur' ";
				$sql = mysqli_query($conn,$query);
				// $sukses1 = "SUKSES";
				echo "SUKSES";
			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL";
			}
	}
}


		break;


	case 'penjamin':


if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['form_slik_penjamin']['tmp_name'])) {
		$sourcePath = $_FILES['form_slik_penjamin']['tmp_name'];
		$namafile = $_FILES['form_slik_penjamin']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$idpenjamin = $_POST['idpenjamin'];
		$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_slik_penjamin/".$namabaru;
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_deb_penjamin SET dok_slik='$namabaru' where idpenjamin='$idpenjamin' ";
				$sql = mysqli_query($conn,$query);
				// $sukses1 = "SUKSES";
				echo "SUKSES";


			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL";
			}
	}
}


		break;

	case 'pasangan':


if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['form_slik_pasangan']['tmp_name'])) {
		$sourcePath = $_FILES['form_slik_pasangan']['tmp_name'];
		$namafile = $_FILES['form_slik_pasangan']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$idpasangan = $_POST['idpasangan'];
		$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_slik_pasangan/".$namabaru;
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_deb_pasangan SET dok_slik='$namabaru' where idpasangan='$idpasangan' ";
				$sql = mysqli_query($conn,$query);
				// $sukses1 = "SUKSES";
				echo "SUKSES";


			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL";
			}
	}
}


		break;

	case 'pasanganpenjamin':


if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['form_slik_pasanganpenjamin']['tmp_name'])) {
		$sourcePath = $_FILES['form_slik_pasanganpenjamin']['tmp_name'];
		$namafile = $_FILES['form_slik_pasanganpenjamin']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$idpasanganpenjamin = $_POST['idpasanganpenjamin'];
		$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_slik_pasanganpenjamin/".$namabaru;
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_deb_pasangan_penjamin SET dok_slik='$namabaru' where idpasanganpenjamin='$idpasanganpenjamin' ";
				$sql = mysqli_query($conn,$query);
				// $sukses1 = "SUKSES";
				echo "SUKSES";


			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL";
			}
	}
}


		break;
	
	case 'keluarga':


if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['form_slik_keluarga']['tmp_name'])) {
		$sourcePath = $_FILES['form_slik_keluarga']['tmp_name'];
		$namafile = $_FILES['form_slik_keluarga']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$idkeluarga = $_POST['idkeluarga'];
		$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_slik_keluarga/".$namabaru;
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_deb_keluarga SET dok_slik='$namabaru' where idkeluarga='$idkeluarga' ";
				$sql = mysqli_query($conn,$query);
				// $sukses1 = "SUKSES";
				echo "SUKSES";


			}else{
				// $gagal1 = "GAGAL";
				echo "GAGAL";
			}
	}
}


		break;

	default:
		# code...
		break;
}


?>