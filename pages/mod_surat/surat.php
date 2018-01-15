<?php
    include "../config/fungsi.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pengelolaan Surat PNM VC</title>
        <meta name="robots" content="noindex, nofollow" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="docs/css/bootstrap-example.min.css" type="text/css">
        <link rel="stylesheet" href="docs/css/prettify.min.css" type="text/css">

        <script type="text/javascript" src="docs/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="docs/js/prettify.min.js"></script>
        <!--external css-->
        <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="../../assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
        <link href="../../assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../assets/data-tables/DT_bootstrap.css" />
        <!-- Custom styles for this template -->
        <link href="../../css/style.css" rel="stylesheet">
        <link href="../../css/style-responsive.css" rel="stylesheet" />

        <link rel="stylesheet" href="dist/css/bootstrap-multiselect.css" type="text/css">
        <script type="text/javascript" src="dist/js/bootstrap-multiselect.js"></script>
        <style type="text/css">
             .selectmultiple{
                border: 1px dashed red;
                height: 150px;
                overflow-x: hidden;
                overflow-y: scroll;
                width: 150px;
             }
        </style>
    </head>
    <body data-spy="scroll" data-target="#affix">
        <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->

            <a href="#" class="logo">PNM<span>VC</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a href="lihatdatasurat" target="_blank">
                            <span class="username"><i class="fa fa-eye"></i> Lihat Data</span>
                        </a>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--main content start-->
      <section id="">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h3>Selamat Datang di Sistem Informasi Monitoring Penerimaan Barang / Surat PT. PNM Venture Capital</h3>
                        <font color="red"><p class="blink"><b>Mohon Diisi dengan Akurat dan Detail !!!</b></p></font>
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="dosurat.php">
                          <table class="table table-bordered">
                            <tr bgcolor="#13c6f0">
                              <td colspan="3"><h4><b>REGISTER SURAT / BARANG MASUK</b></h4></td>
                            </tr>
                            <?php
                            if (!empty($_GET['par'])) {
                              $tipe = $_GET['par'];
                            }else{
                              $tipe = "";
                            }
                            ?>
                            <tr>
                              <td><br>
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tipe Barang</label>
                                      <!-- <select class="form-control" name="tipe_barang" data-live-search="true" >
                                        <option value="">--SILAHKAN PILIH--</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Corporate">Corporate</option>
                                      </select> -->
                                      <?php
                                          if ($tipe == "personal") {
                                            $selectedpersonal = "selected";
                                            $selectedcorporate = "";
                                          }else if ($tipe == "corporate") {
                                            $selectedpersonal = "";
                                            $selectedcorporate = "selected";
                                          }else{
                                            $selectedpersonal = "";
                                            $selectedcorporate = "";
                                          }
                                        ?>
                                      <select name="tipe_barang" onchange="location = this.value;" class="form-control">
                                       <option value="surat">--SILAHKAN PILIH--</option>
                                       <option value="surat?par=personal" <?php echo $selectedpersonal;?> >Personal</option>
                                       <option value="surat?par=corporate" <?php echo $selectedcorporate;?> >Corporate</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Jenis Barang</label>
                                      <select class="form-control jenis_barang" name="jenis_barang" data-live-search="true" >
                                        <option value="">--SILAHKAN PILIH--</option>
                                        <option value="Paket Barang">Paket Barang</option>
                                        <option value="Surat">Surat</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Sifat Barang</label>
                                      <select class="form-control" name="sifat_barang" data-live-search="true" >
                                        <option value="">--SILAHKAN PILIH--</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Confidential">Confidential</option>
                                      </select>
                                    </div>
                                  </div>
                              </td>
                              <td><br>
                                  <div class="col-lg-12"></div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Penerima (Receptionist) :</label>
                                      <!-- <input type="text" class="form-control" name="penerima"> -->
                                      <select name="penerima" class="form-control">
                                        <option value="">--SILAHKAN PILIH--</option>
                                        <option value="Murti">Murti</option>
                                        <option value="Roni">Roni</option>
                                        <option value="Ade">Ade</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Pengirim (Dari) :</label>
                                      <input type="text" class="form-control" name="from">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tujuan (Ke) :</label><br>
                                        <!-- <input type="text" class="form-control" name=""> -->
                                        <?php
                                          if ($tipe == "personal") {
                                        ?>
                                            <select id="example-enableFiltering-enableClickableOptGroups" multiple="multiple" id="selectmultiple" name="to[]">
                                            <!-- <optgroup label="Sekretariat">
                                                <option value="ADH">Adhia Rini</option>
                                            </optgroup> -->
                                                <optgroup label="Divisi Bisnis">
                                                    <?php
                                                        $selectbis = mysqli_query($conn,"SELECT username,fullname from user where divisi='Bisnis'");
                                                        while($databis = mysqli_fetch_array($selectbis,MYSQLI_ASSOC)){
                                                    ?>
                                                        <option value="<?php echo $databis['username'];?>"><?php echo $databis['fullname'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </optgroup>
                                                <optgroup label="Remedial">
                                                    <?php
                                                        $selectremedial = mysqli_query($conn,"SELECT username,fullname from user where divisi='Remedial'");
                                                        while($dataremedial = mysqli_fetch_array($selectremedial,MYSQLI_ASSOC)){
                                                    ?>
                                                        <option value="<?php echo $dataremedial['username'];?>"><?php echo $dataremedial['fullname'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </optgroup>
                                                <optgroup label="Divisi KDO">
                                                    <?php
                                                        $selectkdo = mysqli_query($conn,"SELECT username,fullname from user where divisi='KDO'");
                                                        while($datakdo = mysqli_fetch_array($selectkdo,MYSQLI_ASSOC)){
                                                    ?>
                                                        <option value="<?php echo $datakdo['username'];?>"><?php echo $datakdo['fullname'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </optgroup>
                                                <optgroup label="Divisi Pembinaan Usaha">
                                                    <?php
                                                        $selectpus = mysqli_query($conn,"SELECT username,fullname from user where divisi='Pembinaan Usaha'");
                                                        while($datapus = mysqli_fetch_array($selectpus,MYSQLI_ASSOC)){
                                                    ?>
                                                        <option value="<?php echo $datapus['username'];?>"><?php echo $datapus['fullname'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </optgroup>
                                                <optgroup label="SPI">
                                                    <?php
                                                        $selectspi = mysqli_query($conn,"SELECT username,fullname from user where divisi='SPI'");
                                                        while($dataspi = mysqli_fetch_array($selectspi,MYSQLI_ASSOC)){
                                                    ?>
                                                        <option value="<?php echo $dataspi['username'];?>"><?php echo $dataspi['fullname'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </optgroup>
                                            </select>
                                        <?php
                                          }else if ($tipe == "corporate") {
                                        ?>
                                          <input type="text" class="form-control" name="to_view" value="ADH - Adhia Rini">
                                           <input type="hidden" class="form-control" name="to[]" value="ADH">
                                        <?php 
                                          }else{
                                        ?>
                                          <input type="text" class="form-control" name="to[]">
                                        <?php } ?>
                                    </div>
                                  </div>
                              </td>
                              <td><br>
                                  <div class="col-lg-12">
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Perihal :</label>
                                      <input type="text" class="form-control" name="perihal">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tanggal :</label>
                                      <input type="text" class="form-control" name="tanggal">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nomor Surat / Barang :</label>
                                      <input type="text" class="form-control" name="no_barang">
                                    </div>
                                  </div>
                                  <div class="col-lg-12"><br>
                                  </div>
                              </td>
                            </tr>
                          </table>
                          <div class="col-lg-12"><br>
                            <div class="form-group">
                              <button type="submit" class="btn btn-success submitInput" onclick="return confirm('Anda Yakin Simpan Data ini??')"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan</button>
                            </div>
                          </div>
                        </form>

                    </div>
                </section>
            </div>
          </div>
        </section>
      </section>
      <?php
        include "../footer.php";
      ?>
      <!--footer end-->
  </section>
        
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example-enableFiltering-enableClickableOptGroups').multiselect({
                    enableFiltering: true,
                    enableClickableOptGroups: true
                });
            });
        </script>
        <script type="text/javascript">
    //<![CDATA[
    (function(e){e.fn.blink=function(t){var n={delay:500};var t=e.extend(n,t);return this.each(function(){var n=e(this);setInterval(function(){if(e(n).css("visibility")=="visible"){e(n).css("visibility","hidden")}else{e(n).css("visibility","visible")}},t.delay)})}})(jQuery);$(document).ready(function(){$(".blink").blink()})
    //]]>
    </script>
    </body>
</html>
