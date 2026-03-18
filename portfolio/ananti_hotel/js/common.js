$(function () {

    $("#menu_open").mouseover(function () {
        $("#navbox").fadeIn();
    });

    $("#menu_close").click(function () {
        $("#navbox").fadeOut();
    });

    $("#submenu_3").mouseover(function () {
        $(".navbox").css("padding-bottom", "128px")
    });

    $("#submenu_3").mouseout(function () {
        $(".navbox").css("padding-bottom", "288px")
    });


});
