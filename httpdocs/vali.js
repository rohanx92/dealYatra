$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
			
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#submit").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var email=$('.email').val();
			var name=$('.fullname').val();
			var phone=$('.phone').val();// For Success/Failure Message
            // Check for white space in name for Success/Fail message
           
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "email="+email+"&name="+name+"&phone="+phone,
                cache: false,
				
                success: function(msg) {
                    // Enable button & show success message
					$("#submit").attr("disabled", false); 
					if (msg == '1'){
						$('#success').html("<div class='alert alert-danger'>");
						$('#success > .alert-danger').append("<strong>Email already registered");} else{
                    
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your activation message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('.signup').trigger("reset");}
                
				},
                error: function() {
					
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " +  ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('.signup').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
    $('#success').html('');
});
// JavaScript Document