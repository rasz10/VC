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
      $userlogin = $_GET['par4'];
      $replyf = $_GET['par5'];

      $cekchat = cekchat($conn,$iddebitur,$username);
      $kodekantor = getkodekantor($conn,$userregister);
      // echo $kodekantor;
      // $getvco = getvco($conn,$kodekantor);

    ?>
    <div class="panel-body">
      <?php
        if ($cekchat == 1) {
      ?>
      <!-- CHATLINE -->
      <div class="text-center mbot30">
          <h3 class="timeline-title">Chat Line</h3>
          <p class="t-info">This is a chat line</p>
      </div>

      <div class="timeline">
        <?php
          $sqlinbox = mysqli_query($conn,"SELECT * from acc_chat order by no asc");
          while ($datainbox = mysqli_fetch_array($sqlinbox)) {
            $cdate = $datainbox['cdate'];
            $send_user = $datainbox['send_user'];
            $send_date = $datainbox['send_date'];
            $jam = substr($send_date, 11,5);
            $tanggal = substr($send_date, 0,10);
        ?>
        <?php 
          if ($send_user == $datainbox['cuser']) {
        ?>
        <article class="timeline-item alt">
              <div class="timeline-desk">
                  <div class="panel">
                      <div class="panel-body">
                          <span class="arrow-alt"></span>
                          <span class="timeline-icon green"></span>
                          <span class="timeline-date"><?php echo $jam;?></span>
                          <h1 class="green"><?php echo strtoupper($datainbox['send_user']);?> | <?php echo hari();?>, <?php echo tgl_indo($tanggal);?></h1>
                          <p><a href="#"><?php echo $datainbox['chat'];?></a></p>
                      </div>
                  </div>
              </div>
          </article>
        <?php
          }else{ 
        ?>
          <article class="timeline-item">
              <div class="timeline-desk">
                  <div class="panel">
                      <div class="panel-body">
                          <span class="arrow"></span>
                          <span class="timeline-icon red"></span>
                          <span class="timeline-date"><?php echo $jam;?></span>
                          <h1 class="red"><?php echo strtoupper($datainbox['send_user']);?> | <?php echo hari();?>, <?php echo tgl_indo($tanggal);?></h1>
                          <h1 class="green"><?php echo $datainbox['chat'];?></h1>
                          <!-- <p>Lorem ipsum dolor sit amet consiquest dio</p> -->
                      </div>
                  </div>
              </div>
          </article>
        <?php 
            } 
          }
        ?>
      </div>

      <!-- <div class="clearfix">&nbsp;</div> -->
      <!-- END CHATLINE -->
        <!-- <table class="table table-bordered">
          <tr>
            <td>
              <b>No. Telepon Whatsapp
            </td>
            <td>
              <b>Isi Obrolan
            </td>
          </tr>
          <?php
            $querychat = mysqli_query($conn,"SELECT * from acc_chat where iddebitur='$iddebitur'");
            while ($datachat = mysqli_fetch_array($querychat,MYSQLI_ASSOC)) {
          ?>
          <tr>
            <td>
              <?php echo $datachat['no_wa'] ;?>
            </td>
            <td>
              <?php echo $datachat['chat'] ;?>
            </td>
          </tr>
          <?php
            }
          ?>
        </table>
        <br><br> -->
        <br><br>
        <?php
          if ($_GET['par5'] == 1) {
            # code...
          }else{
        ?>
        <center>
          <h3><b>REPLY CHAT BY WHATSAPP</b></h3>
        </center><br>
        <form method="post" action="dowhatsapp.php" enctype="multipart/form-data" >
          <table class="table table-bordered">
            <tr>
              <td>
                To :
              </td>
              <td>
                <?php if (!empty($userregister)) {?>
                  <select class="form-control" name="to">
                    <option value="">--SILAHKAN PILIH--</option>
                    <?php
                      $querykodekantor = mysqli_query($conn,"SELECT username,fullname from user where idkantor='$kodekantor' and chatf='vco'");
                      while ($datato = mysqli_fetch_array($querykodekantor,MYSQLI_ASSOC)) {
                    ?>
                      <option value="<?php echo $datato['username'];?>"><?php echo $datato['username'];?> - <?php echo $datato['fullname'];?></option>
                    <?php
                      }
                    ?>
                  </select>
                <?php }else{ ?>
                  <input type="text" name="to" class="form-control" value="<?php echo $_GET['par2'];?>" readonly>
                <?php } ?>
                  
              </td>
            </tr>
            <tr>
              <td>
                No. Telepon WhatsApp
              </td>
              <td>
                  <input type="text" class="form-control" name="no_wa" >
                  <input type="hidden" class="form-control" name="iddebitur" value="<?php echo $iddebitur;?>">
                  <input type="hidden" class="form-control" name="username" value="<?php echo $username;?>">
                  <input type="hidden" class="form-control" name="userlogin" value="<?php echo $userlogin;?>">
              </td>
            </tr>
            <tr>
              <td>
                Isi Obrolan
              </td>
              <td>
                  <textarea class="form-control" name="chat"></textarea>
              </td>
            </tr>
          </table><br>
          <button type="submit" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Kirim</button>
        </form>
        <?php } ?>
      <?php
        }else{
      ?>
      <center>
        <h3><b>SEND CHAT BY WHATSAPP</b></h3>
      </center><br><br>
        <form method="post" action="dowhatsapp.php" enctype="multipart/form-data" >
          <table class="table table-bordered">
            <tr>
              <td>
                To :
              </td>
              <td>
                  <select class="form-control" name="to">
                    <option value="">--SILAHKAN PILIH--</option>
                    <?php
                      $querykodekantor = mysqli_query($conn,"SELECT username,fullname from user where idkantor='$kodekantor' and chatf='vco'");
                      while ($datato = mysqli_fetch_array($querykodekantor,MYSQLI_ASSOC)) {
                    ?>
                      <option value="<?php echo $datato['username'];?>"><?php echo $datato['username'];?> - <?php echo $datato['fullname'];?></option>
                    <?php
                      }
                    ?>
                  </select>
              </td>
            </tr>
            <tr>
              <td>
                No. Telepon WhatsApp
              </td>
              <td>
                  <input type="text" class="form-control" name="no_wa" >
                  <input type="hidden" class="form-control" name="iddebitur" value="<?php echo $iddebitur;?>">
                  <input type="hidden" class="form-control" name="username" value="<?php echo $username;?>">
              </td>
            </tr>
            <tr>
              <td>
                Isi Obrolan
              </td>
              <td>
                  <textarea class="form-control" name="chat"></textarea>
              </td>
            </tr>
          </table><br>
          <button type="submit" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Kirim</button>
        </form>
      <?php } ?>
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