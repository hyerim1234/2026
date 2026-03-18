<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>식생활 역량이란 </title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xpressengine/xeicon@2.3.1/xeicon.min.css">


  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/borard1.css">


</head>

<body data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">
  <?php
  // pages/main.php

  // 1) header include (현재 파일 위치 __DIR__ 은 pages/ 폴더를 가리킵니다)
  include __DIR__ . '/../includes/header.php';
  ?>

  <div class=" sub_visual sub1">

    <!-- 콘텐츠 영역 -->


    <div class="page_title">
      <h3 data-aos="fade-in" class="aos-init aos-animate">식생활 역량이란?</h3>

      <ul class="sm_menu">
        <li><a href="/" class=""></a></li>
        <li>식생활 역량이란?</li>
      </ul>

    </div>

    <div class="bg_wrap"></div>

    <a href="javascript:move_scroll_y('#container', 0)">
      <img src="./../images/sub_a.png" alt="">
    </a>
  </div>

  <section id="fix_menu" class="fixed" style="display: none;">
    <div class="fix_wrap" style="display: flex;">
      <i class="home">
        <i class="fa-solid fa-house"></i>
        <a href="/" class="xi-home fa-solid fa-house"></a>
      </i>

      <ul class="menu">
        <li>
          <button type="button" class=""><span>식생활 역량이란?</span></button>
          <div class="next-depth" style="height: 0px;">
            <ul>
              <li class="">
                <a href="" target="_self" class="active">식생활 역량이란?</a>
              </li>
              <li class="">
                <a href="" target="_self" class="active">월간 식생활 역량 강좌</a>
              </li>
              <li class="">
                <a href="" target="_self" class="active">식생활 역량 관련 정보</a>
              </li>
              <li class="">
                <a href="" target="_self" class="active">서울시민 먹거리조사</a>
              </li>
              <li class="">
                <a href="" target="_self" class="active">공지사항</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="progress">
      <span class="bar" style="width: 53.7578%;"></span>
    </div>
  </section>

  <div id="container" class="mb0" style="max-width:100%;">

    <section id="about" class="subpage">
      <article class="sec1">
        <div class="sub_inner">
          <h4 class="fs_55 aos-init aos-animate" data-aos="fade-up" style="color: #333 !important;">식생활 역량<span class="fs_30">(Food Literacy)</span>이란?</h4>
          <div class="text aos-init aos-animate" data-aos="fade-up">
            <p class="fs_18" style="color: #333 !important; font-weight: 400;">
              개인의 생명 유지 및 건강한 생활을 위한 식품 선택과 관리, 조리 능력<b>(건강한 식생활)</b>뿐만 아니라 음식의 문화적 가치를 이해<b>(즐거운 식생활)</b>하고, <br>
              음식이 가진 공동체, 농업, 생태환경의 가치를 고려<b>(가치있는 식생활)</b>하는 먹거리 관련 역량을 말합니다.
            </p>
            <p class="fs_22 bg">
              <b>식생활 능력 향상</b>으로 건강한 식사 실천을 통해 <b>개인의 건강 증진 및 질병을 예방</b>하므로 매우 중요합니다.
            </p>
          </div>
        </div>
      </article>


      <article class="sec2">
        <div class="sub_inner">
          <h5 class="fs_35 tit_bar aos-init aos-animate" data-aos="fade-up">식생활 역량 지표의 영역별 정의</h5>
          <div class="img aos-init aos-animate" data-aos="fade-up">
            <img src="./../images/ab_img1.jpg" alt="">
          </div>
        </div>
      </article>
    </section>



    <?php
    // pages/main.php

    // 1) header include (현재 파일 위치 __DIR__ 은 pages/ 폴더를 가리킵니다)
    include __DIR__ . '/../includes/footer.php';
    ?>

  </div>


</body>


<!-- 외부 라이브러리 JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/9030bfe5b2.js" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    // AOS 초기화
    AOS.init();

    // 슬라이더 초기화
    $('.slider').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  });
</script>

</html>