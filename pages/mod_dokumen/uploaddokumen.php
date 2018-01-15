<?php
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
    
    <?php
      $iddebitur = $_GET['par'];
      $namadebitur = $_GET['par2'];
      $username = $_GET['par3'];
      $tahap = $_GET['tahap'];
      $typeuser = gettypeuser($conn,$username);

      

      switch ($tahap) {
        case '1':
          $jenisdokumen = "PEMBIAYAAN";
          break;

        case '2':
          $jenisdokumen = "PROPOSAL";
          break;

        case '3':
          $jenisdokumen = "PENCAIRAN";
          break;
        
        default:
          # code...
          break;
      }
    ?>

    <center>
      <h3>UPLOAD DOKUMEN <b><?php echo $jenisdokumen; ?></b> BY <?php $type_ = strtoupper($typeuser); echo $type_?></h3>
    </center><br>
    <?php
      switch ($tahap) {
        case '1':

        $getdatauploadbypembiayaan_ = getdatauploadbypembiayaan($conn,$iddebitur);
        $getdatauploadbypembiayaan = explode("|", $getdatauploadbypembiayaan_);


    ?>
    <div class="panel-body">
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td>
              Dokumen Pembiayaan
            </td>
            <td>
              <?php if ($getdatauploadbypembiayaan[0] == "0") {?>
                <input type="file" class="form-control" name="dok_pembiayaan" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_pembiayaan/<?php echo $getdatauploadbypembiayaan[1];?>" target="_blank"><?php echo $getdatauploadbypembiayaan[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
          </tr>
        </table>
        <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
      </form>
    </div>
    <?php
          break;

        case '2':

        $getdatauploadbysp3_ = getdatauploadbysp3($conn,$iddebitur);
        $getdatauploadbysp3 = explode("|", $getdatauploadbysp3_);

        $getdatauploadbyproposal_ = getdatauploadbyproposal($conn,$iddebitur);
        $getdatauploadbyproposal = explode("|", $getdatauploadbyproposal_);

        $getdatauploadbycovenant_ = getdatauploadbycovenant($conn,$iddebitur);
        $getdatauploadbycovenant = explode("|", $getdatauploadbycovenant_);
    ?>
    <div class="panel-body">
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td width="15%">
              SP3
            </td>
            <td width="60%">
              <?php if ($getdatauploadbysp3[0] == "0") {?>
                <input type="file" class="form-control" name="dok_sp3" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="SP3">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_proposal/dok_sp3/<?php echo $getdatauploadbysp3[1];?>" target="_blank"><?php echo $getdatauploadbysp3[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>&par5=sp3"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
            <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
            </td>
          </tr>
        </table>
      </form>
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td width="15%">
              Proposal
            </td>
            <td width="60%">
              <?php if ($getdatauploadbyproposal[0] == "0") {?>
                <input type="file" class="form-control" name="dok_proposal" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="Proposal">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_proposal/dok_proposal/<?php echo $getdatauploadbyproposal[1];?>" target="_blank"><?php echo $getdatauploadbyproposal[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>&par5=proposal"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
            <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
            </td>
          </tr>
        </table>
      </form>
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
        <tr>
          <td width="15%">
            Covenant
          </td>
          <td width="60%">
              <?php if ($getdatauploadbycovenant[0] == "0") {?>
                <input type="file" class="form-control" name="dok_covenant" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="Covenant">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_proposal/dok_covenant/<?php echo $getdatauploadbycovenant[1];?>" target="_blank"><?php echo $getdatauploadbycovenant[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>&par5=covenant"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
          <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
            </td>
        </tr>
      </table>
      
    </form>
    </div>
    <?php
          break;

        case '3':

        $getdatauploadbypk_ = getdatauploadbypk($conn,$iddebitur);
        $getdatauploadbypk = explode("|", $getdatauploadbypk_);

        $getdatauploadbycovernote_ = getdatauploadbycovernote($conn,$iddebitur);
        $getdatauploadbycovernote = explode("|", $getdatauploadbycovernote_);

        $getdatauploadbympd_ = getdatauploadbympd($conn,$iddebitur);
        $getdatauploadbympd = explode("|", $getdatauploadbympd_);

        $getdatarekening_ = getdatarekening($conn,$iddebitur);
        $getdatarekening = explode("|", $getdatarekening_);
    ?>
    <div class="panel-body">
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td width="15%">
              PK
            </td>
            <td width="60%">
              <?php if ($getdatauploadbypk[0] == "0") {?>
                <input type="file" class="form-control" name="dok_pk" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="PK">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_pencairan/dok_pk/<?php echo $getdatauploadbypk[1];?>" target="_blank"><?php echo $getdatauploadbypk[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>&par5=pk"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
            <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
            </td>
          </tr>
        </table>
      </form>
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
          <tr>
            <td width="15%">
              Covernote
            </td>
            <td width="60%">
              <?php if ($getdatauploadbycovernote[0] == "0") {?>
                <input type="file" class="form-control" name="dok_covernote" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="Covernote">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_pencairan/dok_covernote/<?php echo $getdatauploadbycovernote[1];?>" target="_blank"><?php echo $getdatauploadbycovernote[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>&par5=covernote"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
            <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
            </td>
          </tr>
        </table>
      </form>
      <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
        <tr>
          <td width="15%">
            MPD
          </td>
          <td width="60%">
              <?php if ($getdatauploadbympd[0] == "0") {?>
                <input type="file" class="form-control" name="dok_mpd" >
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="MPD">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <a href="../../upload/dok_pencairan/dok_md/<?php echo $getdatauploadbympd[1];?>" target="_blank"><?php echo $getdatauploadbympd[1];?></a>&nbsp;&nbsp;<a href="hapusupload.php?par=<?php echo $iddebitur;?>&par2=<?php echo $namadebitur;?>&par3=<?php echo $jenisdokumen;?>&par4=<?php echo $username;?>&par5=mpd"><i><b><i class="fa fa-trash-o"></i> Hapus</b></i></a>
              <?php } ?>
              
            </td>
          <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
            </td>
        </tr>
      </table>
      
    </form>
    <form method="post" action="do_uploaddokumen.php" enctype="multipart/form-data" >
        <table class="table table-bordered">
        <tr>
          <td width="15%">
            Data Rekening
          </td>
          <td width="60%">
              <?php if ($getdatarekening[0] == "0") {?>
                <input type="text" class="form-control" name="nama_bank" placeholder="Ketikkan Nama Bank"><br>
                <input type="text" class="form-control" name="atasnama_bank" placeholder="Ketikkan Atas Nama Rek"><br>
                <input type="text" class="form-control" name="no_rekening" placeholder="Ketikkan No. Rek"><br>
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="datarekening">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php }else{ ?>
                <input type="text" class="form-control" name="nama_bank" value="<?php echo $getdatarekening[1];?>"><br>
                <input type="text" class="form-control" name="atasnama_bank" value="<?php echo $getdatarekening[2];?>"><br>
                <input type="text" class="form-control" name="no_rekening" value="<?php echo $getdatarekening[3];?>"><br>
                <input type="hidden" name="username" value="<?php echo $username;?>">
                <input type="hidden" name="namadebitur" value="<?php echo $namadebitur ;?>"> 
                <input type="hidden" name="jenisdokumen" value="<?php echo $jenisdokumen ;?>">
                <input type="hidden" name="namadokumen" value="datarekening">
                <input type="hidden" name="tahap" value="<?php echo $tahap ;?>">
                <input type="hidden" name="iddebitur" value="<?php echo $iddebitur ;?>">
                <input type="hidden" name="typeuser" value="<?php echo $typeuser ;?>">
              <?php } ?>
            </td>
          <td width="25%">
              <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Simpan</button>
            </td>
        </tr>
      </table>
      
    </form>
    </div>
    <?php
          break;
        
        default:
          # code...
          break;
      }
    ?>
    
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