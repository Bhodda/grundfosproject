
//disables the enter key so the form is not submitted before the last page.
$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});


// Submitting information from input fields and inseting them into database
$("#submit_form").click(function(exe) {
    exe.preventDefault();

    var info = $("#msform").serialize();
    $.ajax({
        type: "POST",
        url: "includes/saveClientInfo.php",
        data: info,
        cache: false,
        success: function(info) {
            $("#successmessage").addClass("displaysuccess");
            setTimeout(function () {
                $("#successmessage").removeClass("displaysuccess");
            }, 10000);
        },
    });
    return false;
});




$("#inputid").keyup(function() { // when users type in the input field
    $.get( "includes/getProductInfo.php?product_nr="+$("#inputid").val(), function( data ) {
        // ajax call with the typed in data as GET
        console.log(data);
        if(data == false) { // no pump found with that product_nr
            console.log("No pump with this ID in the database");
        } else { // matching pump found and fills out the form with the data from the database
            console.log("Pump with matching ID found in database");
            $(".productimg").attr('src', "img/pumpimg/"+data.image);
            $("#inputname").val(data.type); 
            $("#inputpressure").val(data.pressure);
            $("#inputwater").val(data.water_level);
            $("#inputflow").val(data.flow);
            $("#inputpower").val(data.power);
            $("#inputage").val(data.age);
        }
    });
});