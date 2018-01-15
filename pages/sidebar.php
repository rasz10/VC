 <aside>
          <div id="sidebar"  class="nav-collapse ">
            <?php
              switch ($tipe) {
                case 'inputpenjamin':
                  # code...
                  break;

                case 'inputpasangan':
                  # code...
                  break;

                case 'inputpasanganpenjamin':
                  # code...
                  break;

                case 'inputkeluarga':
                  # code...
                  break;
                
                default:
            ?>
            <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="home?par=home">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php
                  $typeuser = gettypeuser($conn,$username);
                  // echo $typeuser;
                ?>
                  
                  <?php
                      
                      $ax="select menu from usermenu where usertype='$typeuser' order by no asc";
                      // echo $ax;
                      $sql_menu=mysqli_query($conn,$ax);
                      while ($row_menu = mysqli_fetch_array($sql_menu,MYSQLI_ASSOC)) {
                        
                          $menu = $row_menu['menu'];
                          $datamenu_ = getdatamenu($conn,$menu);
                          $datamenu = explode("|", $datamenu_);

                  ?>

                    <li>
                      <a class="active" href="<?php echo $datamenu[0]?>">
                          <i class="fa <?php echo $datamenu[1]?>"></i>
                          <span><?php echo $row_menu['menu'];?></span>
                      </a>
                      <!-- <a href="<?php echo $datamenu[0]?>"><i class="fa <?php echo $datamenu[1]?> fa-fw"></i> <?php echo $row_menu['menu'];?></a> -->
                    </li>

                    <?php
                      }
                    ?>
                  <li>
                    <a class="active" href="home?par=suratmasuk">
                        <i class="fa fa-envelope"></i>
                        <span>Surat Masuk</span>
                    </a>
                </li>
              </ul>
              <!-- sidebar menu end-->
            <?php
                  break;
              }
            ?>
              
          </div>
      </aside>