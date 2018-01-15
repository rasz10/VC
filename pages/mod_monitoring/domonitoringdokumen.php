<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$no_ktp = $_POST['no_ktp'];
	$nama_ktp = $_POST['nama_ktp'];
	$username = $_POST['username'];

	$typeuser = gettypeuser($conn,$username);
	
if (empty($no_ktp) && empty($nama_ktp)) {
    echo "<font color='red'><b>Mohon Maaf Anda Belum Memilih</b></font>";
    $where="";
}else{
	if (!empty($no_ktp) && !empty($nama_ktp)){
        $where = "where no_ktp = '$no_ktp' AND nama like '%$nama_ktp%'";
    }elseif (!empty($no_ktp) && empty($nama_ktp)){
        $where = "where no_ktp = '$no_ktp'";
    }elseif (empty($no_ktp) && !empty($nama_ktp)) {
        $where = "where nama like '%$nama_ktp%'";
    }


?>

<?php
        $query= "SELECT * FROM acc_master_debitur $where";

        //echo $ax;
        $sql = mysqli_query($conn,$query);
        while ($data = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {

        	$iddebitur = $data['iddebitur'];
            $pengelola_akun = $data['pengelola_akun'];
        	// echo $iddebitur;
        	$getdatapasangan = getdatapasangan($conn,$iddebitur);
        	$dok_pasangan = explode("|", $getdatapasangan);

        	$getdatapenjamin = getdatapenjamin($conn,$iddebitur);
        	$dok_penjamin = explode("|", $getdatapenjamin);
        ?>
        <table class="table table-bordered" style="font-size: 11px;">
        	<tr>
        		<td align="center" colspan="9" bgcolor="#c7c7c7"><h4><b>TABEL IDENTITAS</b></h4></td>
        	</tr>
        	<tr>
        		<td align="center"><b>ID Debitur</td>
        		<td align="center"><b>Nama<br>Tempat,Tanggal Lahir</td>
        		<td align="center"><b>Pengelola Akun</td>
                <td align="center"><b>Badan Usaha</td>
        		<td align="center"><b>No. KTP</td>
        		<td align="center"><b>Alamat</td>
        		<td align="center"><b>No. NPWP</td>
                <td align="center"><b>User Registrasi</td>
                <td align="center"><b>Data Rekening</td>
        	</tr>
        	<tr align="center">
        		<td>
        			<?php echo $data['iddebitur'];?><br>
        		</td>
        		<td>
        			<?php echo $data['nama'];?><br>
        			<?php echo $data['tempat_lahir'];?>, <?php echo $data['tanggal_lahir'];?><br>
        			<?php echo $data['iddebitur'];?><br>
        			<input type="hidden" name="iddebitur[]" value="<?php echo $data['iddebitur'];?>">
        		</td>
        		<td>
                    <?php echo $data['pengelola_akun'];?><br>
                </td>
                <td>
        			<?php echo $data['badan_usaha'];?><br>
        		</td>
        		<td>
        			<?php echo $data['no_ktp'];?><br>
        		</td>
        		<td>
        			<?php echo $data['alamat'];?><br>
        		</td>
        		<td>
        			<?php echo $data['no_npwp'];?><br>
        		</td>
                <td>
                    <?php echo $data['cuser'];?><br>
                    <?php echo $data['cdate'];?><br>
                </td>
                <td>
                    <?php echo $data['nama_bank'];?><br>
                    <?php echo $data['atasnama_bank'];?><br>
                    <?php echo $data['no_rekening'];?><br>
                </td>
        	</tr>
        </table>
        <table class="table table-bordered" style="font-size: 11px;">
        	<tr>
        		<td align="center" colspan="6" bgcolor="#c7c7c7"><h4><b>TABEL SLIK</b></h4></td>
        	</tr>
        	<tr>
        		<td align="center"><b>Status SLIK<br>Dokumen SLIK</td>
        		<td align="center"><b>Dokumen SLIK Calon Debitur</td>
        		<td align="center"><b>Dokumen SLIK Pasangan</td>
        		<td align="center"><b>Dokumen SLIK Penjamin</td>
                <td align="center"><b>Dokumen SLIK Pasangan Penjamin</td>
                <td align="center"><b>Dokumen SLIK Keluarga</td>
        	</tr>
        	<tr align="center">
        		<?php
                    if ($data['statusslikf'] == NULL) {
                        $statusslikf = "";
                    }else{
                        switch ($data['statusslikf']) {
                            case '1':
                                $statusslikf = "<font color='green'><b>Approve</b></font>";
                                break;

                            case '0':
                                $statusslikf = "<font color='red'><b>Reject</b></font>";
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    }
                ?>
        		<td>
        			<?php echo $statusslikf;?><br><br>
                    <a href="../upload/dok_pic_slik/<?php echo $data['upload_by_slik'];?>" target="_blank"><?php echo $data['upload_by_slik'];?></a>
                    <br>
                    <b>"<?php echo $data['catatanslik'];?>"</b><br>
                    <font color="blue"><?php echo $data['slik_user'];?></font>&nbsp;<?php echo $data['slik_date'];?>
        		</td>
        		<td>
        			<a href="../upload/dok_slik/<?php echo $data['dok_slik']?>" target="_blank"><?php echo $data['dok_slik']?></a><br>
        			<a href="../upload/dok_slik/<?php echo $data['dok_slik_ttd']?>" target="_blank"><?php echo $data['dok_slik_ttd']?></a>
        		</td>
        		<td>
                    <?php
                        $sqlpasangan = mysqli_query($conn,"SELECT dok_slik from acc_deb_pasangan where iddebitur='$iddebitur'");
                        while ($datapasangan = mysqli_fetch_array($sqlpasangan,MYSQLI_ASSOC)) {
                    ?>
                        <a href="../upload/dok_slik_pasangan/<?php echo $datapasangan['dok_slik'];?>" target="_blank"><?php echo $datapasangan['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
        		</td>
        		<td>
                    <?php
                        $sqlpenjamin = mysqli_query($conn,"SELECT dok_slik from acc_deb_penjamin where iddebitur='$iddebitur'");
                        while ($datapenjamin = mysqli_fetch_array($sqlpenjamin,MYSQLI_ASSOC)) {
                    ?>
                        <a href="../upload/dok_slik_penjamin/<?php echo $datapenjamin['dok_slik'];?>" target="_blank"><?php echo $datapenjamin['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
        		</td>

                <td>
                    <?php
                        $sqlpasanganpenjamin = mysqli_query($conn,"SELECT dok_slik from acc_deb_pasangan_penjamin where iddebitur='$iddebitur'");
                        while ($datapasanganpenjamin = mysqli_fetch_array($sqlpasanganpenjamin,MYSQLI_ASSOC)) {
                    ?>
                        <a href="../upload/dok_slik_pasanganpenjamin/<?php echo $datapasanganpenjamin['dok_slik'];?>" target="_blank"><?php echo $datapasanganpenjamin['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $sqlkeluarga = mysqli_query($conn,"SELECT dok_slik from acc_deb_keluarga where iddebitur='$iddebitur'");
                        while ($datakeluarga = mysqli_fetch_array($sqlkeluarga,MYSQLI_ASSOC)) {
                    ?>
                        <a href="../upload/dok_slik_keluarga/<?php echo $datakeluarga['dok_slik'];?>" target="_blank"><?php echo $datakeluarga['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
                </td>
        	</tr>
        </table>
        <table class="table table-bordered" style="font-size: 11px;">
            <?php
                if ($pengelola_akun == "Kaper") { $colspan = "9"; }else{ $colspan = "8"; }
            ?>
        	<tr>
        		<td align="center" colspan="<?php echo $colspan;?>" bgcolor="#c7c7c7"><h4><b>MONITORING PROSES DOKUMEN</b></h4></td>
        	</tr>
            <tr>
                <td colspan="<?php echo $colspan;?>" bgcolor="#ff505f"><b>1. PROSES DOKUMEN PEMBIAYAAN</b></td>
            </tr>
        	<tr>
                <td align="center"><b>Upload Dokumen SLIK</td>
                <td align="center"><b>Approval SLIK</td>
                <?php if ($pengelola_akun == "Kaper"){
                    $upload_awal = "SKO";
                }else{
                    $upload_awal = "SAP";
                } ?>
                <td align="center"><b>Upload Dokumen Pembiayaan <?php echo $upload_awal;?></td>
                <?php
                    switch ($pengelola_akun) {
                        case 'Kaper':
                ?>
                        <td align="center"><b>Validasi Legal Kaper</td>
                        <td align="center"><b>Validasi VCO</td>
                        <td align="center"><b>Validasi Kakaper</td>  
                <?php
                            break;

                        case 'Korporasi':
                ?>
                        <td align="center"><b>Validasi VCO Korporasi</td>
                        <td align="center"><b>Validasi Kabag Korporasi</td>
                <?php
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                ?>
        		<td align="center"><b>Verifikasi ADK</td>
        		<td align="center"><b>Pengolahan Data Reviewer</td>
        		<td align="center"><b>Verifikasi Kadiv Bisnis</td>
        	</tr>
        	<tr>
                <?php 
                    if ($pengelola_akun == "Kaper") {
                        $upload_awal = "uploadpembiayaan_sko|user_uploadpembiayaan_sko";
                    }else{
                        $upload_awal = "upload_sap|user_upload_sap";
                    } 


                    switch ($pengelola_akun) {
                        case 'Kaper':
                            $array = array("uploaddokumenslik|user_uploaddokumenslik","verifikasi_slik|user_verifikasi_slik",$upload_awal,"validasi_legal|user_validasi_legal","validasi_vco|user_validasi_vco","validasi_kakaper|user_validasi_kakaper","verifikasi_adk|user_verifikasi_adk","pengolahan_reviewer|user_pengolahan_reviewer","verifikasi_kadiv_bisnis|user_verifikasi_kadiv_bisnis");
                            break;

                        case 'Korporasi':
                            $array = array("uploaddokumenslik|user_uploaddokumenslik","verifikasi_slik|user_verifikasi_slik",$upload_awal,"validasi_vco_korporasi|user_validasi_vco_korporasi","validasi_kabag_korporasi|user_validasi_kabag_korporasi","verifikasi_adk|user_verifikasi_adk","pengolahan_reviewer|user_pengolahan_reviewer","verifikasi_kadiv_bisnis|user_verifikasi_kadiv_bisnis");

                            break;
                        
                        default:
                            # code...
                            break;
                    }
                ?>

                <?php
                  foreach($array as $value) {
                    // $getbulan = explode("-", $value);
                    $getmonitor_ = getmonitor($conn,$value,$iddebitur);
                    $getmonitor = explode("|", $getmonitor_);
                  ?>
                  <!-- <option value="<?php echo $getbulan[1];?>"><?php echo $getbulan[0];?></option> -->
                    <td align="center">
                        <?php
                            switch ($getmonitor[0]) {
                                case '1':
                        ?>
                            <i class="fa fa-check" style="color: #1fcc4e;"></i><br><br>
                            <?php echo $getmonitor[1]; ?><br>
                            <?php echo $getmonitor[2]; ?>
                        <?php
                                    break;

                                 case '0':
                        ?>
                            <i class="fa fa-times" style="color: #e73f3f;"></i><br><br>
                            <?php echo $getmonitor[1]; ?><br>
                            <?php echo $getmonitor[2]; ?>
                        <?php
                                    break;
                                
                                default:
                        ?>
                            <i class="fa fa-minus-circle" style="color: #e73f3f;"></i><br>
                        <?php
                                    break;
                            }
                        ?>
                    </td>
                  <?php
                  }
                ?>
        	</tr>
        </table>
        <table class="table table-bordered" style="font-size: 11px;">
            <!-- <tr>
                <td align="center" colspan="5" bgcolor="#c7c7c7"><h4><b>&nbsp;</b></h4></td>
            </tr> -->
            <?php
                if ($pengelola_akun == "Kaper") { $colspan = "5"; }else{ $colspan = "4"; }
            ?>
            <tr>
                <td colspan="5" bgcolor="#f0e94b"><b>2. PROSES DOKUMEN PROPOSAL</b></td>
            </tr>
            <tr>
                <?php
                    switch ($pengelola_akun) {
                        case 'Kaper':
                ?>
                        <td align="center"><b>Upload Proposal SKO</td>
                        <td align="center"><b>Validasi Proposal Legal Kaper</td>
                        <td align="center"><b>Validasi Proposal VCO</td>
                        <td align="center"><b>Validasi Proposal Kakaper</td>
                <?php
                            break;

                        case 'Korporasi':
                ?>
                        <td align="center"><b>Upload Proposal SAP</td>
                        <td align="center"><b>Validasi VCO Korporasi</td>
                        <td align="center"><b>Validasi Kabag Korporasi</td>
                <?php
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                ?>
                
                <td align="center"><b>Verifikasi Poposal ADK</td>
                
            </tr>
            <tr>
                <?php

                  switch ($pengelola_akun) {
                        case 'Kaper':
                            $array = array("uploadproposal_sko|user_uploadproposal_sko","validasiproposal_legal|user_validasiproposal_legal","validasiproposal_vco|user_validasiproposal_vco","validasiproposal_kakaper|user_validasiproposal_kakaper","verifikasiproposal_adk|user_verifikasiproposal_adk");
                            break;

                        case 'Korporasi':
                            $array = array("uploadproposal_sap|user_uploadproposal_sap","validasiproposal_vco_korporasi|user_validasiproposal_vco_korporasi","validasiproposal_kabag_korporasi|user_validasiproposal_kabag_korporasi","verifikasiproposal_adk|user_verifikasiproposal_adk");

                            break;
                        
                        default:
                            # code...
                            break;
                    }

                  foreach($array as $value) {
                    // $getbulan = explode("-", $value);
                    $getmonitor_ = getmonitor($conn,$value,$iddebitur);
                    $getmonitor = explode("|", $getmonitor_);
                  ?>
                  <!-- <option value="<?php echo $getbulan[1];?>"><?php echo $getbulan[0];?></option> -->
                    <td align="center">
                        <?php
                            switch ($getmonitor[0]) {
                                case '1':
                        ?>
                            <i class="fa fa-check" style="color: #1fcc4e;"></i><br><br>
                            <?php echo $getmonitor[1]; ?><br>
                            <?php echo $getmonitor[2]; ?>
                        <?php
                                    break;

                                 case '0':
                        ?>
                            <i class="fa fa-times" style="color: #e73f3f;"></i><br><br>
                            <?php echo $getmonitor[1]; ?><br>
                            <?php echo $getmonitor[2]; ?>
                        <?php
                                    break;
                                
                                default:
                        ?>
                            <i class="fa fa-minus-circle" style="color: #e73f3f;"></i><br>
                        <?php
                                    break;
                            }
                        ?>
                        
                    </td>
                  <?php
                  }
                ?>
            </tr>
        </table>
        <table class="table table-bordered" style="font-size: 11px;">
            <!-- <tr>
                <td align="center" colspan="6" bgcolor="#c7c7c7"><h4><b>&nbsp;</b></h4></td>
            </tr> -->
            <?php
                if ($pengelola_akun == "Kaper") { $colspan = "6"; }else{ $colspan = "5"; }
            ?>
            <tr>
                <td colspan="6" bgcolor="#6cffb1"><b>3. PROSES DOKUMEN PENCAIRAN</b></td>
            </tr>
            <tr>
                
                 <?php
                    switch ($pengelola_akun) {
                        case 'Kaper':
                ?>
                        <td align="center"><b>Upload Pencairan SKO</td>
                        <td align="center"><b>Validasi Pencairan Legal</td>
                        <td align="center"><b>Validasi Pencairan Kakaper</td>
                <?php
                            break;

                        case 'Korporasi':
                ?>
                        <td align="center"><b>Upload Pencairan SAP</td>
                        <td align="center"><b>Validasi Pencairan Kabag Korporasi</td>
                <?php
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                ?>
                <td align="center"><b>Verifikasi Pencairan KDO Legal</td>
                <td align="center"><b>Verifikasi Pencairan KDO Keuangan</td>
                <td align="center"><b>Approve Kadiv KDO</td>
            </tr>
            <tr>
                <?php
                  

                  switch ($pengelola_akun) {
                        case 'Kaper':
                            $array = array("uploadpencairan_sko|user_uploadpencairan_sko","validasipencairan_legal|user_validasipencairan_legal","validasipencairan_kakaper|user_validasipencairan_kakaper","verifikasipencairan_kdo_legal|user_verifikasipencairan_kdo_legal","verifikasipencairan_kdo_keuangan|user_verifikasipencairan_kdo_keuangan","approve_kadiv_kdo|user_approve_kadiv_kdo");
                            break;

                        case 'Korporasi':
                            $array = array("uploadpencairan_sap|user_uploadpencairan_sap","validasipencairan_kabag_korporasi|user_validasipencairan_kabag_korporasi","verifikasipencairan_kdo_legal|user_verifikasipencairan_kdo_legal","verifikasipencairan_kdo_keuangan|user_verifikasipencairan_kdo_keuangan","approve_kadiv_kdo|user_approve_kadiv_kdo");

                            break;
                        
                        default:
                            # code...
                            break;
                    }

                  foreach($array as $value) {
                    // $getbulan = explode("-", $value);
                    $getmonitor_ = getmonitor($conn,$value,$iddebitur);
                    $getmonitor = explode("|", $getmonitor_);
                  ?>
                  <!-- <option value="<?php echo $getbulan[1];?>"><?php echo $getbulan[0];?></option> -->
                    <td align="center">
                        <?php
                            switch ($getmonitor[0]) {
                                case '1':
                        ?>
                            <i class="fa fa-check" style="color: #1fcc4e;"></i><br><br>
                            <?php echo $getmonitor[1]; ?><br>
                            <?php echo $getmonitor[2]; ?>
                        <?php
                                    break;

                                 case '0':
                        ?>
                            <i class="fa fa-times" style="color: #e73f3f;"></i><br><br>
                            <?php echo $getmonitor[1]; ?><br>
                            <?php echo $getmonitor[2]; ?>
                        <?php
                                    break;
                                
                                default:
                        ?>
                            <i class="fa fa-minus-circle" style="color: #e73f3f;"></i><br>
                        <?php
                                    break;
                            }
                        ?>
                    </td>
                  <?php
                  }
                ?>
            </tr>
        </table>
        <p>
            <b>Keterangan :</b><br>
            <i class="fa fa-check" style="color: #1fcc4e;"></i><b>&nbsp;=&nbsp;Proses Approve&nbsp;&nbsp;,&nbsp;<i class="fa fa-times" style="color: #e73f3f;"></i>&nbsp;=&nbsp;Proses Reject/Salah&nbsp;&nbsp;,&nbsp;<i class="fa fa-minus-circle" style="color: #e73f3f;"></i>&nbsp;=&nbsp;Proses Belum Dikerjakan</b>
        </p>
        <br>
        <table class="table table-bordered" style="font-size: 11px;">
        	<tr>
        		<td align="center" colspan="11" bgcolor="#c7c7c7"><h4><b>DOKUMEN-DOKUMEN PROSES</b></h4></td>
        	</tr>
        	<tr>
        		<td align="center"><b>DOK. PEMBIAYAAN</td>
                <td align="center"><b>SP3</td>
        		<td align="center"><b>PROPOSAL</td>
        		<td align="center"><b>COVENANT</td>
        		<td align="center"><b>PK</td>
        		<td align="center"><b>COVERNOTE</td>
        		<td align="center"><b>MEMO PENCAIRAN</td>
        	</tr>
        	<tr>
        		<td align="center">
                    <a href="../upload/dok_pembiayaan/<?php echo $data['dok_pembiayaan']; ?>" target="_blank"><?php echo $data['dok_pembiayaan']; ?></a>
                    <br>
                    <b><?php echo $data['dok_pembiayaan_user']; ?><br>
                    <?php echo $data['dok_pembiayaan_date']; ?><br></b>
                </td>
                <td align="center">
        			<a href="../upload/dok_proposal/dok_sp3/<?php echo $data['dok_sp3']; ?>" target="_blank"><?php echo $data['dok_sp3']; ?></a>
                    <br>
                    <b><?php echo $data['dok_sp3_user']; ?><br>
                    <?php echo $data['dok_sp3_date']; ?><br></b>
        		</td>
        		<td align="center">
        			<a href="../upload/dok_proposal/dok_proposal/<?php echo $data['dok_proposal']; ?>" target="_blank"><?php echo $data['dok_proposal']; ?></a>
                    <br>
                    <b><?php echo $data['dok_proposal_user']; ?><br>
                    <?php echo $data['dok_proposal_date']; ?><br></b>
        		</td>
        		<td align="center">
        			<a href="../upload/dok_proposal/dok_covenant/<?php echo $data['dok_covenant']; ?>" target="_blank"><?php echo $data['dok_covenant']; ?></a>
                    <br>
                    <b><?php echo $data['dok_covenant_user']; ?><br>
                    <?php echo $data['dok_covenant_date']; ?><br></b>
        		</td>
        		<td align="center">
                    <a href="../upload/dok_pencairan/dok_pk/<?php echo $data['dok_pk']; ?>" target="_blank"><?php echo $data['dok_pk']; ?></a>
                    <br>
                    <b><?php echo $data['dok_pk_user']; ?><br>
                    <?php echo $data['dok_pk_date']; ?><br></b>
                </td>
        		<td align="center">
                    <a href="../upload/dok_pencairan/dok_covernote/<?php echo $data['dok_covernote']; ?>" target="_blank"><?php echo $data['dok_covernote']; ?></a>
                    <br>
                    <b><?php echo $data['dok_covernote_user']; ?><br>
                    <?php echo $data['dok_covernote_date']; ?><br></b>
                </td>
        		<td align="center">
                    <a href="../upload/dok_pencairan/dok_mpd/<?php echo $data['dok_mpd']; ?>" target="_blank"><?php echo $data['dok_mpd']; ?></a>
                    <br>
                    <b><?php echo $data['dok_mpd_user']; ?><br>
                    <?php echo $data['dok_mpd_date']; ?><br></b>
                </td>
        	</tr>
        </table>
        <?php
        }
    }
?>