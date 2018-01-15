<?php
  include "../config/fungsi.php";
  include "../config/koneksi.php";
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
    <img src="../../img/logopnm.jpg" style="width:120px;height:60px;">&nbsp;<img src="../../img/whatsapp.png" style="width:120px;height:70px;">
    <?php
      $iddebitur = $_GET['par'];
      $username = $_GET['par2'];
      $userregister = $_GET['par3'];

      $cekchat = cekchat($conn,$iddebitur,$username);
      $kodekantor = getkodekantor($conn,$userregister);
      // echo $kodekantor;
      // $getvco = getvco($conn,$kodekantor);

    ?>
    <div class="panel-body">
      
      <center>
        <h3><b>PILIH CHAT DARI WHATSAPP</b></h3>
      </center><br><br>
        <form method="post" action="dowhatsapp.php" enctype="multipart/form-data" >
          <table class="table table-bordered">
            <tr>
              <td>No</td>
              <td>Status</td>
              <td>Pengirim</td>
              <td>Isi Obrolan</td>
              <td>Option</td>
            </tr>
            <?php
              $no = 1;
              $query = mysqli_query($conn,"SELECT * from acc_chat where receive_user = '$username'");
              while ($data = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                $iddebitur = $data['iddebitur'];
                $send_user = $data['send_user'];
            ?>
              <tr>
                <td><?php echo $no;?></td>
                <td>
                  <?php 
                    switch ($data['replyf']) {
                      case '1':
                      ?>
                        <p><font color="green"><b>"Sudah Dibalas"</b></font></p>
                      <?php    
                        break;
                      
                      default:
                      ?>
                        <p><font color="red"><b>"Belum Dibalas"</b></font></p>
                      <?php 
                        break;
                    }
                  ?>
                </td>
                <td><?php echo $data['send_user'];?></td>
                <td><?php echo $data['chat'];?></td>
                <td>
                  <a href="whatsapp?par=<?php echo $iddebitur;?>&par2=<?php echo $send_user;?>&par3=&par4=<?php echo $username?>&par5=<?php echo $data['replyf'];?>">
                    <button type="button" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Lihat Chat</button>
                  </a>
                </td>
              </tr>
            <?php
                $no++;
              }
            ?>
          </table><br>
          
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