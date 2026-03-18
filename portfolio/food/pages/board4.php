<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>서울 시민 먹거리 조사 </title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xpressengine/xeicon@2.3.1/xeicon.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/board4.css">


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
      <h3 data-aos="fade-in" class="aos-init aos-animate">서울 시민 먹거리 조사</h3>

      <ul class="sm_menu">
        <li><a href="/" class=""></a></li>
        <li>서울 시민 먹거리 조사</li>
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
          <button type="button" class=""><span>식생활 역량이란? </span></button>
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

    <section id="research" class="subpage">
      <article class="sec1">
        <div class="sub_inner" id="re1">
          <h4 class="fs_55 aos-init aos-animate" data-aos="fade-up">서울시민 먹거리조사</h4>
          <div class="bar_wrap aos-init aos-animate" data-aos="fade-up">
            <h5 class="fs_35" style="color: #333 !important;">서울시민 먹거리조사란?</h5>
            <p class="fs_18">
              서울시민의 먹거리에 대한 인식과 관심 등을 측정하고, 서울시만의 유용한 통계지표를 통해 시민의 먹거리 전반에 대한 진단, <br>
              질적 수요 및 관심에 대응하는 등 맞춤 정책 도출 등을 위한 기초데이터 및 근거자료를 마련하기 위해 매년 조사를 수행하고 있습니다.
            </p>
          </div>
        </div>
      </article>



      <article class="sec2" id="result">
        <div class="sub_inner">
          <h4 class="fs_55 aos-init aos-animate" data-aos="fade-up" style="color: #333 !important;">주요결과</h4>
          <div class="dot_wrap">
            <h6 class="fs_23">2024 서울시민 먹거리조사 설계</h6>
            <div class="gr_box">
              <ul class="text_list">
                <li>
                  <span>조사 대상</span>
                  <p class="fs_16">서울시 거주 가구 내 만 18세 이상 모든 가구원</p>
                </li>
                <li>
                  <span>조사 방법</span>
                  <p class="fs_16">가구방문면접조사</p>
                </li>
                <li>
                  <span>표본 크기</span>
                  <p class="fs_16">
                    2,000가구(만 18세 이상 가구원 3,435명) <br class="space">
                  </p>
                </li>
                <li>
                  <span>조사 기간</span>
                  <p class="fs_16">2024년 9월 19일 ~ 10월 25일</p>
                </li>
              </ul>
              <div class="flex_wrap fs_16">
                <p>* 자세한 내용은 해당 링크에서 확인할 수 있습니다.</p>
                <a href="https://fsi.seoul.go.kr/front/M0000076/content/view.do" class="arrow" target="_blank">서울시 식품안전정보 사이트 <i class="xi-external-link"></i> </a>
              </div>
            </div>
          </div>

          <div class="re_nav_wrap">
            <button type="button" class="fs_16 re_btn"></button>
            <ul class="re_nav aos-init" data-aos="fade-up">
              <li><a id="quick_n2" href="javascript:move_scroll_y('#re2', -250)">서울시민의 <br class="space"> 식품 섭취</a></li>
              <li><a id="quick_n3" href="javascript:move_scroll_y('#re3', -250)">서울시민의 <br class="space"> 식생활</a></li>
              <!-- <li><a id="quick_n4" href="javascript:move_scroll_y('#re4', -250)">서울 시민의 <br class="space"> 식사</a></li> -->
              <li><a id="quick_n5" href="javascript:move_scroll_y('#re5', -250)">서울시민의 <br class="space"> 식품 소비</a></li>
              <li><a id="quick_n6" href="javascript:move_scroll_y('#re6', -250)">서울시의 <br class="space"> 식품 안전</a></li>
              <li><a id="quick_n7" href="javascript:move_scroll_y('#re7', -250)">서울시민의 <br class="space"> 식생활 역량과 행복</a></li>
            </ul>
          </div>
          <div class="bar_wrap aos-init" data-aos="fade-up" id="re2">
            <h5 class="fs_35">서울시민의 식품 섭취 <span class="fs_16">※ 이미지 출처: 2024년 서울시민 먹거리조사 기초 분석 보고서</span> </h5>
            <div class="num_wrap">
              <div class="num_tit">
                <span>1</span>
                <h6 class="fs_23">권장 식품의 섭취</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
            <div class="num_wrap">
              <div class="num_tit">
                <span>2</span>
                <h6 class="fs_23">절제가 필요한 식품의 섭취</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
            <div class="num_wrap">
              <div class="num_tit">
                <span>3</span>
                <h6 class="fs_23">1주일 간 아침식사 빈도 (%)</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
            <div class="num_wrap">
              <div class="num_tit">
                <span>4</span>
                <h6 class="fs_23">음주 빈도 (%)</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
            <div class="num_wrap">
              <div class="num_tit">
                <span>5</span>
                <h6 class="fs_23">외식 유형별 음식의 1주일에 한 번 이상 섭취율 (%)</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
          </div>

          <div class="bar_wrap aos-init" data-aos="fade-up" id="re3">
            <h5 class="fs_35">서울시민의 식생활</h5>
            <div class="num_wrap">
              <div class="num_tit">
                <span>1</span>
                <h6 class="fs_23">먹거리안정 수준</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
            <div class="num_wrap">
              <div class="num_tit">
                <span>2</span>
                <h6 class="fs_23">먹거리부족 이유</h6>
              </div>
              <div class="img">
                <img src="./../images/re_1_img1.png" alt="">
              </div>
            </div>
          </div>

          <div class="bar_wrap aos-init" data-aos="fade-up" id="re5">
            <h5 class="fs_35">서울시민의 식품 소비</h5>
            <div class="img">
              <img src="./../images/re_1_img1.png" alt="">
            </div>
          </div>

          <div class="bar_wrap aos-init" data-aos="fade-up" id="re6">
            <h5 class="fs_35">서울시의 식품 안전</h5>
            <div class="img">
              <img src="./../images/re_1_img1.png" alt="">
            </div>
          </div>

          <div class="bar_wrap aos-init" data-aos="fade-up" id="re7">
            <h5 class="fs_35">서울시민의 식생활역량과 행복</h5>
            <div class="img">
              <img src="./../images/re_1_img1.png" alt="">
            </div>
          </div>

        </div>
      </article>
  </div>

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