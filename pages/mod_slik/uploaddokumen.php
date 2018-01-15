<?php
  include "../config/koneksi.php";
  include "../config/fungsi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../img/logo.png">

    <title>PT. PNMVC</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="../../assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/data-tables/DT_bootstrap.css" />
    <!-- Custom styles for this template -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
    <div class="panel-body">
      <center>
        <h3>UPLOAD DOKUMEN SLIK</h3>
      </center><br>
      <?php
        $iddebitur = $_GET['par'];
        $namadebitur = $_GET['par2'];

        $getdatauploadbyslik_ = getdatauploadbyslik($conn,$iddebitur);
        $getdatauploadbyslik = explode("|", $getdatauploadbyslik_);
        //echo $getdatauploadbyslik;
      ?>
      <form method="post" action="douploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td>
              Upload Dokumen SLIK
            </td>
            <td>
              <?php if ($getdatauploadbyslik[0] == "0") {?>
                <input type="file" class="form-control" name="dok_slik">
              <?php }else{ ?>
                <a href="../../upload/dok_pic_slik/<?php echo $getdatauploadbyslik[1];?>" target="_blank"><?php echo $getdatauploadbyslik[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
             
              <input type="hidden" name="iddebitur" value="<?php echo $iddebitur?>">
              <input type="hidden" name="namadebitur" value="<?php echo $namadebitur?>">
            </td>
          </tr>
        </table>
        <button type="submit" class="btn btn-success">Upload</button>
      </form>
    </div>
  </section>

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


  <!--common script for all pages-->
    <script src="../../js/common-scripts.js"></script>

 
  </body>
</html>