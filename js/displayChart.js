$("input[type=radio]").on("click", function() {
    var selected_item = $("input:checked").val();
    console.log(selected_item);
    var total = (selected_item / $("#inputpower").val()) * 100;
    console.log(total);

    $("#h2chart-bar-percent").text(Math.round(total) + '%');
    $(".chart-bar-percent").text(Math.round(total) + '%');

    if (total > 100) {
        total = 100;
    } 

    if(total < 33) {
        $("#chartbarcolorchange").css("background", "#6eb556");
        $("#h2chart-bar-percent").css("color", "#6eb556");
    } else if (total >= 33 && total < 66) {
        $("#chartbarcolorchange").css("background", "#d8d82b");
        $("#h2chart-bar-percent").css("color", "#d8d82b");
    } else {
        $("#chartbarcolorchange").css("background", "#ce3f3f");
        $("#h2chart-bar-percent").css("color", "#ce3f3f");
    }

    console.log(total);


    $(".chartbar").attr('data-percent', total + '%');


});

// When you click on a button, it starts chart animation
// Size is calculated based on product number (power value)
// and selected item in 4th step (product compare)
$("#showchart").click(function() {
    $('.chartbar').each(function() {
        $(this).find('.chartbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 6000).delay(8000);
    });
});

