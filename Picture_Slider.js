$(document).ready( function () {
    function image() {
    $("#image1").fadeIn(800).delay(800).fadeOut(300);
        $("#image2").delay(2100).fadeIn(800).delay(800).fadeOut(300);
            $("#image3").delay(4000).fadeIn(800).delay(800).fadeOut(300);
                $("#image4").delay(6000).fadeIn(800).delay(800).fadeOut(300);
                    $("#image5").delay(8000).fadeIn(800).delay(800).fadeOut(300, image);
    }
    image();
});