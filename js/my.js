$(document).ready(function() {

     // $(".submitInput").click(function(e){
     //       $(".submitInput").prop('disabled', true);  
     //    });

     $("#cariBadanUsaha").submit(function(e){
            
            e.preventDefault();

            var formdata =  new FormData($("#cariBadanUsaha")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/form_badanusaha.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    $("#result").html(e);

                }   
            });    
                $(".submitInput").prop('disabled', true);  
        });

    // $( ".cariBadanUsaha" ).submit( function(){
    //     var pengelola_akun = $(".pengelola_akun").val();
    //     var badanusaha = $(".badanusaha").val();
        
    //     alert(pengelola_akun+badanusaha);
    //     // $( ".badanusaha" ).each(function() {
    //     //   var pengelola_akun = $(".pengelola_akun").val();
    //     //   var badanusaha = $(".badanusaha").val();
    //     //   // alert(pengelola_akun);
    //         // $.ajax({
    //         //     type: "POST",
    //         //     url: "mod_dokumen/form_badanusaha.php",
    //         //     data: { badanusaha : badanusaha , pengelola_akun : pengelola_akun},
    //         //     success: function(e){
    //         //          $("#result").html(e);
    //         //          // $(".loading").fadeOut('slow');
    //         //     }   
    //         // });  
    //     // });
     
    // });
    // displayVals();
    // $(".badanusaha").change(function () {
    //    // username = $(".username").val();
    //     $( ".badanusaha" ).each(function() {
    //       badanusaha = $(this).val();
         
    //       $.ajax({
    //             type: "POST",
    //             url: "mod_dokumen/form_badanusaha.php",
    //             data: { badanusaha : badanusaha},
    //             success: function(e){
    //                  $("#result").html(e);
    //                  // $(".loading").fadeOut('slow');
    //             }   
    //         });    
    //       // $( "#result" ).text( badanusaha ); 
    //     });
    //   });

     $(".simpanuploaddokumen").click(function(e){
            $("#resultdokumen1").show();
            $("#resultdokumen2").show();
            e.preventDefault();
            //dataString = $("#alternatif1").serialize();
            var formdata =  new FormData($("#upload_dok_calon_debitur")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertupload.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                      var hasil = e.split('|');
                      // $(".validasi").html(hasil[0]);

                    if (hasil[0] == "SUKSES") {
                      success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
                      $("#resultdokumen1").html(success);
                    }else{
                      failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
                      $("#resultdokumen1").html(failed);
                    }

                    if (hasil[1] == "SUKSES") {
                      success2="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK (Sudah Ditandatangani) Berhasil Diupload.</div>";
                      $("#resultdokumen2").html(success2);
                    }else{
                      failed2="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK (Sudah Ditandatangani) Gagal Diupload.</div>";
                      $("#resultdokumen2").html(failed2);
                    }
                    
                    //$(".loading").fadeOut('slow');
                }   
            });         
        });

     $(".simpan-penjamin-perseorangan").click(function(e){
            // alert("test");
            e.preventDefault();
            var formdata =  new FormData($("#form-penjamin-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertpenjamin.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultjaminanperseorangan").html(e);
                    var hasil = e.split('|');
                      $("#resultjaminanperseorangan").html(hasil[0]);
                      $(".idpenjamin").val(hasil[1]);
                }   
            });     
            $(".simpan-penjamin-perseorangan").prop('disabled', true);     
        });

     $(".simpanuploaddokumenpenjamin").click(function(e){
            //$(".loading").show();
            e.preventDefault();
            //dataString = $("#alternatif1").serialize();
            var formdata =  new FormData($("#form-upload-penjamin-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertupload.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultjaminanuploadperseorangan").html(e);

                    if (e == "SUKSES") {
                      success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
                      $("#resultjaminanuploadperseorangan").html(success);
                    }else{
                      failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
                      $("#resultjaminanuploadperseorangan").html(failed);
                    }
                    
                }   
            });    
            $(".simpanuploaddokumenpenjamin").prop('disabled', true);     
        });


     // $(".simpan-penjamin-perseorangan-tambah").click(function(e){
     //        // alert("test");
     //        e.preventDefault();
     //        var formdata =  new FormData($("#form-penjamin-perseorangan-tambah")[0]);
     //            $.ajax({
     //            type: "POST",
     //            url: "mod_dokumen/insertpenjamin.php",
     //            data: formdata,
     //            cache: false,
     //            processData: false,
     //            contentType: false,
     //            success: function(e){
     //                $("#resultjaminanperseorangantambah").html(e);
     //            }   
     //        });         
     //    });

     // $(".simpanuploaddokumenpenjamintambah").click(function(e){
     //        //$(".loading").show();
     //        e.preventDefault();
     //        //dataString = $("#alternatif1").serialize();
     //        var formdata =  new FormData($("#form-upload-penjamin-perseorangan-tambah")[0]);
     //            $.ajax({
     //            type: "POST",
     //            url: "mod_dokumen/insertupload.php",
     //            data: formdata,
     //            cache: false,
     //            processData: false,
     //            contentType: false,
     //            success: function(e){
     //                // $("#resultjaminanuploadperseorangan").html(e);

     //                if (e == "SUKSES") {
     //                  success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
     //                  $("#resultjaminanuploadperseorangantambah").html(success);
     //                }else{
     //                  failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
     //                  $("#resultjaminanuploadperseorangantambah").html(failed);
     //                }
                    
     //            }   
     //        });         
     //    });

      $(".simpan-pasangan-perseorangan").click(function(e){
            // alert("test");
            e.preventDefault();
            var formdata =  new FormData($("#form-pasangan-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertpasangan.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultpasanganperseorangan").html(e);
                    var hasil = e.split('|');
                      $("#resultpasanganperseorangan").html(hasil[0]);
                      $(".idpasangan").val(hasil[1]);
                }   
            });    
            $(".simpan-pasangan-perseorangan").prop('disabled', true);       
        });

     $(".simpanuploaddokumenpasangan").click(function(e){
            //$(".loading").show();
            e.preventDefault();
            //dataString = $("#alternatif1").serialize();
            var formdata =  new FormData($(".form-upload-pasangan-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertupload.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultjaminanuploadperseorangan").html(e);

                    if (e == "SUKSES") {
                      success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
                      $("#resultpasanganuploadperseorangan").html(success);
                    }else{
                      failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
                      $("#resultpasanganuploadperseorangan").html(failed);
                    }
                    
                }   
            });        
            $(".simpanuploaddokumenpasangan").prop('disabled', true);        
        });

     $(".simpan-keluarga-perseorangan").click(function(e){
            // alert("test");
            e.preventDefault();
            var formdata =  new FormData($("#form-keluarga-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertkeluarga.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultpasanganperseorangan").html(e);
                    var hasil = e.split('|');
                      $("#resultkeluargaperseorangan").html(hasil[0]);
                      $(".idkeluarga").val(hasil[1]);
                }   
            });    
            $(".simpan-keluarga-perseorangan").prop('disabled', true);       
        });

     $(".simpanuploaddokumenkeluarga").click(function(e){
            //$(".loading").show();
            e.preventDefault();
            //dataString = $("#alternatif1").serialize();
            var formdata =  new FormData($(".form-upload-keluarga-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertupload.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultjaminanuploadperseorangan").html(e);

                    if (e == "SUKSES") {
                      success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
                      $("#resultkeluargauploadperseorangan").html(success);
                    }else{
                      failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
                      $("#resultkeluargauploadperseorangan").html(failed);
                    }
                    
                }   
            });        
            $(".simpanuploaddokumenpasangan").prop('disabled', true);        
        });

     $(".simpan-pasanganpenjamin-perseorangan").click(function(e){
            // alert("test");
            e.preventDefault();
            var formdata =  new FormData($("#form-pasanganpenjamin-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertpasanganpenjamin.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    var hasil = e.split('|');
                      $("#resultpasanganpenjaminperseorangan").html(hasil[0]);
                      $(".idpasanganpenjamin").val(hasil[1]);
                    // $("#resultpasanganpenjaminperseorangan").html(e);
                }   
            });       
            $(".simpan-pasanganpenjamin-perseorangan").prop('disabled', true);  
        });

     $(".simpanuploaddokumenpasanganpenjamin").click(function(e){
            //$(".loading").show();
            e.preventDefault();
            //dataString = $("#alternatif1").serialize();
            var formdata =  new FormData($(".form-upload-pasanganpenjamin-perseorangan")[0]);
                $.ajax({
                type: "POST",
                url: "mod_dokumen/insertupload.php",
                data: formdata,
                cache: false,
                processData: false,
                contentType: false,
                success: function(e){
                    // $("#resultjaminanuploadperseorangan").html(e);

                    if (e == "SUKSES") {
                      success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
                      $("#resultpasanganpenjaminuploadperseorangan").html(success);
                    }else{
                      failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
                      $("#resultpasanganpenjaminuploadperseorangan").html(failed);
                    }
                    
                }   
            });      
            $(".simpanuploaddokumenpasanganpenjamin").prop('disabled', true);   
        });


     // $(".simpan-pasangan-perseorangan-tambah").click(function(e){
     //        // alert("test");
     //        e.preventDefault();
     //        var formdata =  new FormData($("#form-pasangan-perseorangan-tambah")[0]);
     //            $.ajax({
     //            type: "POST",
     //            url: "mod_dokumen/insertpasangan.php",
     //            data: formdata,
     //            cache: false,
     //            processData: false,
     //            contentType: false,
     //            success: function(e){
     //                $("#resultpasanganperseorangantambah").html(e);
     //            }   
     //        });         
     //    });

     // $(".simpanuploaddokumenpasangantambah").click(function(e){
     //        //$(".loading").show();
     //        e.preventDefault();
     //        //dataString = $("#alternatif1").serialize();
     //        var formdata =  new FormData($("#form-upload-pasangan-perseorangan-tambah")[0]);
     //            $.ajax({
     //            type: "POST",
     //            url: "mod_dokumen/insertupload.php",
     //            data: formdata,
     //            cache: false,
     //            processData: false,
     //            contentType: false,
     //            success: function(e){
     //                // $("#resultjaminanuploadperseorangan").html(e);

     //                if (e == "SUKSES") {
     //                  success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
     //                  $("#resultpasanganuploadperseorangantambah").html(success);
     //                }else{
     //                  failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
     //                  $("#resultpasanganuploadperseorangantambah").html(failed);
     //                }
                    
     //            }   
     //        });         
     //    });

     // $(".loading").hide();
     // $(".searchdokumen").submit(function(e){
     //        $(".loading").show();
     //        e.preventDefault();
     //        //dataString = $("#alternatif1").serialize();
     //        var formdata =  new FormData($("#caridokumen")[0]);
     //            $.ajax({
     //            type: "POST",
     //            url: "mod_dokumen/do_caridokumen.php",
     //            data: formdata,
     //            cache: false,
     //            processData: false,
     //            contentType: false,
     //            success: function(e){
     //                $("#resultcaridokumen").html(e);
     //                $(".loading").fadeOut('slow');

     //                // if (e == "SUKSES") {
     //                //   success="<div class='alert alert-success'><i class='fa fa-check'></i> Dokumen Form SLIK Berhasil Diupload.</div>";
     //                //   $("#resultpasanganuploadperseorangantambah").html(success);
     //                // }else{
     //                //   failed="<div class='alert alert-danger'><i class='fa fa-times'></i> Dokumen Form SLIK Gagal Diupload.</div>";
     //                //   $("#resultpasanganuploadperseorangantambah").html(failed);
     //                // }
                    
     //            }   
     //        });         
     //    });

 });
