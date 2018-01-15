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
                        <a href="lihatdatasurat">
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
                    </header>
                    <div class="panel-body"><br>
                      <?php
                        $idsurat = $_GET['par'];

                        $query = mysqli_query($conn,"SELECT * from acc_barangmasuk where idsurat='$idsurat'");
                        while ($data = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                      ?>
                      <form role="form" method="post" action="dosurat.php">
                        <table class="table table-bordered">
                            <tr bgcolor="#f0ad4e">
                              <td colspan="3"><h4><b>DAFTAR SURAT / BARANG MASUK YANG BERHASIL DISIMPAN</b></h4></td>
                            </tr>
                            <tr>
                              <td><br>
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tipe Barang</label>
                                      <input class="form-control" type="text" name="tipe_barang_edit" value="<?php echo $data['tipe_barang'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Jenis Barang</label>
                                      <input class="form-control" type="text" name="jenis_barang" value="<?php echo $data['jenis_barang'];?>">
                                      <input type="hidden" name="idsurat" value="<?php echo $idsurat;?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Sifat Barang</label>
                                      <input class="form-control" type="text" name="sifat_barang" value="<?php echo $data['sifat_barang'];?>">
                                    </div>
                                  </div>
                              </td>
                              <td><br>
                                  <div class="col-lg-12"></div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Penerima (Receptionist) :</label>
                                      <!-- <input type="text" class="form-control" name="penerima"> -->
                                      <input class="form-control" type="text" name="penerima" value="<?php echo $data['penerima'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Pengirim (Dari) :</label>
                                      <input class="form-control" type="text" name="from_barang" value="<?php echo $data['from_barang'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tujuan (Ke) :</label><br>
                                        <!-- <input type="text" class="form-control" name=""> -->
                                        <input class="form-control" type="text" name="to_barang" value="<?php echo $data['to_barang'];?>">
                                    </div>
                                  </div>
                              </td>
                              <td><br>
                                  <div class="col-lg-12">
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Perihal :</label>
                                      <input class="form-control" type="text" name="perihal" value="<?php echo $data['perihal'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Tanggal :</label>
                                      <input class="form-control" type="text" name="tanggal" value="<?php echo $data['tanggal'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nomor Surat / Barang :</label>
                                      <input class="form-control" type="text" name="no_barang" value="<?php echo $data['no_barang'];?>">
                                    </div>
                                  </div>
                                  <div class="col-lg-12"><br>
                                  </div>
                              </td>
                            </tr>
                          </table>
                          <div class="col-lg-12"><br>
                            <div class="form-group">
                              <button type="submit" class="btn btn-warning" onclick="return confirm('Anda Yakin Update Data ini??')"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update</button>
                              <a href="surat">
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Input Surat Baru</button>
                              </a>
                            </div>
                          </div>
                          </form>
                      <?php
                        }
                      ?>
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
    </body>
</html>
