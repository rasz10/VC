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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <script src="http://malsup.github.com/jquery.form.js"></script> 
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
                        <font color="red"><p class="blink"><b>Lihat Data Input Surat / Barang Masuk</b></p></font>
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="dosurat.php">
                          <table id="example" class="display table table-bordered table-striped" style="font-size: 10px;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Surat</th>
                            <th>Jenis Barang</th>
                            <th>Tipe Barang</th>                           
                            <th>Sifat Barang</th>
                            <th>Penerima</th>
                            <th>Pengirim</th>
                            <th>Tujuan</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                            <th>No. Surat/Barang</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query= "SELECT * FROM acc_barangmasuk";

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
                                    <?php echo $data['penerima'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['from_barang'];?><br>
                                </td>
                                <td>
                                    <?php echo $data['to_barang'];?><br>
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
                                    <a href="notifikasi?par=<?php echo $data['idsurat'];?>" class="btn btn-success" style="font-size: 10px;"><i class="fa fa-edit"></i> Edit</a>

                                    <!-- <a href="#" onclick="window.open('mod_dokumen/uploaddokumen?par=<?php echo $iddebitur;?>&par2=<?php echo $data['nama'];?>&tahap=3&par3=<?php echo $username;?>','','width=800, height=480, top=5, left=150, scrollbars=yes');" style="width: 100px;" class="btn btn-danger" <?php echo $flagpencairan;?>><i class="fa fa-upload"></i> Upload <br>Dokumen <br>Pencairan</a> -->
                                </td>
                                
                            </tr>
                        <?php $no++;} ?>
                        </tbody>
            </table>
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
    
    <script type="text/javascript" language="javascript" src="../../assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/my.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script class="include" type="text/javascript" src="../../js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../js/jquery.scrollTo.min.js"></script>
    <script src="../../js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="../../assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../../assets/data-tables/DT_bootstrap.js"></script>
    <script src="../../js/respond.min.js" ></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../css/bootstrap-select.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="../../js/bootstrap-select.js"></script>
  <!--common script for all pages-->
   <!--  <script src="../js/common-scripts.js"></script> -->

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
    </body>
</html>
