
$("#queryForm").on('submit',function(e){
    e.preventDefault();
    
    $("#loading_spinner").show();
    var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token value
    var thisForm = $(this);
    var formData = $(this).serialize();
    var formUrl = $(this).attr('action');
    // console.log(formD-ata);
    $.ajax({
        url: formUrl,
        method: 'POST',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': csrfToken // Add CSRF token to request headers
        },
        
        success: function(response) {
            // console.log(response);
            setTimeout(function() {
                $("#loading_spinner").hide();
                if(response.status == true){
                    Swal.fire({
                        title: "congratulations!!",
                        html: response.message,
                        icon: "success"
                    });
                }
                thisForm.trigger('reset');
            }, 1000); 
           
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
});