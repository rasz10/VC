<?php
    include "config/koneksi.php";
    include "config/fungsi.php";
?>

<?php
    session_start();
  $username = $_SESSION['username'];

  $fullname = getnama($conn,$username);
  $getwilayah = getwilayah($conn,$username);
  
  
    if(!isset($_SESSION['login'])) {
        header ("Location:../");
    }
    else {
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="../assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/data-tables/DT_bootstrap.css" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <?php
        $tipe = $_GET['par'];
        include "header.php";
      ?>
      <!--header end-->
      <!--sidebar start-->
      <?php
        include "sidebar.php";
      ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <?php
            
            $typeuser = gettypeuser($conn,$username);
              switch ($tipe) {
                case 'home':
                  include "mod_home/home.php";

                  break;

                case 'lihatdataslik':
                  include "mod_slik/lihatdataslik.php";

                  break;

                case 'validasidokumen':
                  include "mod_dokumen/validasidokumen.php";

                  break;

                case 'inputdokumen':
                  include "mod_dokumen/inputdokumen.php";

                  break;

                 case 'lihatdokumen':
                  include "mod_dokumen/lihatdokumen.php";

                  break;

                case 'monitoringdokumen':
                  include "mod_monitoring/monitoringdokumen.php";

                  break;

                case 'antriandokumen':
                  include "mod_dokumen/antriandokumen.php";

                  break;

                case 'editdataslik':
                  include "mod_dokumen/editdataslik.php";

                  break;

                case 'lihathasilslik':
                  include "mod_slik/lihathasilslik.php";

                  break;

                case 'inputpenjamin':
                  include "mod_dokumen/inputpenjamin.php";

                  break;

                case 'inputpasangan':
                  include "mod_dokumen/inputpasangan.php";

                  break;

                case 'inputpasanganpenjamin':
                  include "mod_dokumen/inputpasanganpenjamin.php";

                  break;

                case 'inputkeluarga':
                  include "mod_dokumen/inputkeluarga.php";

                  break;

                case 'suratmasuk':
                  include "mod_sekretariat/suratmasuk.php";

                  break;


                case 'lihatdata':
                  $tipe2 = $_GET['par2'];
                  // $tipe3 = $_GET['par3'];
                  
                  switch ($tipe2) {
                    case 'pembiayaan':
                        $typeuser = gettypeuser($conn,$username);
                        switch ($typeuser) {
                          case 'kakaper':
                              include "mod_kaper_kakaper/lihatdatapembiayaan.php";
                            break;

                          case 'vco':
                              include "mod_kaper_vco/lihatdatapembiayaan.php";
                            break;

                          case 'vco_korporasi':
                              include "mod_kapus_vco_korporasi/lihatdatapembiayaan.php";
                            break;

                          case 'kabag_bisnis':
                              include "mod_kapus_kabag_korporasi/lihatdatapembiayaan.php";
                            break;

                          case 'adk':
                              include "mod_kapus_adk/lihatdatapembiayaan.php";
                            break;

                          case 'reviewer':
                              include "mod_kapus_reviewer/lihatdatapembiayaan.php";
                            break;

                          case 'kadiv_legal':
                              include "mod_kapus_kdolegal/lihatdatapembiayaan.php";
                            break;

                          case 'kadiv_keu':
                              include "mod_kapus_kdokeu/lihatdatapembiayaan.php";
                            break;

                          case 'legal_kaper':
                              include "mod_kaper_legal/lihatdatapembiayaan.php";
                            break;

                          case 'kadiv_kdo':
                              include "mod_kapus_kdokadiv/lihatdatapembiayaan.php";
                            break;

                          case 'kadiv_bisnis':
                              include "mod_kapus_kabis/lihatdatapembiayaan.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                      break;

                    case 'proposal':
                      $typeuser = gettypeuser($conn,$username);
                        switch ($typeuser) {
                          case 'kakaper':
                              include "mod_kaper_kakaper/lihatdataproposal.php";
                            break;

                          case 'vco':
                              include "mod_kaper_vco/lihatdataproposal.php";
                            break;

                          case 'vco_korporasi':
                              include "mod_kapus_vco_korporasi/lihatdataproposal.php";
                            break;

                          case 'kabag_bisnis':
                              include "mod_kapus_kabag_korporasi/lihatdataproposal.php";
                            break;

                          case 'adk':
                              include "mod_kapus_adk/lihatdataproposal.php";
                            break;

                          case 'reviewer':
                              include "mod_kapus_reviewer/lihatdataproposal.php";
                            break;

                          case 'kadiv_legal':
                              include "mod_kapus_kdolegal/lihatdataproposal.php";
                            break;

                          case 'kadiv_keu':
                              include "mod_kapus_kdokeu/lihatdataproposal.php";
                            break;

                          case 'legal_kaper':
                              include "mod_kaper_legal/lihatdataproposal.php";
                            break;

                          case 'kadiv_kdo':
                              include "mod_kapus_kdokadiv/lihatdataproposal.php";
                            break;

                          case 'kadiv_bisnis':
                              include "mod_kapus_kabis/lihatdataproposal.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                      break;

                    case 'pencairan':
                      $typeuser = gettypeuser($conn,$username);
                        switch ($typeuser) {
                          case 'kakaper':
                              include "mod_kaper_kakaper/lihatdatapencairan.php";
                            break;

                          case 'vco':
                              include "mod_kaper_vco/lihatdatapencairan.php";
                            break;

                          case 'vco_korporasi':
                              include "mod_kapus_vco_korporasi/lihatdatapencairan.php";
                            break;

                          case 'kabag_bisnis':
                              include "mod_kapus_kabag_korporasi/lihatdatapencairan.php";
                            break;

                          case 'adk':
                              include "mod_kapus_adk/lihatdatapencairan.php";
                            break;

                          case 'reviewer':
                              include "mod_kapus_reviewer/lihatdatapencairan.php";
                            break;

                          case 'kadiv_legal':
                              include "mod_kapus_kdolegal/lihatdatapencairan.php";
                            break;

                          case 'kadiv_keu':
                              include "mod_kapus_kdokeu/lihatdatapencairan.php";
                            break;

                          case 'legal_kaper':
                              include "mod_kaper_legal/lihatdatapencairan.php";
                            break;

                          case 'kadiv_kdo':
                              include "mod_kapus_kdokadiv/lihatdatapencairan.php";
                            break;

                          case 'kabag_legal':
                              include "mod_kapus_kdolegal/lihatdatapencairan.php";
                            break;

                          case 'kabag_keu':
                              include "mod_kapus_kdokeu/lihatdatapencairan.php";
                            break;

                          case 'kadiv_bisnis':
                              include "mod_kapus_kabis/lihatdatapencairan.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                      break;
                    
                    default:
                      # code...
                      break;
                  }

                  break;

                case 'lihathasil':
                  $tipe2 = $_GET['par2'];
                  // $tipe3 = $_GET['par3'];
                  
                  switch ($tipe2) {
                    case 'pembiayaan':
                        $typeuser = gettypeuser($conn,$username);
                        switch ($typeuser) {
                          case 'kakaper':
                              include "mod_kaper_kakaper/dolihatdatapembiayaan.php";
                            break;

                          case 'vco':
                              include "mod_kaper_vco/dolihatdatapembiayaan.php";
                            break;

                          case 'vco_korporasi':
                              include "mod_kapus_vco_korporasi/dolihatdatapembiayaan.php";
                            break;

                          case 'adk':
                              include "mod_kapus_adk/dolihatdatapembiayaan.php";
                            break;

                          case 'reviewer':
                              include "mod_kapus_reviewer/dolihatdatapembiayaan.php";
                            break;

                          case 'kadiv_legal':
                              include "mod_kapus_kdolegal/dolihatdatapembiayaan.php";
                            break;

                          case 'kadiv_keu':
                              include "mod_kapus_kdokeu/dolihatdatapembiayaan.php";
                            break;

                          case 'legal_kaper':
                              include "mod_kaper_legal/dolihatdatapembiayaan.php";
                            break;

                          case 'kadiv_kdo':
                              include "mod_kapus_kdokadiv/dolihatdatapembiayaan.php";
                            break;

                          case 'kadiv_bisnis':
                              include "mod_kapus_kabis/dolihatdatapembiayaan.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                      break;

                    case 'proposal':
                      $typeuser = gettypeuser($conn,$username);
                        switch ($typeuser) {
                          case 'kakaper':
                              include "mod_kaper_kakaper/dolihatdataproposal.php";
                            break;

                          case 'vco':
                              include "mod_kaper_vco/dolihatdataproposal.php";
                            break;

                          case 'vco_korporasi':
                              include "mod_kapus_vco_korporasi/dolihatdataproposal.php";
                            break;

                          case 'adk':
                              include "mod_kapus_adk/dolihatdataproposal.php";
                            break;

                          case 'reviewer':
                              include "mod_kapus_reviewer/dolihatdataproposal.php";
                            break;

                          case 'kadiv_legal':
                              include "mod_kapus_kdolegal/dolihatdataproposal.php";
                            break;

                          case 'kadiv_keu':
                              include "mod_kapus_kdokeu/dolihatdataproposal.php";
                            break;

                          case 'legal_kaper':
                              include "mod_kaper_legal/dolihatdataproposal.php";
                            break;

                          case 'kadiv_kdo':
                              include "mod_kapus_kdokadiv/dolihatdataproposal.php";
                            break;

                          case 'kadiv_bisnis':
                              include "mod_kapus_kabis/dolihatdataproposal.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                      break;

                    case 'pencairan':
                      $typeuser = gettypeuser($conn,$username);
                        switch ($typeuser) {
                          case 'kakaper':
                              include "mod_kaper_kakaper/dolihatdatapencairan.php";
                            break;

                          case 'vco':
                              include "mod_kaper_vco/dolihatdatapencairan.php";
                            break;

                          case 'vco_korporasi':
                              include "mod_kapus_vco_korporasi/dolihatdatapencairan.php";
                            break;

                          case 'adk':
                              include "mod_kapus_adk/dolihatdatapencairan.php";
                            break;

                          case 'reviewer':
                              include "mod_kapus_reviewer/dolihatdatapencairan.php";
                            break;

                          case 'kadiv_legal':
                              include "mod_kapus_kdolegal/dolihatdatapencairan.php";
                            break;

                          case 'kadiv_keu':
                              include "mod_kapus_kdokeu/dolihatdatapencairan.php";
                            break;

                          case 'legal_kaper':
                              include "mod_kaper_legal/dolihatdatapencairan.php";
                            break;

                          case 'kadiv_kdo':
                              include "mod_kapus_kdokadiv/dolihatdatapencairan.php";
                            break;

                          case 'kadiv_bisnis':
                              include "mod_kapus_kabis/dolihatdatapencairan.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                      break;
                    
                    default:
                      # code...
                      break;
                  }

                  break;

                default:
                  # code...
                  break;
              }
          ?>
        </section>
      </section>
      <!-- switch ($tipe3) {
                          case 'pembiayaan':
                            include "mod_kaper_legal/lihatdatapembiayaan.php";
                            break;

                          case 'proposal':
                            include "mod_kaper_legal/lihatdataproposal.php";
                            break;

                          case 'pencairan':
                            include "mod_kaper_legal/lihatdatapencairan.php";
                            break;
                          
                          default:
                            # code...
                            break;
                        } -->
      <!--main content end-->
      <!--footer start-->
      <?php
        include "footer.php";
      ?>
      <!--footer end-->
  </section>

    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/my.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script class="include" type="text/javascript" src="../js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../assets/data-tables/DT_bootstrap.js"></script>
    <script src="../js/respond.min.js" ></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/bootstrap-select.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap-select.js"></script>
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


<?php
    }
?>
