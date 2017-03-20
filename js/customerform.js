$(document).ready(function(){


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


});