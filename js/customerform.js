$(document).ready(function(){

    //in and out animations for the user form on page 5.
    $(function() {
        $("#helpbutton").on("click", function(){
            $("#customerform").addClass("display");
            setTimeout(function() {
                $("#customerform").addClass("animation");
            }, 100);
            setTimeout(function() {
                $("#customerform").removeClass("animation");
                $("#customerform").addClass("animationz");
            }, 1200);
        });
    });
    $(function () {
        $("#closeaside").on("click", function() {
            $("#customerform").addClass("animation");
            setTimeout(function() {
                $("#customerform").removeClass("animation");
            }, 1200);
            setTimeout(function () {
                $("#customerform").removeClass("animationz");
            }, 1300);
            setTimeout(function () {
                $("#customerform").removeClass("display");
            }, 2200);
        });
    });

    $(function () {
        $("#submit_form").on("click", function() {
            setTimeout(function () {
                $("#customerform").addClass("animation");
                setTimeout(function() {
                    $("#customerform").removeClass("animation");
                }, 1200);
                setTimeout(function () {
                    $("#customerform").removeClass("animationz");
                }, 1300);
                setTimeout(function () {
                    $("#customerform").removeClass("display");
                }, 2200);
            }, 1200);
        });
    });






    //error handling for filling out the form on the first 2 fieldsets without having to refresh the page. Performance was not the priority...



    //errorhandling for id/number:input
    $("#inputid").on("focusout keyup" ,function() {
        if($("#inputid").val().length >= 15){
            $(".buttondisable").show();
            $(".disable-button").addClass("disabled");
            $("#inputid").css("box-shadow", "0 0 5px rgba(255, 0, 0, 0.8)");
            $("#iderror").fadeIn("fast");
        } 
    });
    $("#inputid").on("focusout keyup" ,function() {
        if($("#inputid").val().length < 15){
            $("#inputid").css("box-shadow", "none");
            $("#iderror").fadeOut("fast");
        } 
    });


    //errorhandling for pumpname:input
    $("#inputname").on("focusout keyup" ,function() {
        if($("#inputname").val().length >= 15){
            $(".buttondisable").show();
            $(".disable-button").addClass("disabled");
            $("#inputname").css("box-shadow", "0 0 5px rgba(255, 0, 0, 0.8)");
            $("#nameerror").fadeIn("fast");
        } 
    });
    $("#inputname").on("focusout keyup" ,function() {
        if($("#inputname").val().length < 15){
            $("#inputname").css("box-shadow", "none");
            $("#nameerror").fadeOut("fast");
        } 
    });


    //errorhandling for pressure:input
    $("#inputpressure").on("focusout keyup" ,function() {
        if ($("#inputpressure").val() < 0 || $("#inputpressure").val() > 100 || !$.isNumeric($("#inputpressure").val())) {
            $(".buttondisable").show();
            $(".disable-button").addClass("disabled");  
            $("#inputpressure").css("box-shadow", "0 0 5px rgba(255, 0, 0, 0.8)");
            $("#pressureerror").fadeIn("fast");
        }
    });
    $("#inputpressure").on("focusout keyup" ,function() {
        if ($.isNumeric($("#inputpressure").val()) && $("#inputpressure").val() >= 0 && $("#inputpressure").val() <= 100){
            $("#inputpressure").css("box-shadow", "none");
            $("#pressureerror").fadeOut("fast");
        }
    });


    //errorhandling for waterlevel:input
    $("#inputwater").on("focusout keyup" ,function() {
        //errorhandling for waterlevel:input
        if ($("#inputwater").val() < 0 || $("#inputwater").val() > 1000 || !$.isNumeric($("#inputwater").val())) {
            $(".buttondisable").show();
            $(".disable-button").addClass("disabled");
            $("#inputwater").css("box-shadow", "0 0 5px rgba(255, 0, 0, 0.8)");
            $("#watererror").fadeIn("fast");
        }
    });
    $("#inputwater").on("focusout keyup" ,function() {
        if ($.isNumeric($("#inputwater").val()) && $("#inputwater").val() >= 0 && $("#inputwater").val() < 1000 ){
            $("#inputwater").css("box-shadow", "none");
            $("#watererror").fadeOut("fast");
        }
    });



    //errorhandling for flow:input
    $("#inputflow").on("focusout keyup" ,function() {
        if ($("#inputflow").val() <= 0 || $("#inputflow").val() > 10000 || !$.isNumeric($("#inputflow").val())) {
            $(".buttondisable").show();
            $(".disable-button").addClass("disabled");
            $("#inputflow").css("box-shadow", "0 0 5px rgba(255, 0, 0, 0.8)");
            $("#flowerror").fadeIn("fast");
        } 
    });

    $("#inputflow").on("focusout keyup" ,function() {
        if ($.isNumeric($("#inputflow").val()) && $("#inputflow").val() >= 0 && $("#inputflow").val() <= 10000){
            $("#inputflow").css("box-shadow", "none");
            $("#flowerror").fadeOut("fast");
        } 
    });

    //errorhandling for power:input

    $("#inputpower").on("focusout keyup" ,function() {
        if ($("#inputpower").val() <= 0 || $("#inputpower").val() > 1000 || !$.isNumeric($("#inputpower").val())) {
            $(".buttondisable").show();
            $(".disable-button").addClass("disabled");
            $("#inputpower").css("box-shadow", "0 0 5px rgba(255, 0, 0, 0.8)");
            $("#powererror").fadeIn("fast");
        } 
    });

    $("#inputpower").on("focusout keyup" ,function() {
        if ($.isNumeric($("#inputpower").val()) && $("#inputpower").val() >= 0 && $("#inputpower").val() <= 1000){
            $("#inputpower").css("box-shadow", "none");
            $("#powererror").fadeOut("fast");
        } 
    });



    //Allows the user to move forward after all the conditions have been met without checking through a post method.
    $(":input").on("focusout keyup" ,function() {
        if ($("#inputid").val().length < 15 && $("#inputname").val().length < 15 && $.isNumeric($("#inputpressure").val()) && $("#inputpressure").val() >= 0 && $("#inputpressure").val() <= 100 && $.isNumeric($("#inputwater").val()) && $("#inputwater").val() >= 0 && $("#inputwater").val() < 1000 && $.isNumeric($("#inputflow").val()) && $("#inputflow").val() >= 0 && $("#inputflow").val() <= 10000 && $.isNumeric($("#inputpower").val()) && $("#inputpower").val() >= 0 && $("#inputpower").val() <= 1000){
            $(".buttondisable").hide();
            $(".disable-button").removeClass("disabled");
            $("#inputpower").css("box-shadow", "none");
        } 
    });


    //Removes an issue where the error messages would not be deleted when you went back to first page and fetched a new pump from the database. 
    //if its stupid and it works its not stupid. 
    $("#inputid").on("focusout" ,function() {
        if ($("#inputid").val().length < 15 && $("#inputname").val().length < 15 && $.isNumeric($("#inputpressure").val()) && $("#inputpressure").val() >= 0 && $("#inputpressure").val() <= 100 && $.isNumeric($("#inputwater").val()) && $("#inputwater").val() >= 0 && $("#inputwater").val() < 1000 && $.isNumeric($("#inputflow").val()) && $("#inputflow").val() >= 0 && $("#inputflow").val() <= 10000 && $.isNumeric($("#inputpower").val()) && $("#inputpower").val() >= 0 && $("#inputpower").val() <= 1000) {
            $("#inputid").css("box-shadow", "none");
            $("#iderror").fadeOut("fast");
            $("#inputname").css("box-shadow", "none");
            $("#nameerror").fadeOut("fast");
            $("#inputpressure").css("box-shadow", "none");
            $("#pressureerror").fadeOut("fast");  
            $("#inputwater").css("box-shadow", "none");
            $("#watererror").fadeOut("fast");
            $("#inputflow").css("box-shadow", "none");
            $("#flowerror").fadeOut("fast");
            $("#inputpower").css("box-shadow", "none");
            $("#powererror").fadeOut("fast");
        } 
    });
});



