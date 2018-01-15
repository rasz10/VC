<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	// include "../config/fungsi.php";
$jenisdokumen = $_POST['jenisdokumen'];
if (empty($jenisdokumen)) {
	echo "Mohon Maaf File Terlalu Besar, Silahkan Close (x) dan Upload Kembali";
}
// echo $jenisdokumen;

switch ($jenisdokumen) {
	case 'PEMBIAYAAN':

// echo "test"."<br>";
// if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['dok_pembiayaan']['tmp_name'])) {
		$sourcePath = $_FILES['dok_pembiayaan']['tmp_name'];
		$namafile = $_FILES['dok_pembiayaan']['name'];
		$nama_debt = $_POST['namadebitur'];
		$iddebitur = $_POST['iddebitur'];
		$username = $_POST['username'];
		$tahap = $_POST['tahap'];
		$typeuser = $_POST['typeuser'];
		$cdate = $todaytime;
		$usermonitoring = $username."|".$cdate;
		if ($typeuser == "sko") {
			$uploadpembiayaan = "uploadpembiayaan_sko";
			$useruploadpembiayaan = "user_uploadpembiayaan_sko";
		}else{
			$uploadpembiayaan = "upload_sap";
			$useruploadpembiayaan = "user_upload_sap";
		}
		$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
		$targetPath = "../../upload/dok_pembiayaan/".$namabaru;
		if (file_exists($targetPath)) {
		    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
		    // $uploadOk = 0;
		}else{
			if(move_uploaded_file($sourcePath,$targetPath)) {
				$query = "UPDATE acc_master_debitur SET dok_pembiayaan='$namabaru',dok_pembiayaan_user='$username',dok_pembiayaan_date='$cdate' where iddebitur='$iddebitur' ";
				$sql = mysqli_query($conn,$query);

				$monitoring = "UPDATE acc_monitoring SET ".$uploadpembiayaan."='1',".$useruploadpembiayaan."='$usermonitoring' where iddebitur='$iddebitur'";
				$sqlmonitoring = mysqli_query($conn,$monitoring);
				// $sukses1 = "SUKSES";
				// echo "SUKSES|";
				echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

			}else{
				// $gagal1 = "GAGAL";
				// echo "GAGAL|";
				echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
			}
		}
			
	}

	// if(is_uploaded_file($_FILES['form_sid_ttd']['tmp_name'])) {
	// 	$sourcePath2 = $_FILES['form_sid_ttd']['tmp_name'];
	// 	$namafile2 = $_FILES['form_sid_ttd']['name'];
	// 	$nama_debt2 = $_POST['namadebitur'];
	// 	$iddebitur = $_POST['iddebitur'];
	// 	$namabaru2 = $nama_debt2."-".$namafile2;
	// 	$targetPath2 = "../../upload/dok_sid/".$namabaru2;
	// 		if(move_uploaded_file($sourcePath2,$targetPath2)) {
	// 			$query = "UPDATE acc_master_debitur SET dok_sid_ttd='$namabaru' where iddebitur='$iddebitur' ";
	// 			$sql = mysqli_query($conn,$query);
	// 			// $sukses1 = "SUKSES";
	// 			echo "SUKSES";
	// 		}else{
	// 			// $gagal1 = "GAGAL";
	// 			echo "GAGAL";
	// 		}
	// }
// }else{
// 	echo "KOSONG";
// }


		break;


	case 'PROPOSAL':
		$namadokumen = $_POST['namadokumen'];
		switch ($namadokumen) {
			case 'SP3':
				if(is_uploaded_file($_FILES['dok_sp3']['tmp_name'])) {
					$sourcePath = $_FILES['dok_sp3']['tmp_name'];
					$namafile = $_FILES['dok_sp3']['name'];
					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];
					$cdate = $todaytime;
					$usermonitoring = $username."|".$cdate;
					if ($typeuser == "sko") {
						$uploadproposal = "uploadproposal_sko";
						$useruploadproposal = "user_uploadproposal_sko";
					}else{
						$uploadproposal = "uploadproposal_sap";
						$useruploadproposal = "user_uploadproposal_sap";
					}
					$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
					$targetPath = "../../upload/dok_proposal/dok_sp3/".$namabaru;

				// Check file size
				if ($_FILES['dok_sp3']['size'] > 20000000) {
				    echo "<script>alert('Mohon Maaf, File Anda Terlalu Besar'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
				}else{
					if (file_exists($targetPath)) {
					    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
					    // $uploadOk = 0;
					}else{
						if(move_uploaded_file($sourcePath,$targetPath)) {
							$query = "UPDATE acc_master_debitur SET dok_sp3='$namabaru',dok_sp3_user='$username',dok_sp3_date='$cdate' where iddebitur='$iddebitur' ";
							$sql = mysqli_query($conn,$query);

							$monitoring = "UPDATE acc_monitoring SET ".$uploadproposal."='1',".$useruploadproposal."='$usermonitoring' where iddebitur='$iddebitur'";
							$sqlmonitoring = mysqli_query($conn,$monitoring);
							// $sukses1 = "SUKSES";
							// echo "SUKSES|";
							echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

						}else{
							// $gagal1 = "GAGAL";
							// echo "GAGAL|";
							echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
						}
					}
				}
			}
				break;

			case 'Proposal':
				if(is_uploaded_file($_FILES['dok_proposal']['tmp_name'])) {
					$sourcePath = $_FILES['dok_proposal']['tmp_name'];
					$namafile = $_FILES['dok_proposal']['name'];
					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];
					$cdate = $todaytime;
					$usermonitoring = $username."|".$cdate;
					if ($typeuser == "sko") {
						$uploadproposal = "uploadproposal_sko";
						$useruploadproposal = "user_uploadproposal_sko";
					}else{
						$uploadproposal = "uploadproposal_sap";
						$useruploadproposal = "user_uploadproposal_sap";
					}
					$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
					$targetPath = "../../upload/dok_proposal/dok_proposal/".$namabaru;
					if (file_exists($targetPath)) {
					    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
					    // $uploadOk = 0;
					}else{
						if(move_uploaded_file($sourcePath,$targetPath)) {
							$query = "UPDATE acc_master_debitur SET dok_proposal='$namabaru',dok_proposal_user='$username',dok_proposal_date='$cdate' where iddebitur='$iddebitur' ";
							$sql = mysqli_query($conn,$query);

							// $monitoring = "UPDATE acc_monitoring SET ".$uploadproposal."='1',".$useruploadproposal."='$usermonitoring' where iddebitur='$iddebitur'";
							// $sqlmonitoring = mysqli_query($conn,$monitoring);
							// $sukses1 = "SUKSES";
							// echo "SUKSES|";
							echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

						}else{
							// $gagal1 = "GAGAL";
							// echo "GAGAL|";
							echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
						}
					}
				}
				break;

			case 'Covenant':
				if(is_uploaded_file($_FILES['dok_covenant']['tmp_name'])) {
					$sourcePath = $_FILES['dok_covenant']['tmp_name'];
					$namafile = $_FILES['dok_covenant']['name'];
					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];
					$cdate = $todaytime;
					$usermonitoring = $username."|".$cdate;
					if ($typeuser == "sko") {
						$uploadproposal = "uploadproposal_sko";
						$useruploadproposal = "user_uploadproposal_sko";
					}else{
						$uploadproposal = "uploadproposal_sap";
						$useruploadproposal = "user_uploadproposal_sap";
					}
					$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
					$targetPath = "../../upload/dok_proposal/dok_covenant/".$namabaru;
					if (file_exists($targetPath)) {
					    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
					    // $uploadOk = 0;
					}else{
						if(move_uploaded_file($sourcePath,$targetPath)) {
							$query = "UPDATE acc_master_debitur SET dok_covenant='$namabaru',dok_covenant_user='$username',dok_covenant_date='$cdate' where iddebitur='$iddebitur' ";
							$sql = mysqli_query($conn,$query);

							// $monitoring = "UPDATE acc_monitoring SET ".$uploadproposal."='1',".$useruploadproposal."='$usermonitoring' where iddebitur='$iddebitur'";
							// $sqlmonitoring = mysqli_query($conn,$monitoring);
							// $sukses1 = "SUKSES";
							// echo "SUKSES|";
							echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

						}else{
							// $gagal1 = "GAGAL";
							// echo "GAGAL|";
							echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php'; </script>";
						}
					}
				}
				break;
			
			default:
				# code...
				break;
		}
		break;

	case 'PENCAIRAN':
		$namadokumen = $_POST['namadokumen'];
		switch ($namadokumen) {
			case 'PK':
				if(is_uploaded_file($_FILES['dok_pk']['tmp_name'])) {
					$sourcePath = $_FILES['dok_pk']['tmp_name'];
					$namafile = $_FILES['dok_pk']['name'];
					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];
					$cdate = $todaytime;
					$usermonitoring = $username."|".$cdate;
					if ($typeuser == "sko") {
						$uploadpencairan = "uploadpencairan_sko";
						$useruploadpencairan = "user_uploadpencairan_sko";
					}else{
						$uploadpencairan = "uploadpencairan_sap";
						$useruploadpencairan = "user_uploadpencairan_sap";
					}
					$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
					$targetPath = "../../upload/dok_pencairan/dok_pk/".$namabaru;
					if (file_exists($targetPath)) {
					    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
					    // $uploadOk = 0;
					}else{
						if(move_uploaded_file($sourcePath,$targetPath)) {
							$query = "UPDATE acc_master_debitur SET dok_pk='$namabaru',dok_pk_user='$username',dok_pk_date='$cdate' where iddebitur='$iddebitur' ";
							$sql = mysqli_query($conn,$query);

							$monitoring = "UPDATE acc_monitoring SET ".$uploadpencairan."='1',".$useruploadpencairan."='$usermonitoring' where iddebitur='$iddebitur'";
							$sqlmonitoring = mysqli_query($conn,$monitoring);
							// $sukses1 = "SUKSES";
							// echo "SUKSES|";
							echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

						}else{
							// $gagal1 = "GAGAL";
							// echo "GAGAL|";
							echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php'; </script>";
						}
					}
				}
				break;

			case 'Covernote':
				if(is_uploaded_file($_FILES['dok_covernote']['tmp_name'])) {
					$sourcePath = $_FILES['dok_covernote']['tmp_name'];
					$namafile = $_FILES['dok_covernote']['name'];
					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];
					$cdate = $todaytime;
					$usermonitoring = $username."|".$cdate;
					if ($typeuser == "sko") {
						$uploadpencairan = "uploadpencairan_sap";
						$useruploadpencairan = "user_uploadpencairan_sap";
					}else{
						$uploadpencairan = "uploadpencairan_sap";
						$useruploadpencairan = "user_uploadpencairan_sap";
					}
					$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
					$targetPath = "../../upload/dok_pencairan/dok_covernote/".$namabaru;
					if (file_exists($targetPath)) {
					    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
					    // $uploadOk = 0;
					}else{
						if(move_uploaded_file($sourcePath,$targetPath)) {
							$query = "UPDATE acc_master_debitur SET dok_covernote='$namabaru',dok_covernote_user='$username',dok_covernote_date='$cdate' where iddebitur='$iddebitur' ";
							$sql = mysqli_query($conn,$query);

							// $monitoring = "UPDATE acc_monitoring SET ".$uploadpencairan."='1',".$useruploadpencairan."='$usermonitoring' where iddebitur='$iddebitur'";
							// $sqlmonitoring = mysqli_query($conn,$monitoring);
							// $sukses1 = "SUKSES";
							// echo "SUKSES|";
							echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

						}else{
							// $gagal1 = "GAGAL";
							// echo "GAGAL|";
							echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php'; </script>";
						}
					}
				}
				break;

			case 'MPD':
				if(is_uploaded_file($_FILES['dok_mpd']['tmp_name'])) {
					$sourcePath = $_FILES['dok_mpd']['tmp_name'];
					$namafile = $_FILES['dok_mpd']['name'];
					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];
					$cdate = $todaytime;
					$usermonitoring = $username."|".$cdate;
					if ($typeuser == "sko") {
						$uploadpencairan = "uploadpencairan_sap";
						$useruploadpencairan = "user_uploadpencairan_sap";
					}else{
						$uploadpencairan = "uploadpencairan_sap";
						$useruploadpencairan = "user_uploadpencairan_sap";
					}
					$namabaru = $iddebitur."-".$nama_debt."-".$namafile;
					$targetPath = "../../upload/dok_pencairan/dok_mpd/".$namabaru;
					if (file_exists($targetPath)) {
					    echo "<script>alert('Mohon Maaf Nama File Sudah Ada'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";
					    // $uploadOk = 0;
					}else{
						if(move_uploaded_file($sourcePath,$targetPath)) {
							$query = "UPDATE acc_master_debitur SET dok_mpd='$namabaru',dok_mpd_user='$username',dok_mpd_date='$cdate' where iddebitur='$iddebitur' ";
							$sql = mysqli_query($conn,$query);

							// $monitoring = "UPDATE acc_monitoring SET ".$uploadpencairan."='1',".$useruploadpencairan."='$usermonitoring' where iddebitur='$iddebitur'";
							// $sqlmonitoring = mysqli_query($conn,$monitoring);
							// $sukses1 = "SUKSES";
							// echo "SUKSES|";
							echo "<script>alert('Berhasil Upload'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

						}else{
							// $gagal1 = "GAGAL";
							// echo "GAGAL|";
							echo "<script>alert('Mohon Maaf Upload Gagal '); location='uploaddokumen.php'; </script>";
						}
					}
				}
				break;

				case 'datarekening':

					$nama_debt = $_POST['namadebitur'];
					$iddebitur = $_POST['iddebitur'];
					$username = $_POST['username'];
					$tahap = $_POST['tahap'];
					$typeuser = $_POST['typeuser'];

					$nama_bank = $_POST['nama_bank'];
					$atasnama_bank = $_POST['atasnama_bank'];
					$no_rekening = $_POST['no_rekening'];

					$cdate = $todaytime;

					$query = "UPDATE acc_master_debitur SET 
					nama_bank='$nama_bank',
					atasnama_bank='$atasnama_bank',
					no_rekening='$no_rekening',
					cuser_rekening='$username',
					cdate_rekening='$cdate'

					 where iddebitur='$iddebitur' ";
					$sql = mysqli_query($conn,$query);

					if ($sql) {

						echo "<script>alert('Berhasil Update'); location='uploaddokumen.php?par=$iddebitur&par2=$nama_debt&par3=$username&tahap=$tahap'; </script>";

					}else{
						// $gagal1 = "GAGAL";
						// echo "GAGAL|";
						echo "<script>alert('Mohon Maaf Update Gagal '); location='uploaddokumen.php'; </script>";
					}
				break;
			
			default:
				# code...
				break;
		}


		break;
	
	default:
		# code...
		break;
}


?>