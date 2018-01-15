<?php
	include "../config/fungsi.php";

	$no_wa_ = $_POST['no_wa'];
	$no_wa = substr($no_wa_,1);
	$getcountchat = getcountchat($conn);
	if ($getcountchat == 0) {
		$nochat = 1;
	}else{
		$getmaxchat = getmaxchat($conn);
		// $hasil = substr($getmax, 7);
		// echo $hasil;
		$nochat = $getmaxchat + 1;
		// echo "<br/>".$nodebt;
	}
		//cari kode debitur
        $idchat = "C".$nochat;
        $getmaxidchat = "C".$getmaxchat;

    $text = "INSERT INTO acc_chat (no,idchat,iddebitur,chat,no_wa,receive_user,receive_date,send_user,send_date,cuser,cdate) VALUES ('".$nochat."','".$idchat."','".$_POST['iddebitur']."','".$_POST['chat']."','".$_POST['no_wa']."','".$_POST['to']."','".$todaytime."','".$_POST['userlogin']."','".$todaytime."','".$_POST['username']."','".$todaytime."')";

    $sql = mysqli_query($conn,$text);

    $text2 = "UPDATE acc_chat SET replyf='1' where idchat = '$getmaxidchat'";
    $updatereplyf = mysqli_query($conn,$text2);
    
     // echo $text."<br>".$text2;

    // if ($sql) {
    // 	$url = "https://api.whatsapp.com/send?phone=628118962121&text=[Kode%20Order%20:%20".$kodeorder."]%20Mohon%20Follow Up%20Keluhan%20Kantor%20Mekaar%20".$nama_kantor."%20Segera!!!";
    // }else{

    // }

    if ($sql)
        {
                echo "<script>alert('Terima Kasih Menggunakan Chat Whatsapp, Pesan Anda terkirim di Whatsapp Tujuan Anda..'); location='https://api.whatsapp.com/send?phone=62".$no_wa."&text=tes'; </script>";
                }
        else
        {
                 echo "<script>alert('Mohon Maaf Chat Whatsapp Gagal !! Silahkan Chat Lagi.. '); location='whatsapp'; </script>";
        } 
?>