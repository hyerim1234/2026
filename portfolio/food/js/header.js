/* --------------------------------------------------------------------
 *  네비게이션 – 헤더 전체 오버 시 모든 서브메뉴 열기
 * ------------------------------------------------------------------ */
$(function () {
  /* ① AOS / slick 초기화는 기존 그대로 두세요 ---------------------- */

  const $wrap = $('#header_wrap');
  const $subs = $wrap.find('.snb');
  const $links = $wrap.find('.gnb > li > a');
  const $bg = $wrap.find('.snb_bg');
  const anim = 300;

  /* 모든 서브메뉴 닫기 */
  function closeAll() {
    $wrap.removeClass('open');
    $subs.css('max-height', 0);
    $bg.stop(true).animate({ height: 0 }, anim);
    $links.removeClass('active');
  }

  /* 서브메뉴 전부 펼치고 배경 높이 맞추기 */
  function openAll() {
    let maxH = 0;
    $subs.each(function () {
      const h = $(this).prop('scrollHeight');
      $(this).css('max-height', h + 'px');
      if (h > maxH) maxH = h;
    });
    $bg.stop(true).animate({ height: maxH }, anim);
    $wrap.addClass('open');
  }

  /* ────────────────────────────────────────────────────────────── */

  /* 1) 헤더에 진입하면 전체 펼침 */
  $wrap.on('mouseenter focusin', function () {
    openAll();
  });

  /* 2) 헤더에서 완전히 벗어나면 닫기 */
  $wrap.on('mouseleave', function (e) {
    if (!e.relatedTarget || !$.contains(this, e.relatedTarget)) closeAll();
  });

  /* 3) 각 1차 메뉴 롤오버 시 하이라이트 토글 */
  $links.on('mouseenter focusin', function () {
    $links.removeClass('active');
    $(this).addClass('active');
  });

  /* 4) 키보드 탭으로 빠져나갈 때 닫기 */
  $links.last().on('focusout', function () {
    setTimeout(() => {
      if (!$wrap.find(':focus').length) closeAll();
    }, 10);
  });
});


