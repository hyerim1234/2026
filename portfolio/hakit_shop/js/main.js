//제이쿼리

//네비 메뉴 호버했을때 서브 메뉴 전체 드롭다운 효과
$(function () {
    var $firstmenu = $('nav>ul>li'),
        $header = $('header');

    $firstmenu.mouseenter(function () {
        $header.stop().animate({ height: '300px' });
    })

        .mouseleave(function () {
            $header.stop().animate({ height: '50px' });
        });

});
