
$("#inputid").keyup(function() { // when users type in the input field
    $.get( "includes/getProductInfo.php?product_nr="+$("#inputid").val(), function( data ) {
        // ajax call with the typed in data as GET
        console.log(data);
        if(data == false) { // no pump found with that product_nr
            console.log("No pump with this ID in the database");
        } else { // we found a pump!
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