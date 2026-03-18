// 이미지 변경 - jquery




$(function () {

    let room_bclass;
    let imgUrl;
    $(".sec01_simg").mouseover(
        function () {
            room_bclass = $(this).data("room_bclass");
            imgUrl = $(this).data("img");
            $("." + room_bclass).css("background-image", "url(" + imgUrl + ")");

        }
    );

});

