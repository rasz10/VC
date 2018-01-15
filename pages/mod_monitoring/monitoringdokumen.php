<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h3>Monitoring Dokumen</h3>
            </header>
            <div class="panel-body">
              <div class="row">
                <form role="form" id="caridokumen">
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail2">No. KTP Calon Debitur</label>
                        <input type="hidden" name="username" value="<?php echo $username;?>">
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukkan No. KTP" name="no_ktp">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword2">Nama Calon Debitur (Sesuai KTP)</label>
                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Masukkan Nama Calon Debitur" name="nama_ktp">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <br>
                      <button type="submit" class="btn btn-success searchdokumen">Search</button>
                    </div>
                  </div>
                </form>

              </div>
              <br>
              <br>
              <center>
                <img src="../img/loading.gif" class="loading" style="width: 150px;">
              </center><br/><br/><br>
              <div id="resultcaridokumen"></div>
            </div>
        </section>

    </div>

</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".loading").hide();
     $("#caridokumen").submit(function(e){
    $(".loading").show();
    e.preventDefault();
     dataString = $("#caridokumen").serialize();
        $.ajax({
        type: "POST",
        url: "mod_monitoring/domonitoringdokumen.php",
        data: dataString,
         success: function(e){
     $("#resultcaridokumen").html(e);
     $(".loading").fadeOut('slow');
    }   
        });         
    });
 });
</script>