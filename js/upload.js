$(document).ready(function() { 
     $('#uploadForm').submit(function(e) {  
        // if($('#userImage').val()) {
            e.preventDefault();
            $('#loader-icon').show();
            $(this).ajaxSubmit({ 
                target:   '#targetLayer', 
                beforeSubmit: function() {
                  $("#progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){ 
                    $("#progress-bar").width(percentComplete + '%');
                    $("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
                },
                success:function (){
                    $('#loader-icon').hide();
                },
                resetForm: true 
            }); 
            return false; 
            // }
        });
}); 

// function previewImage() {
//     document.getElementById("image-preview").style.display = "block";
//     var oFReader = new FileReader();
//      oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

//     oFReader.onload = function(oFREvent) {
//       document.getElementById("image-preview").src = oFREvent.target.result;
//     };
// };