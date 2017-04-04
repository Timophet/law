
$(document).ready(function(){
    $("#start-work-button").click(function(){
    	//alert("sdfsdfsdf");
        $("#signin-modal").modal();
    });
    $("#signin-button").click(function(){
    	//alert("sdfsdfsdf");
    	$("#login-modal").modal("hide");
    	
    	$("#signin-modal").modal("show");
       
    });


});