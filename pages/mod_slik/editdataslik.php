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
        <h3>Edit Data SID</h3>
      </center><br>
      <?php
        $iddebitur = $_GET['par'];
        $namadebitur = $_GET['par2'];

        $getdatauploadbysid_ = getdatauploadbysid($conn,$iddebitur);
        $getdatauploadbysid = explode("|", $getdatauploadbysid_);

       $sql = mysqli_query($conn,"SELECT * from acc_master_debitur where iddebitur='$iddebitur'");
       $data = mysqli_fetch_array($sql,MYSQLI_ASSOC);
      ?>
      <form method="post" action="doeditdatasid.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td>
              Nama Debitur
            </td>
            <td>
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur?>">
                <input type="text" class="form-control" name="namadebitur" value="<?php echo $namadebitur?>">
            </td>
          </tr>
          <tr>
            <td>
              Status SID
            </td>
            <td>
              <?php
                if ($data['statussidf'] == NULL) {
                    $status = "";
                }else{
                    switch ($data['statussidf']) {
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
                <select class="form-control" name="statussidf">
                  <option value="<?php echo $status;?>"><?php echo $status;?></option>
                  <option value="">--PILIH--</option>
                  <option value="1">Approve</option>
                  <option value="0">Reject</option>
                </select>
            </td>
          </tr>
          <tr>
            <td>
              Dokumen SID
            </td>
            <td>
                <?php if ($getdatauploadbysid[0] == "0") {?>
                <input type="file" class="form-control" name="dok_sid">
                <?php }else{ ?>
                  <a href="../../upload/dok_pic_sid/<?php echo $getdatauploadbysid[1];?>" target="_blank"><?php echo $getdatauploadbysid[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>">
                    <!-- <i><b><i class="fa fa-trash-o"></i> Hapus</b></i> -->
                  </a>
                <?php } ?>
            </td>
          </tr>
        </table>
        <button type="submit" class="btn btn-success">Simpan</button>
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