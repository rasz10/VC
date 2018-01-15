<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$iddebitur = $_GET['par'];
	$namadebitur = $_GET['par2'];
	$jenisdokumen = $_GET['par3'];
	$username = $_GET['par4'];

	switch ($jenisdokumen) {
		case 'PEMBIAYAAN':
			$getdokumen = getdokumenpembiayaan($conn,$iddebitur);

			unlink("../../upload/dok_pembiayaan/".$getdokumen);
					$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_pembiayaan = '' where iddebitur='$iddebitur'");

					if ($update)
				    {
				            //echo "Data Anda Berhasil Upload";
				    		
				            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=1");
				            echo "<script>alert('Berhasil Upload');</script>";
				    }
				    else
				    {
				            // echo "gagal";
				    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
				    }  
			break;

		case 'PROPOSAL':
			$tipedok = $_GET['par5'];
			switch ($tipedok) {
				case 'sp3':
					$getdokumen = getdokumenproposal($conn,$iddebitur,"sp3");

					unlink("../../upload/dok_proposal/dok_sp3/".$getdokumen);
							$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_sp3 = '' where iddebitur='$iddebitur'");

							if ($update)
						    {
						            //echo "Data Anda Berhasil Upload";
						    		
						            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=2");
						            echo "<script>alert('Berhasil Upload');</script>";
						    }
						    else
						    {
						            // echo "gagal";
						    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
						    }  
					break;

				case 'proposal':
					$getdokumen = getdokumenproposal($conn,$iddebitur,"proposal");

					unlink("../../upload/dok_proposal/dok_proposal/".$getdokumen);
							$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_proposal = '' where iddebitur='$iddebitur'");

							if ($update)
						    {
						            //echo "Data Anda Berhasil Upload";
						    		
						            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=2");
						            echo "<script>alert('Berhasil Upload');</script>";
						    }
						    else
						    {
						            // echo "gagal";
						    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
						    }  
					break;

				case 'covenant':
					$getdokumen = getdokumenproposal($conn,$iddebitur,"covenant");

					unlink("../../upload/dok_proposal/dok_covenant/".$getdokumen);
							$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_covenant = '' where iddebitur='$iddebitur'");

							if ($update)
						    {
						            //echo "Data Anda Berhasil Upload";
						    		
						            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=2");
						            echo "<script>alert('Berhasil Upload');</script>";
						    }
						    else
						    {
						            // echo "gagal";
						    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
						    }  
					break;
				
				default:
					# code...
					break;
			}
			
			break;

		case 'PENCAIRAN':
			$tipedok = $_GET['par5'];
			switch ($tipedok) {
				case 'pk':
					$getdokumen = getdokumenpencairan($conn,$iddebitur,"pk");

					unlink("../../upload/dok_pencairan/dok_pk/".$getdokumen);
							$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_pk = '' where iddebitur='$iddebitur'");

							if ($update)
						    {
						            //echo "Data Anda Berhasil Upload";
						    		
						            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=3");
						            echo "<script>alert('Berhasil Upload');</script>";
						    }
						    else
						    {
						            // echo "gagal";
						    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
						    }  
					break;

				case 'covernote':
					$getdokumen = getdokumenpencairan($conn,$iddebitur,"covernote");

					unlink("../../upload/dok_pencairan/dok_covernote/".$getdokumen);
							$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_covernote = '' where iddebitur='$iddebitur'");

							if ($update)
						    {
						            //echo "Data Anda Berhasil Upload";
						    		
						            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=3");
						            echo "<script>alert('Berhasil Upload');</script>";
						    }
						    else
						    {
						            // echo "gagal";
						    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
						    }  
					break;

				case 'mpd':
					$getdokumen = getdokumenpencairan($conn,$iddebitur,"mpd");

					unlink("../../upload/dok_pencairan/dok_mpd/".$getdokumen);
							$update = mysqli_query($conn,"UPDATE acc_master_debitur SET dok_mpd = '' where iddebitur='$iddebitur'");

							if ($update)
						    {
						            //echo "Data Anda Berhasil Upload";
						    		
						            header("Location: uploaddokumen.php?par=$iddebitur&par2=$namadebitur&par3=$username&tahap=3");
						            echo "<script>alert('Berhasil Upload');</script>";
						    }
						    else
						    {
						            // echo "gagal";
						    		echo "<script>alert('Failed !! '); history.go(-2) </script>";
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