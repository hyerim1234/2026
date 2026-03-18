<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>
  <link rel="stylesheet" href="./../css/header.css">
  <link rel="stylesheet" href="./../css/common.css">

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>


<body>
  <div id="header_wrap">
    <div id="header" style="min-width: 100%; height:100px;">
      <div class="header-inner">
        <h1 id="logo" data-aos="fade-right" class="aos-init aos-animate">
          <a href="./../pages/main.php" target="_self"></a>
        </h1>

        <nav id="top_nav" data-aos="fade-in" class="aos-init aos-animate">
          <ul class="gnb">
            <li class="lm">
              <a href="./../pages/board1.php" target="_self" class="">식생활 역량이란?</a>
            </li>

            <li class="lm">
              <a href="./../pages/board2.php" target="_self" class="">월간 식생활 역량 강좌</a>
              <div class="dot_stretching"></div>
              <ul class="snb">
                <li class="sm"><a href="./../pages/board2.php" target="_self" class="">운영 영상</a></li>
                <li class="sm"><a href="./../pages/board2_1.php" target="_self" class="">운영 내용</a></li>
              </ul>
            </li>

            <li class="lm">
              <a href="./../pages/board3.php" target="_self" class="">식생활 역량 관련 정보</a>
              <div class="dot_stretching"></div>
              <ul class="snb">
                <li class="sm">
                  <a href="./../pages/board3.php#health" target="_self"  class="">식생활·영양·건강</a>
                </li>

                <li class="sm"><a href="./../pages/board3.php#ingredient" target="_self" class="">식재료</a>
                </li>

                <li class="sm"><a href="./../pages/board3.php#culture" target="_self" class="">식문화</a>
                </li>

                <li class="sm"><a href="./../pages/board3.php#sustainability" target="_self"
                    class="">지속가능한 식생활</a></li>

                <li class="sm"><a href="./../pages/board3.php#recipe" target="_self" class="">건강
                    레시피</a></li>
              </ul>
            </li>

            <li class="lm">
              <a href="./../pages/board4.php" target="_self" class="">서울시민 먹거리조사</a>
              <div class="dot_stretching"></div>
              <ul class="snb">
                <li class="sm"><a href="./../pages/board4.php#research" target="_self" class="">서울시민 먹거리조사란?</a></li>
                <li class="sm"><a href="./../pages/board4.php#result" target="_self" class="">주요결과</a></li>
              </ul>
            </li>

            <li class="lm">
              <a href="./../pages/notice.php" target="_self" class="">공지사항</a>
            </li>

          </ul>
        </nav>

        <div id="hd_right" data-aos="fade-left" class="aos-init aos-animate">
          <div class="menu_slider_btn"></div>
        </div>

      </div>
      <div class="snb_bg"></div>
    </div>
  </div>






  <!-- 4) 여러분이 직접 작성한 main.js -->
<script src="./../js/header.js"></script>
  <!-- ① jQuery (필수) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>

  <!-- ② AOS / slick 등 jQuery에 의존하는 라이브러리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</body>




<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script> -->
<!-- <script src="./../js/main.js"></script> -->

<script>
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

</script>

</script>

</html>