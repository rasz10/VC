<?php
	include "../config/koneksi.php";
	include "../config/fungsi.php";

	$no_ktp = $_POST['no_ktp'];
	$nama_ktp = $_POST['nama_ktp'];
	$username = $_POST['username'];

	$typeuser = gettypeuser($conn,$username);
	
	if ($typeuser == "sko") {
        if (!empty($no_ktp) && !empty($nama_ktp)){
            $where = "where no_ktp = '$no_ktp' AND nama like '%$nama_ktp%' and pengelola_akun='Kaper'";
        }elseif (!empty($no_ktp) && empty($nama_ktp)){
            $where = "where no_ktp = '$no_ktp' and pengelola_akun='Kaper'";
        }elseif (empty($no_ktp) && !empty($nama_ktp)) {
            $where = "where nama like '%$nama_ktp%' and pengelola_akun='Kaper'";
        }
    }else{
        if (!empty($no_ktp) && !empty($nama_ktp)){
            $where = "where no_ktp = '$no_ktp' AND nama like '%$nama_ktp%' and pengelola_akun='Korporasi'";
        }elseif (!empty($no_ktp) && empty($nama_ktp)){
            $where = "where no_ktp = '$no_ktp' and pengelola_akun='Korporasi'";
        }elseif (empty($no_ktp) && !empty($nama_ktp)) {
            $where = "where nama like '%$nama_ktp%' and pengelola_akun='Korporasi'";
        }
    }
	

?>
	<form id="FormInputStatusSLIK" >
		<!-- <?php
			if ($typeuser == "slik") {
		?>
		<button class="btn btn-warning" id="simpanstatusslik" type="button" style="float:right;"><i class="fa fa-check"></i> Validasi & Approval</button>
        <br><br><br>
		<?php
			}
		?> -->
		<table class="table table-bordered" style="font-size: 10px;">
        	<!-- <tr>
        		<td align="center" colspan="10"><h4><b>IDENTITAS</h4></td>
        	</tr> -->
        	<tr>
        		<td align="center"><b>Nama<br>Tempat,Tanggal Lahir<br>ID Debitur</td>
        		<td align="center"><b>Pengelola&nbsp;Akun<br>Badan&nbsp;Usaha</td>
        		<td align="center"><b>No. KTP</td>
        		<td align="center"><b>Alamat</td>
        		<td align="center"><b>No. NPWP</td>
        		<td align="center"><b>Dokumen SLIK Calon Debitur</td>
        		<td align="center"><b>Dokumen SLIK Pasangan</td>
        		<td align="center"><b>Dokumen SLIK Penjamin</td>
                <td align="center"><b>Dokumen SLIK Pasangan Penjamin</td>
                <td align="center"><b>Dokumen SLIK Keluarga</td>
        		<td align="center"><b>Status SLIK<br>Dokumen SLIK</td>
    			<?php
        			if ($typeuser != "slik") {
				?>
				<td align="center"><b>Option</td>
				<?php
					}
    			?>
        	</tr>
<?php
        $query= "SELECT * FROM acc_master_debitur $where";

        //echo $ax;
        $sql = mysqli_query($conn,$query);
        while ($data = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {

        	$iddebitur = $data['iddebitur'];
        	// echo $iddebitur;
            $getflagslik = getflagslik($conn,$iddebitur);
            $getflagproposal = getflagproposal($conn,$iddebitur);
        	$getflagpencairan = getflagpencairan($conn,$iddebitur);


            // $flagpencairan = explode("|", $getflagpencairan);

            $getdatapasangan = getdatapasangan($conn,$iddebitur);
        	$dok_pasangan = explode("|", $getdatapasangan);

        	$getdatapenjamin = getdatapenjamin($conn,$iddebitur);
        	$dok_penjamin = explode("|", $getdatapenjamin);
        ?>
        
        	<tr>
        		<td>
        			<?php echo $data['nama'];?><br>
        			<?php echo $data['tempat_lahir'];?>, <?php echo $data['tanggal_lahir'];?><br>
        			<?php echo $data['iddebitur'];?><br>
        			<input type="hidden" name="iddebitur[]" value="<?php echo $data['iddebitur'];?>">
        		</td>
        		<td>
        			<?php echo $data['pengelola_akun'];?><br><?php echo $data['badan_usaha'];?><br>
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
        			<a href="../upload/dok_slik/<?php echo $data['dok_slik']?>" target="_blank"><?php echo $data['dok_slik']?></a><br>
        			<a href="../upload/dok_slik/<?php echo $data['dok_slik_ttd']?>" target="_blank"><?php echo $data['dok_slik_ttd']?></a>
        		</td>
        		<!-- <td>
        			<a href="../upload/dok_slik_pasangan/<?php echo $dok_pasangan[0];?>" target="_blank"><?php echo $dok_pasangan[0];?></a><br>
        			<a href="../upload/dok_slik_pasangan/<?php echo $dok_pasangan[1];?>" target="_blank"><?php echo $dok_pasangan[1];?></a>
        		</td>
        		<td>
        			<a href="../upload/dok_slik_penjamin/<?php echo $dok_penjamin[0];?>" target="_blank"><?php echo $dok_pasangan[0];?></a><br>
        			<a href="../upload/dok_slik_penjamin/<?php echo $dok_pasangan[1];?>" target="_blank"><?php echo $dok_pasangan[1];?></a>
        		</td> -->
                <td>
                    <?php
                        $sqlpasangan = mysqli_query($conn,"SELECT dok_slik from acc_deb_pasangan where iddebitur='$iddebitur'");
                        while ($datapasangan = mysqli_fetch_array($sqlpasangan,MYSQLI_ASSOC)) {
                    ?>
                        *&nbsp;<a href="../upload/dok_slik_pasangan/<?php echo $datapasangan['dok_slik'];?>" target="_blank"><?php echo $datapasangan['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $sqlpenjamin = mysqli_query($conn,"SELECT dok_slik from acc_deb_penjamin where iddebitur='$iddebitur'");
                        while ($datapenjamin = mysqli_fetch_array($sqlpenjamin,MYSQLI_ASSOC)) {
                    ?>
                        *&nbsp;<a href="../upload/dok_slik_penjamin/<?php echo $datapenjamin['dok_slik'];?>" target="_blank"><?php echo $datapenjamin['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
                </td>

                <td>
                    <?php
                        $sqlpasanganpenjamin = mysqli_query($conn,"SELECT dok_slik from acc_deb_pasangan_penjamin where iddebitur='$iddebitur'");
                        while ($datapasanganpenjamin = mysqli_fetch_array($sqlpasanganpenjamin,MYSQLI_ASSOC)) {
                    ?>
                        *&nbsp;<a href="../upload/dok_slik_pasanganpenjamin/<?php echo $datapasanganpenjamin['dok_slik'];?>" target="_blank"><?php echo $datapasanganpenjamin['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $sqlkeluarga = mysqli_query($conn,"SELECT dok_slik from acc_deb_keluarga where iddebitur='$iddebitur'");
                        while ($datakeluarga = mysqli_fetch_array($sqlkeluarga,MYSQLI_ASSOC)) {
                    ?>
                        *&nbsp;<a href="../upload/dok_slik_keluarga/<?php echo $datakeluarga['dok_slik'];?>" target="_blank"><?php echo $datakeluarga['dok_slik'];?></a><br>
                    <?php   
                        }
                    ?>
                </td>
        		<td>
        			<?php
                        if ($data['statusslikf'] == NULL) {
                            $status = "<font color='red'><b>Proses Approval</b></font>";
                        }else{
                            switch ($data['statusslikf']) {
                                case '1':
                                    $status = "<font color='green'><b>Approve</b></font>";
                                    break;

                                case '0':
                                    $status = "<font color='red'><b>Reject</b></font>";
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        }
        				
        			?>
        			<?php echo $status;?><br><br><a href="../upload/dok_slik/<?php echo $data['upload_by_slik'];?>" target="_blank"><?php echo $data['upload_by_slik'];?></a><br>
        		</td>
				<td align="center">
					<a href="../pages/home?par=editdataslik&par2=<?php echo $iddebitur;?>" class="btn btn-warning" style="width: 100px;" target="_blank"><i class="fa fa-edit"></i> Edit</a><br><br>

                    <?php if ($getflagslik == 1) {$flagslik = "";}else{$flagslik = "disabled";} ?>
                    <?php if ($getflagproposal == 1) {$flagproposal = "";}else{$flagproposal = "disabled";} ?>
                    <?php if ($getflagpencairan == 1) {$flagpencairan = "";}else{$flagpencairan = "disabled";} ?>

					<a href="#" onclick="window.open('mod_dokumen/uploaddokumen?par=<?php echo $iddebitur;?>&par2=<?php echo $data['nama'];?>&tahap=1&par3=<?php echo $username;?>','','width=800, height=480, top=5, left=150, scrollbars=yes');" style="width: 100px;" class="btn btn-success" <?php echo $flagslik;?>><i class="fa fa-upload"></i> Upload <br>Dokumen <br>Pembiayaan</a><br><br>
                    <a href="#" onclick="window.open('mod_dokumen/uploaddokumen?par=<?php echo $iddebitur;?>&par2=<?php echo $data['nama'];?>&tahap=2&par3=<?php echo $username;?>','','width=800, height=480, top=5, left=150, scrollbars=yes');" style="width: 100px;" class="btn btn-info" <?php echo $flagproposal;?>><i class="fa fa-upload"></i> Upload <br>Dokumen <br>Proposal</a><br><br>
					<a href="#" onclick="window.open('mod_dokumen/uploaddokumen?par=<?php echo $iddebitur;?>&par2=<?php echo $data['nama'];?>&tahap=3&par3=<?php echo $username;?>','','width=800, height=480, top=5, left=150, scrollbars=yes');" style="width: 100px;" class="btn btn-danger" <?php echo $flagpencairan;?>><i class="fa fa-upload"></i> Upload <br>Dokumen <br>Pencairan</a>
				</td>
        	</tr>
        <?php
        }
?>
		</table>
	</form>

<script>
    $().ready(function(){
        $('#simpanstatusslik').click(function(e){
            // alert("test");
            // e.preventDefault();
            $.ajax({
                'type': 'POST',
                'url': 'mod_dokumen/insertstatusdokumen.php',
                'data': $('#FormInputStatusSLIK').serialize(),
                // 'beforeSend': function(){
                //        $('.loading').show()
                //    },
                // 'complete': function(){
                //        $('.loading').hide();
                //   },
                'success': function(s){
                    //alert(s);
                    
                    if(s == 'GAGAL')
                    {
                        alert("Error !!! Data is not Successfully Saved");
                    }
                    else
                    {
                        alert("Successfully Update Status");
                    }
                }
            });
        });
    });
</script>