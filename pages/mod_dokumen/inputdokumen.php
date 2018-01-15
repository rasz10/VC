<div class="row">
  <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
              <h3>Input Dokumen SLIK</h3>
          </header>
          <div class="panel-body">
              <form role="form"  id="cariBadanUsaha">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pengelola Akun</label>
                      <select class="form-control pengelola_akun selectpicker" name="pengelola_akun" data-live-search="true" >
                        <option value="">--SILAHKAN PILIH--</option>
                        <option value="Kaper">Kaper</option>
                        <option value="Korporasi">Korporasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Badan Usaha</label>
                      <select class="form-control badanusaha selectpicker" name="badanusaha" data-live-search="true">
                        <option value="">--PILIH JENIS USAHA--</option>
                        <option value="Perusahaan|<?php echo $username;?>">Perusahaan</option>
                        <option value="Perorangan|<?php echo $username;?>">Perorangan</option>
                        <option value="Koperasi|<?php echo $username;?>">Koperasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-success submitInput"><i class="fa fa-play"></i>&nbsp;&nbsp;Submit</button>
                    </div>
                  </div>
                </div>
                <hr style="
                  border : 0;
                  height: 1px; 
                  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); "><br/>
                <div id="result"></div>
                <!-- <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Dokumen</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ketikkan Nama Dokumen">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputFile">Upload File</label>
                      <input type="file" id="exampleInputFile">
                    </div>
                  </div>
                </div> -->
                  <!-- <button type="submit" class="btn btn-info">Submit</button> -->
              </form>

          </div>
      </section>
  </div>
</div>


    
<!-- 
<select data-live-search="true" data-live-search-style="startsWith" class="selectpicker">
        <option value="4444">4444</option>
        <option value="Fedex">Fedex</option>
        <option value="Elite">Elite</option>
        <option value="Interp">Interp</option>
        <option value="Test">Test</option>
    </select> -->