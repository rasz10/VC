<!-- <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h3>Lihat Hasil Approval</h3>
            </header>
            <div class="panel-body">
                  <div class="adv-table">
                      <table  class="display table table-bordered table-striped" id="example">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama<br>Tempat,Tanggal Lahir<br>ID Debitur</th>
                            <th>Pengelola&nbsp;Akun<br>Badan&nbsp;Usaha</th>
                            <th>No. KTP</th>                           
                            <th>Alamat</th>
                            <th>No. NPWP</th>
                            <th>Dokumen SLIK Calon Debitur</th>
                            <th>Dokumen SLIK Pasangan</th>
                            <th>Dokumen SLIK Penjamin</th>
                            <th>Status SLIK<br>Catatan SLIK</th>
                            <th>Dokumen Pembiayaan</th>
                            <th>Status<br>Note</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query= "SELECT * FROM acc_master_debitur INNER JOIN acc_monitoring ON acc_master_debitur.iddebitur=acc_monitoring.iddebitur where 
                            acc_master_debitur.statusslikf = '1' and 
                            acc_monitoring.upload_sap = '1' and 
                            acc_monitoring.validasi_vco_korporasi is not NULL  order by no desc";

                            //echo $ax;
                            $no=1;
                            $sql = mysqli_query($conn,$query);
                            while ($data = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {

                                $iddebitur = $data['iddebitur'];
                                // echo $iddebitur;
                                $getdatapasangan = getdatapasangan($conn,$iddebitur);
                                $dok_pasangan = explode("|", $getdatapasangan);

                                $getdatapenjamin = getdatapenjamin($conn,$iddebitur);
                                $dok_penjamin = explode("|", $getdatapenjamin);
                        ?>
                        <tr class="gradeX">
                             <td><?php echo $no;?></td>
                                <td>
                                    <?php echo $data['nama'];?><br>
                                    <?php echo $data['tempat_lahir'];?>, <?php echo $data['tanggal_lahir'];?><br>
                                    <?php echo $data['iddebitur'];?><br>
                                    <input type="hidden" name="iddebitur[]" value="<?php echo $data['iddebitur'];?>">
                                    <input type="hidden" name="username[]" value="<?php echo $username;?>">
                                    <input type="hidden" name="todaytime[]" value="<?php echo $todaytime;?>">
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
                                <td>
                                    <a href="../upload/dok_slik_pasangan/<?php echo $dok_pasangan[0];?>" target="_blank"><?php echo $dok_pasangan[0];?></a><br>
                                    <a href="../upload/dok_slik_pasangan/<?php echo $dok_pasangan[1];?>" target="_blank"><?php echo $dok_pasangan[1];?></a>
                                </td>
                                <td>
                                    <a href="../upload/dok_slik_penjamin/<?php echo $dok_penjamin[0];?>" target="_blank"><?php echo $dok_pasangan[0];?></a><br>
                                    <a href="../upload/dok_slik_penjamin/<?php echo $dok_pasangan[1];?>" target="_blank"><?php echo $dok_pasangan[1];?></a>
                                </td>
                                <td>
                                    <?php
                                        if ($data['statusslikf'] == NULL) {
                                            $status = "";
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
                                    <?php echo $status;?><br><br><a href="../upload/dok_slik/<?php echo $data['upload_by_slik'];?>" target="_blank"><?php echo $data['upload_by_slik'];?></a><br><br><?php echo $data['catatanslik'];?>
                                </td>
                                <td>
                                    <a href="../upload/dok_pembiayaan/<?php echo $data['dok_pembiayaan'];?>" target="_blank"><?php echo $data['dok_pembiayaan'];?></a>
                                </td>
                                <td>
                                    <?php
                                        switch ($data['validasi_vco_korporasi']) {
                                            case '1':
                                                $statusvalidasi = "Approve";
                                                break;

                                            case '0':
                                                $statusvalidasi = "Reject";
                                                break;
                                            
                                            default:
                                                # code...
                                                break;
                                        }
                                    ?>
                                    <b><?php echo $statusvalidasi; ?><br><br><?php echo $data['note_validasi_vco_korporasi'] ?></b>
                                </td>
                                <td>
                                    <a href="#"></i> Edit</a>
                                    <!-- onclick="window.open('mod_slik/editdataslik?par=<?php echo $iddebitur;?>&par2=<?php echo $data['nama'];?>','','width=800, height=480, top=5, left=150, scrollbars=yes');" style="width: 100px;" ><i class="fa fa-edit" -->
                                </td>
                        </tr>
                        <?php $no++;} ?>
                        </tbody>
            </table>
                  </div>
            </div>
        </section>
    </div>
</div>

 -->