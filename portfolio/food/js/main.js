
$(function () {
  // AOS 초기화
  AOS.init({ once: true });

  // 각 탭별로 슬릭 초기화
  $('.c2_tab').each(function () {
    var $tab = $(this);
    $tab.find('.c2_list').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: false,
      prevArrow: $tab.find('.slick-prev'),
      nextArrow: $tab.find('.slick-next'),
      dots: true,
      appendDots: $tab.find('.slick-dots'),
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 3 } },
        { breakpoint: 768, settings: { slidesToShow: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1 } }
      ]
    });
  });

  // 탭 전환 & 슬릭 재계산
  $('.tab_list button').on('click', function () {
    var $btn    = $(this);
    var target  = $btn.data('target');  // ex) ".c2_tab3"
    // 버튼 active 클래스 토글
    $btn.addClass('active')
        .closest('ul').find('button').not($btn).removeClass('active');
    // 패널 전환
    $('.c2_tab').removeClass('active');
    var $panel = $(target).addClass('active');
    // 슬릭 위치 재계산
    $panel.find('.c2_list').slick('setPosition');
  });
});
