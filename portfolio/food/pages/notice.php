<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>공지사항 </title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xpressengine/xeicon@2.3.1/xeicon.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/notice.css">


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
      <h3 data-aos="fade-in" class="aos-init aos-animate">공지사항</h3>

      <ul class="sm_menu">
        <li><a href="/" class=""></a></li>
        <li>공지사항</li>
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

    <section id="about" class="subpage">
      <article class="sec1 text">
        <div class="sub_inner">
          <h4 class="fs_55 aos-init aos-animate text-center" data-aos="fade-up" style="color: #333 !important;">
            공지사항
          </h4>
        </div>
      </article>

      <!-- card list -->
      <article class="sec2" id="container" style="max-width: 1400px;">
        <section id="notice-list" class="subpage sec2">
          <div class="sub_inner">
            <!-- 전체 게시물 수 & 페이지 -->
            <div class="list-info">
              <span>Total <strong>0건</strong> 1 페이지</span>
            </div>

            <!-- 공지사항 테이블 -->
            <table class="notice-table">
              <thead>
                <tr>
                  <th scope="col">번호</th>
                  <th scope="col">제목</th>
                  <th scope="col">글쓴이</th>
                  <th scope="col">조회</th>
                  <th scope="col">날짜</th>
                </tr>
              </thead>
              <tbody>
                <tr class="no-data">
                  <td colspan="5">게시물이 없습니다.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>


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