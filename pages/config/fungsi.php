<?php
	include "koneksi.php";

	function getkodekantor($conn,$userregister){
		$sql = "SELECT idkantor from user where username='$userregister'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['idkantor'];
	}


	function cekchat($conn,$iddebitur,$username){
		$sql = "SELECT idchat from acc_chat where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['idchat'])) {
			return "1";
		}else{
			return "0";
		}
		// return $data['verifikasi_slik'];
	}
	
	function getjumlahkeluarga($conn,$iddebitur){
		$query=mysqli_query($conn,"SELECT idkeluarga from acc_deb_keluarga where iddebitur='$iddebitur'");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getjumlahpasanganpenjamin($conn,$iddebitur){
		$query=mysqli_query($conn,"SELECT idpasanganpenjamin from acc_deb_pasangan_penjamin where iddebitur='$iddebitur'");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getjumlahpasangan($conn,$iddebitur){
		$query=mysqli_query($conn,"SELECT idpasangan from acc_deb_pasangan where iddebitur='$iddebitur'");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getjumlahpenjamin ($conn,$iddebitur){
		$query=mysqli_query($conn,"SELECT idpenjamin from acc_deb_penjamin where iddebitur='$iddebitur'");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getnamadebitur($conn,$iddebitur){
		$sql = "SELECT nama from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['nama'];
	}

	function getdokumen($conn,$iddebitur){
		$sql = "SELECT upload_by_slik from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['upload_by_slik'];
	}

	function getdokumenpembiayaan($conn,$iddebitur){
		$sql = "SELECT dok_pembiayaan from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['dok_pembiayaan'];
	}

	function getdokumenproposal($conn,$iddebitur,$tipedok){
		switch ($tipedok) {
			case 'sp3':
				$sql = "SELECT dok_sp3 from acc_master_debitur where iddebitur='$iddebitur'";
				$cek=mysqli_query($conn,$sql);
				$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

				return $data['dok_sp3'];

				break;

			case 'proposal':
				$sql = "SELECT dok_proposal from acc_master_debitur where iddebitur='$iddebitur'";
				$cek=mysqli_query($conn,$sql);
				$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

				return $data['dok_proposal'];
				
				break;

			case 'covenant':
				$sql = "SELECT dok_covenant from acc_master_debitur where iddebitur='$iddebitur'";
				$cek=mysqli_query($conn,$sql);
				$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

				return $data['dok_covenant'];
				
				break;
			
			default:
				# code...
				break;
		}
	}

	function getdokumenpencairan($conn,$iddebitur,$tipedok){

		switch ($tipedok) {
			case 'pk':
				$sql = "SELECT dok_pk from acc_master_debitur where iddebitur='$iddebitur'";
				$cek=mysqli_query($conn,$sql);
				$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

				return $data['dok_pk'];

				break;

			case 'covernote':
				$sql = "SELECT dok_covernote from acc_master_debitur where iddebitur='$iddebitur'";
				$cek=mysqli_query($conn,$sql);
				$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

				return $data['dok_covernote'];
				
				break;

			case 'mpd':
				$sql = "SELECT dok_m from acc_master_debitur where iddebitur='$iddebitur'";
				$cek=mysqli_query($conn,$sql);
				$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

				return $data['dok_m'];
				
				break;
			
			default:
				# code...
				break;
		}
	}

	function getdatauploadbyslik($conn,$iddebitur){
		$sql = "SELECT upload_by_slik from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['upload_by_slik'])) {
			return "1"."|".$data['upload_by_slik'];
		}else{
			return "0"."|".$data['upload_by_slik'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbypembiayaan($conn,$iddebitur){
		$sql = "SELECT dok_pembiayaan from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_pembiayaan'])) {
			return "1"."|".$data['dok_pembiayaan'];
		}else{
			return "0"."|".$data['dok_pembiayaan'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbysp3($conn,$iddebitur){
		$sql = "SELECT dok_sp3 from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_sp3'])) {
			return "1"."|".$data['dok_sp3'];
		}else{
			return "0"."|".$data['dok_sp3'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbyproposal($conn,$iddebitur){
		$sql = "SELECT dok_proposal from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_proposal'])) {
			return "1"."|".$data['dok_proposal'];
		}else{
			return "0"."|".$data['dok_proposal'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbycovenant($conn,$iddebitur){
		$sql = "SELECT dok_covenant from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_covenant'])) {
			return "1"."|".$data['dok_covenant'];
		}else{
			return "0"."|".$data['dok_covenant'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbypk($conn,$iddebitur){
		$sql = "SELECT dok_pk from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_pk'])) {
			return "1"."|".$data['dok_pk'];
		}else{
			return "0"."|".$data['dok_pk'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbycovernote($conn,$iddebitur){
		$sql = "SELECT dok_covernote from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_covernote'])) {
			return "1"."|".$data['dok_covernote'];
		}else{
			return "0"."|".$data['dok_covernote'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatauploadbympd($conn,$iddebitur){
		$sql = "SELECT dok_mpd from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['dok_mpd'])) {
			return "1"."|".$data['dok_mpd'];
		}else{
			return "0"."|".$data['dok_mpd'];
		}
		// return $data['verifikasi_slik'];
	}

	function getdatarekening($conn,$iddebitur){
		$sql = "SELECT nama_bank,atasnama_bank,no_rekening from acc_master_debitur where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		if (!empty($data['nama_bank'])) {
			return "1"."|".$data['nama_bank']."|".$data['atasnama_bank']."|".$data['no_rekening'];
		}else{
			return "0"."|".$data['nama_bank']."|".$data['atasnama_bank']."|".$data['no_rekening'];
		}
		// return $data['verifikasi_slik'];
	}


	function getflagslik($conn,$iddebitur){
		$sql = "SELECT verifikasi_slik from acc_monitoring where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['verifikasi_slik'];
	}

	function getflagproposal($conn,$iddebitur){
		$sql = "SELECT verifikasi_kadiv_bisnis from acc_monitoring where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['verifikasi_kadiv_bisnis'];
	}

	function getflagpencairan($conn,$iddebitur){
		$sql = "SELECT verifikasiproposal_adk from acc_monitoring where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['verifikasiproposal_adk'];
	}

	function getmonitor($conn,$value,$iddebitur){
		$getvalue = explode("|", $value);
		$sql = "SELECT ".$getvalue[0]." as value,".$getvalue[1]." as valueuser from acc_monitoring where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['value']."|".$data['valueuser'];
	}

	function getdatapasangan($conn,$iddebitur){
		$sql = "SELECT * from acc_deb_pasangan where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['dok_slik']."|".$data['dok_slik_ttd'];
	}

	function getdatapenjamin($conn,$iddebitur){
		$sql = "SELECT * from acc_deb_penjamin where iddebitur='$iddebitur'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['dok_slik']."|".$data['dok_slik_ttd'];
	}

	function getmaxkeluarga($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_deb_keluarga");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountkeluarga($conn){
		$query=mysqli_query($conn,"SELECT idkeluarga from acc_deb_keluarga");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}
	
	function getmaxpasanganpenjamin($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_deb_pasangan_penjamin");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountpasanganpenjamin($conn){
		$query=mysqli_query($conn,"SELECT idpasanganpenjamin from acc_deb_pasangan_penjamin");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getmaxpasangan($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_deb_pasangan");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountpasangan($conn){
		$query=mysqli_query($conn,"SELECT idpasangan from acc_deb_pasangan");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getmaxpenjamin($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_deb_penjamin");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountpenjamin($conn){
		$query=mysqli_query($conn,"SELECT idpenjamin from acc_deb_penjamin");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getmax($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_master_debitur");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountdebt($conn){
		$query=mysqli_query($conn,"SELECT iddebitur from acc_master_debitur");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getmaxchat($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_chat");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountchat($conn){
		$query=mysqli_query($conn,"SELECT idchat from acc_chat");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getmaxsurat($conn){
		$query=mysqli_query($conn,"SELECT max(no) as jumlah from acc_barangmasuk");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['jumlah'];
	}

	function getcountsurat($conn){
		$query=mysqli_query($conn,"SELECT idsurat from acc_barangmasuk");
		$getrow=mysqli_num_rows($query);
		return $getrow;
	}

	function getnama($conn,$username){
		$query=mysqli_query($conn,"SELECT fullname from user where username='$username'");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['fullname'];
	}

	function getwilayah($conn,$username){
		$query=mysqli_query($conn,"SELECT posisi from user where username='$username'");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['posisi'];
	}

	function gettypeuser($conn,$username){
		$query=mysqli_query($conn,"SELECT type from user where username='$username'");
		$get=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $get['type'];
	}

	function getdatamenu($conn,$menu){
		$sql = "SELECT * from menu where menu='$menu'";
		$cek=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($cek,MYSQLI_ASSOC);

		return $data['url']."|".$data['icon'];
	}

	//-- FUNGSI TANGGAL INDO --//	

	date_default_timezone_set("Asia/Jakarta");
	$tglawal    = date("2014-10-01");
	$tglakhir   = date("2014-10-31");
	$tglawal1   = date("2014-09-01");
	$tglakhir1  = date("2014-09-30");
	$hrini		= date("d/m/Y");
	$today		= date("Y-m-d");
	$today1		= date("Ymd");
	$periodenow = date("Y-m");
	$tahuna     = date("Y");
	$bulana     = date("m")-1;
	$bulanb	    = date("m");
	$tanggal    = date("d");
	$minggu    = date("w");
	$todaytime  = date("Y-m-d H:i:s");
	$sekarang   = date("H:i:s");
	if(date("m")=="01"){$tahuna =date("Y")-1;$bulana="12";}
	// $tglawal1 = date("Y-m-d", mktime(0, 0, 0, $bulana, "01",$tahuna));
	// $tglakhir1 = date("Y-m-22", strtotime("last month"));

	$jam_sekarang = date('H:i:s'); 
	

	function harinegosiasi($tgl){
		//$tgl_sekarang = date('Y-m-d'); 
		// $hari = date('l', strtotime($tgl_sekarang));
		// return $hari;
		$day = date('D', strtotime($tgl));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		$hari=$dayList[$day];
		return $hari;
	}

	function hari(){
		$tgl_sekarang = date('Y-m-d'); 
		// $hari = date('l', strtotime($tgl_sekarang));
		// return $hari;
		$day = date('D', strtotime($tgl_sekarang));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		$hari=$dayList[$day];
		return $hari;
	}
	
	function tgl_indo(){
			$tgl = date("Y-m-d");
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}

	function bln_indo_(){
			$tgl = date("Y-m-d");
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return ' '.$bulan.' '.$tahun;		 
	}

	function bulanromawi(){
			$tgl = date("Y-m-d");
			$tanggal = substr($tgl,8,2);
			$bulan = getBulanRomawi(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $bulan;		 
	}
	// function bln_indo(){
	// 		$tgl = date("Y-m-d");
	// 		//$tanggal = substr($tgl,8,2);
	// 		$bulan = getBulan(substr($tgl,5,2));
	// 		$tahun = substr($tgl,0,4);
	// 		return $tanggal.' '.$bulan.' '.$tahun;		 
	// }
	function tgl_indo2(){
			$tgl = date("d-m-Y");
			// $tanggal = substr($tgl,8,2);
			// $bulan = getBulan(substr($tgl,5,2));
			// $tahun = substr($tgl,0,4);
			return $tgl;		 
	}
	function tgl_indo_($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}
	function tgl_indo1($tgl){
			$tanggal = substr($tgl,3,2);
			$bulan = getBulan(substr($tgl,0,2));
			$tahun = substr($tgl,6,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}
	function tgldfy($tgl){
			$tanggal = substr($tgl,5,2);
			$bulan = getBulan(substr($tgl,8,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}
    function tglformat($tgl){
		$tanggal = substr($tgl,0,2);
		$bulan = substr($tgl,3,2);
		$tahun = substr($tgl,6,4);
		return $tahun."-".$bulan."-".$tanggal;		
	}
	function dateformat($tgl){
		$tanggal = substr($tgl,3,2);
		$bulan = substr($tgl,0,2);
		$tahun = substr($tgl,6,4);
		return $bulan."/".$tanggal."/".$tahun;		
	}
	function timeformat($tgl){
		$tanggal = substr($tgl,0,2);
		$bulan = substr($tgl,3,2);
		$tahun = substr($tgl,6,4);
		return $tahun."-".$bulan."-".$tanggal." 00:00:00";		
	}
	function tgldue($tgl){
			$tanggal = substr($tgl,3,2);
			$bulan = getBulan(substr($tgl,0,2));
			$bln   = substr($bulan,0,3);
			$tahun = substr($tgl,6,4);
			return $bln.' '.$tanggal.', '.$tahun;		 
	}	
	function tgl_eng($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $bulan.' '.$tanggal.', '.$tahun;		 
	}	
	function bln_indo($tgl){
			$bulan = getBulan(substr($tgl,6,2));
			$tahun = substr($tgl,0,4);
			return $bulan.' '.$tahun;		 
	}	
	function hijriah(){
	$theDate = getdate();
	$wday = $theDate[wday];
	$hr = $theDate[mday];
	$theMonth = $theDate[mon];
	$theYear = $theDate[year];
	if (($theYear > 1582) || (($theYear == 1582) && ($theMonth > 10)) || (($theYear == 1582) && ($theMonth == 10) && ($hr > 14))) {
	$zjd = (int)((1461 * ($theYear + 4800 + (int)(($theMonth - 14) / 12))) / 4) + (int)((367 * ($theMonth - 2 - 12 * ((int)(($theMonth - 14) / 12)))) / 12) - (int)((3 * (int)((($theYear + 4900 + (int)(($theMonth - 14) / 12)) / 100))) / 4) + $hr - 32075;
	} else {
	$zjd = 367 * $theYear - (int)((7 * ($theYear + 5001 + (int)(($theMonth - 9) / 7))) / 4) + (int)((275 * $theMonth) / 9) + $hr + 1729777;
	}

	$zl            = $zjd - 1948440 + 10632;
	$zn            = (int)(($zl-1)/10631);
	$zl            = $zl - 10631 * $zn + 354;
	$zj            = ((int)((10985 - $zl)/5316))*((int)((50 * $zl)/17719))+((int)($zl/5670))*((int)((43 * $zl)/15238));
	$zl            = $zl-((int)((30 - $zj)/15))*((int)((17719 * $zj)/50))-((int)($zj/16))*((int)((15238 * $zj)/43))+29;
	$theMonth    = (int)((24 * $zl)/709);
	$hijriDay    = $zl-(int)((709 * $theMonth)/24);
	$hijriYear    = 30 * $zn + $zj - 30;

	if ($theMonth==1){ $hijriMonthName = "Muharram";}
	if ($theMonth==2){ $hijriMonthName = "Safar";}
	if ($theMonth==3){ $hijriMonthName = "Rabiul Awal";}
	if ($theMonth==4){ $hijriMonthName = "Rabiul Akhir";}
	if ($theMonth==5){ $hijriMonthName = "Jamadil Awal";}
	if ($theMonth==6){ $hijriMonthName = "Jamadil Akhir";}
	if ($theMonth==7){ $hijriMonthName = "Rejab";}
	if ($theMonth==8){ $hijriMonthName = "Syaaban";}
	if ($theMonth==9){ $hijriMonthName = "Ramadhan";}
	if ($theMonth==10){ $hijriMonthName = "Syawal";}
	if ($theMonth==11){ $hijriMonthName = "Zulkaedah";}
	if ($theMonth==12){ $hijriMonthName = "Zulhijjah";}

	if ($wday==0) { $hijriDayString = "Al-Ahad"; }
	if ($wday==1) { $hijriDayString = "Al-Itsnain"; }
	if ($wday==2) { $hijriDayString = "Ats-tsulatsa'"; }
	if ($wday==3) { $hijriDayString = "Al-Arbi'aa"; }
	if ($wday==4) { $hijriDayString = "Al-Khomis"; }
	if ($wday==5) { $hijriDayString = "Al-Jumuah"; }
	if ($wday==6) { $hijriDayString = "As-Sabt"; }

	// return $hijriDayString .' ' . $hijriDay . ' ' . $hijriMonthName . ' ' . $hijriYear;
	return $hijriDay . ' ' . $hijriMonthName . ' ' . $hijriYear;
	}
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 

	function getBulanRomawi($bln){
				switch ($bln){
					case 1: 
						return "I";
						break;
					case 2:
						return "II";
						break;
					case 3:
						return "III";
						break;
					case 4:
						return "IV";
						break;
					case 5:
						return "V";
						break;
					case 6:
						return "VI";
						break;
					case 7:
						return "VII";
						break;
					case 8:
						return "VIII";
						break;
					case 9:
						return "IX";
						break;
					case 10:
						return "X";
						break;
					case 11:
						return "XI";
						break;
					case 12:
						return "XII";
						break;
				}
			} 
	function getplhbln($b){
	?>
		<option value="01" <?php if ($b=="01") echo 'selected="selected"';?>>Jan</option>
		<option value="02" <?php if ($b=="02") echo 'selected="selected"';?>>Feb</option>
		<option value="03" <?php if ($b=="03") echo 'selected="selected"';?>>Mar</option>
		<option value="04" <?php if ($b=="04") echo 'selected="selected"';?>>Apr</option>
		<option value="05" <?php if ($b=="05") echo 'selected="selected"';?>>Mei</option>
		<option value="06" <?php if ($b=="06") echo 'selected="selected"';?>>Jun</option>
		<option value="07" <?php if ($b=="07") echo 'selected="selected"';?>>Jul</option>
		<option value="08" <?php if ($b=="08") echo 'selected="selected"';?>>Aug</option>
		<option value="09" <?php if ($b=="09") echo 'selected="selected"';?>>Sep</option>
		<option value="10" <?php if ($b=="10") echo 'selected="selected"';?>>Okt</option>
		<option value="11" <?php if ($b=="11") echo 'selected="selected"';?>>Nov</option>
		<option value="12" <?php if ($b=="12") echo 'selected="selected"';?>>Des</option>
	<?php
	}
	function hariindo($hari)
	{
	switch ($hari){
		case 0 : $hari="Minggu";
			Break;
		case 1 : $hari="Senin";
			Break;
		case 2 : $hari="Selasa";
			Break;
		case 3 : $hari="Rabu";
			Break;
		case 4 : $hari="Kamis";
			Break;
		case 5 : $hari="Jum'at";
			Break;
		case 6 : $hari="Sabtu";
			Break;
	}
	return $hari;
	}

function kekata($x) {
    $x = abs($x);
    $angka = array("", "satu", "dua", "tiga", "empat", "lima",
    "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($x <12) {
        $temp = " ". $angka[$x];
    } else if ($x <20) {
        $temp = kekata($x - 10). " belas";
    } else if ($x <100) {
        $temp = kekata($x/10)." puluh". kekata($x % 10);
    } else if ($x <200) {
        $temp = " seratus" . kekata($x - 100);
    } else if ($x <1000) {
        $temp = kekata($x/100) . " ratus" . kekata($x % 100);
    } else if ($x <2000) {
        $temp = " seribu" . kekata($x - 1000);
    } else if ($x <1000000) {
        $temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
    } else if ($x <1000000000) {
        $temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
    } else if ($x <1000000000000) {
        $temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
    } else if ($x <1000000000000000) {
        $temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
    }     
        return $temp;
}
 
 
function terbilang($x, $style=4) {
    if($x<0) {
        $hasil = "minus ". trim(kekata($x));
    } else {
        $hasil = trim(kekata($x));
    }     
    switch ($style) {
        case 1:
            $hasil = strtoupper($hasil);
            break;
        case 2:
            $hasil = strtolower($hasil);
            break;
        case 3:
            $hasil = ucwords($hasil);
            break;
        default:
            $hasil = ucfirst($hasil);
            break;
    }     
    return $hasil;
}

function format_rupiah($angka)
{
	$format_rupiah = number_format($angka,0,',','.');
	return $format_rupiah;
}
?>