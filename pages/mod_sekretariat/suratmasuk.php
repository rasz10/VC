<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h3>Lihat Data Surat Masuk</h3>
                <!-- <a href="home?par=lihathasilslik" target="_blank"><i class="fa fa-eye"></i> Lihat Hasil Pengecekan</a> -->
            </header>
            <div class="panel-body">
                  <div class="adv-table">
                    <form method="post" action="">
                    <!-- <button class="btn btn-warning" id="simpanstatusslik" type="submit" style="float:right;font-size: 9px;" onclick="return confirm('Anda Yakin Update Data ini??')"><i class="fa fa-check" )"></i> Validasi & Approval</button> -->
                    <br><br>
                      <table id="example" class="display table table-bordered table-striped" style="font-size: 10px;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Surat</th>
                            <th>Jenis Barang</th>
                            <th>Tipe Barang</th>                           
                            <th>Sifat Barang</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                            <th>No. Surat/Barang</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($username == "ADH") {
                                $query= "SELECT * FROM acc_barangmasuk where to_barang = '$username' and tipe_barang = 'corporate' ";
                                // echo $query;
                            }else{
                                $query= "SELECT * FROM acc_barangmasuk where to_barang = '$username' and tipe_barang != 'corporate' ";
                            }

                            //echo $ax;
                            $no=1;
                            $sql = mysqli_query($conn,$query);
                            while ($data = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
                        ?>
                            <tr class="gradeX">
                                <td><?php echo $no;?></td>
                                <td>
                                    <?php echo $data['idsurat'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['jenis_barang'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['tipe_barang'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['sifat_barang'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['from_barang'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['perihal'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['tanggal'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['no_barang'];?><br>
                                </td>
                                <td align="center">
                                    <button type="button" onclick="window.open('mod_sekretariat/dosuratmasuk?par=<?php echo $data['idsurat'];?>','','width=800, height=480, top=5, left=150, scrollbars=yes');" class="btn btn-success" style="font-size: 10px;"><i class="fa fa-edit"></i> Lengkapi</button>
                                </td>
                                
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

