<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h3>Lihat Data Dokumen Proposal Kakaper Kaper</h3>
                <a href="home?par=lihathasil&par2=pembiayaan" target="_blank"><i class="fa fa-eye"></i> Lihat Hasil Approval</a>
            </header>
            <div class="panel-body">
                  <div class="adv-table">
                    <form method="post" action="mod_kaper_kakaper/dolihatdataproposal.php">
                    <button class="btn btn-warning" id="simpanstatus" type="submit" style="float:right;font-size: 9px;" onclick="return confirm('Anda Yakin Update Data ini??')"><i class="fa fa-check" )"></i> Validasi & Approval</button>
                    <br><br>
                      <table  class="display table table-bordered table-striped" style="font-size: 10px;">
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
                            <th>Dokumen Pembiayaan</th>
                            <th>Dokumen Proposal</th>
                            <th>Status</th>
                            <!-- <th>Option</th> -->
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query= "SELECT * FROM acc_master_debitur INNER JOIN acc_monitoring ON acc_master_debitur.iddebitur=acc_monitoring.iddebitur where 
                                acc_master_debitur.statusslikf = '1' and 
                                acc_monitoring.uploadpembiayaan_sko = '1' and 
                                acc_monitoring.validasi_legal = '1' and 
                                acc_monitoring.validasi_vco = '1' and 
                                acc_monitoring.verifikasi_adk = '1' and 
                                acc_monitoring.pengolahan_reviewer = '1' and 
                                acc_monitoring.verifikasi_kadiv_bisnis = '1' and 
                                acc_monitoring.uploadproposal_sko = '1' and 
                                acc_monitoring.validasiproposal_legal = '1' and 
                                acc_monitoring.validasiproposal_vco = '1' and 
                                acc_monitoring.validasiproposal_kakaper is NULL  ";

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
                                    <a href="../upload/dok_pembiayaan/<?php echo $data['dok_pembiayaan'];?>" target="_blank"><?php echo $data['dok_pembiayaan'];?></a>
                                </td>
                                <td>
                                    <a href="../upload/dok_proposal/dok_sp3/<?php echo $data['dok_sp3'];?>" target="_blank"><b>SP3&nbsp;:&nbsp;</b><?php echo $data['dok_sp3'];?></a><br><br>
                                    <a href="../upload/dok_proposal/dok_proposal/<?php echo $data['dok_proposal'];?>" target="_blank"><b>Proposal&nbsp;:&nbsp;</b><?php echo $data['dok_proposal'];?></a><br><br>
                                    <a href="../upload/dok_proposal/dok_covenant/<?php echo $data['dok_covenant'];?>" target="_blank"><b>Covenant&nbsp;:&nbsp;</b><?php echo $data['dok_covenant'];?></a>
                                </td>
                                <td>
                                    <select name="status[]">
                                        <option value="-">--PILIH--</option>
                                        <option value="1">Approve</option>
                                        <option value="0">Reject</option>
                                    </select>
                                    <br><br>
                                    <textarea name="catatan[]" placeholder="Catatan.."></textarea>
                                </td>
                                <!-- <td>
                                    <button type="submit" class="btn btn-success" style="font-size: 9px;" ><i class="fa fa-check"></i> Update</button> -->
                                    <!-- onclick="return confirm('Anda Yakin Update Data ini??')" -->
                                <!-- </td> -->
                            </tr>
                        <?php $no++;} ?>
                        </tbody>
                        </table>
                    </form>
                  </div>
            </div>
        </section>
    </div>
</div>

