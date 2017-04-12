

$(document).ready(function(){
    
    console.log("document ready");
    var validation_options = 
    {
        debug: true,
        
        invalidHandler: function (event, validator) {
            
            console.log($('#submit-info-text'));
            $('#submit-info-text').css('visibility', 'hidden'); 
        },
        submitHandler: function(form) {
            

            //alert("sfsdfsdf");
            form.submit();
            //$('#login-form').submit();
        },
    

        messages: {
            email: {
              required: "Пожалуйста, укажите адрес электронной почты",
              email: "Адрес должен быть в формате name@domain.com"
            },
            checkbox_agreement:
            {
                required: "Необходимо принять условия Лицензионного соглашения"
            }
        }
    }; 

    $('#login-form').validate(validation_options);
    $('#signin-form').validate(validation_options);



    
});

        /*
        
        
        
    });

     /*
     $('#enter-login-button').on('click', function()
     {
        var inputText = $('#login-email-input');
        
        //inputText.value = "Sdfsdfsdfsdfsdf";
        console.log(inputText.val());
        alert(inputText.val());

     });

    */


