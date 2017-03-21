$(function() {
    setTimeout(function() {
        $(".guidewrapper").addClass("display");
    }, 400);
});

$(document).ready(function(){

    //hide all on page load.
    $("#inputidimg").hide();
    $("#inputnameimg").hide();
    $("#inputpressureimg").hide();
    $("#inputwaterimg").hide();
    $("#inputflowimg").hide();
    $("#inputpowerimg").hide();



    // id input
    $('#inputid').focusin(function(){
        $("#inputidimg").fadeIn( "fast" );
    });
    $('#inputid').focusout(function(){
        $("#inputidimg").fadeOut( "slow" ); 
    });

    // pump name input
    $('#inputname').focusin(function(){
        $("#inputnameimg").fadeIn( "fast" );
    });

    $('#inputname').focusout(function(){
        $("#inputnameimg").fadeOut( "slow" ); 
    });

    // pressure input
    $('#inputpressure').focusin(function(){
        $("#inputpressureimg").fadeIn( "fast" );
    });

    $('#inputpressure').focusout(function(){
        $("#inputpressureimg").fadeOut( "slow" ); 
    });

    // water level input
    $('#inputwater').focusin(function(){
        $("#inputwaterimg").fadeIn( "fast" );
    });

    $('#inputwater').focusout(function(){
        $("#inputwaterimg").fadeOut( "slow" ); 
    });

    // flow input
    $('#inputflow').focusin(function(){
        $("#inputflowimg").fadeIn( "fast" );
    });

    $('#inputflow').focusout(function(){
        $("#inputflowimg").fadeOut( "slow" ); 
    });

    // power input
    $('#inputpower').focusin(function(){
        $("#inputpowerimg").fadeIn( "fast" );
    });

    $('#inputpower').focusout(function(){
        $("#inputpowerimg").fadeOut( "slow" ); 
    });



});