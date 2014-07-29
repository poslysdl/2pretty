var Login = function () {

	


	var handleRegister = function () {

		



         $('.reg-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                
	                fullname: {
	                    required: true
	                },
	                email: {
	                    required: true,
	                    email: true
	                },
	               

	               
	            },

	           

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
	                    error.insertAfter($('#register_tnc_error'));
	                } else if (element.closest('.input-icon').size() === 1) {
	                    error.insertAfter(element.closest('.input-icon'));
	                } else {
	                	error.insertAfter(element);
	                }
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

			$('.reg-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.reg-form').validate().form()) {
	                    $('.reg-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#register-btn').click(function () {
	            jQuery('.reg-form').hide();
	            jQuery('.succes-form').show();
	        });

	        
	}
    
    return {
        //main function to initiate the module
        init: function () {
        	
           
            handleRegister();        
	       
	       	$.backstretch([
		        "assets/img/bg/1.jpg",
		        "assets/img/bg/2.jpg",
		        "assets/img/bg/3.jpg"
		       
		        ], {
		          fade: 1000,
		          duration: 6000
		    });
        }

    };

}();