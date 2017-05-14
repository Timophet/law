
$(document).ready(function(){   

   
	
	var height = $(document).height();
    //console.log(height); 
    
    var card = $('#card');
    var card_container = $('#card-container');
    var bg_window = $('#bg-window');
    //console.log(card);

    $('#navbar-link-login').on('click', function() 
    {
        //alert('click');
        card_container.css('display','block');
        bg_window.css('height',height);
        bg_window.css('display','block');
        if(card.hasClass('flipping'))
            card.removeClass('flipping');    
    });

    $('#navbar-link-signin').on('click', function() 
    {
        //alert('click');
        card_container.css('display','block');
        bg_window.css('height',height);
        bg_window.css('display','block');
        if(!card.hasClass('flipping'))
            card.addClass('flipping');    
    });

    $('#signin-button').on('click', function() 
    {
        card.toggleClass('flipping');    
    });
    
    $('#login-button').on('click', function() 
    {
        card.toggleClass('flipping');    
    }); 

    bg_window.on('click', function() 
    {
        card_container.css('display','none');
        bg_window.css('display','none');

    });   

    var organization_info = $('#organization-info-window');
    $('#link-organization-info').on('click', function() 
    {
        organization_info.css('display','block');
        bg_window.css('display','block');

    }); 
	
	/*
    $('#gsc-i-id1').on('input', function(event)
    {
        $('span')
        if(this.value !== '')
            $('#navbar-clear-search').css('visibility','visible');
        else
            $('#navbar-clear-search').css('visibility','hidden');
                //this.after.innerHTML = "<span>x</span>";
                
               // $('span').text("x"));    
        //alert("sdfsf");
        
        //console.log(this.value);
    })
    $('#navbar-clear-search').on('click', function (event) 
    {
        $('#navbar-search').val('');
        //console.log(event);
    })
    $('#search-form').on('submit', function (event) 
    {
        //$('#navbar-search').val('');
        event.preventDefault();

        console.log(window.__gcse);
    })
	*/
    


});

