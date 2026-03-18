<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>서울특별시 식생활종합센터 클론코딩</title>

  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/main.css">


  <!-- 외부 라이브러리 CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
</head>


<body>
  <div class="wrap">
    <?php
    // pages/main.php

    // 1) header include (현재 파일 위치 __DIR__ 은 pages/ 폴더를 가리킵니다)
    include __DIR__ . '/../includes/header.php';
    ?>

    <!-- start contents  -->
    <div id="container" class="container !mb-0" style="max-width: 100%;">

      <!-- start slide -->
      <div id="main_vis" class="overflow-hidden">
        <div id="main_vis_slider" class="slick-initialized slick-slider slick-dotted overflow-hidden">
          <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 4356px;">
              <div class="overflow-hidden main_slide img01 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"></div>
              <div class="overflow-hidden main_slide img02 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style=" position: relative; left: -1452px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms;"></div>
              <div class="overflow-hidden main_slide img03 slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style=" position: relative; left: -2904px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms;"></div>
            </div>
          </div>


        </div>

        <div class="main_typo">
          <h5>Food Literacy</h5>
          <h2>식생활 역량이란?</h2>
          <div class="text">
            <p>
              개인의 생명 유지 및 건강한 생활을 위한 식품 선택과 관리, 조리할 수 있는 <br>
              능력 뿐만 아니라 음식의 문화적 가치를 이해하고, 음식이 가진 공동체, 농업, <br>
              생태환경의 가치를 고려하는 먹거리 관련 역량을 말합니다.
            </p>
            <p>
              식생활 능력 향상으로 건강한 식사 실천을 통해 <br>
              개인의 건강 증진 및 질병을 예방하므로 매우 중요합니다.
            </p>
          </div>
        </div>


        <div class="controller">
          <div class="dots">
            <ul class="slick-dots" role="tablist" style="display: flex;">
              <li class="slick-active" role="presentation">
                <button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button>
              </li>

              <li role="presentation" class="">
                <button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button>
              </li>

              <li role="presentation" class="">
                <button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button>
              </li>
            </ul>
          </div>

          <div class="arrows">
            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
          </div>

          <div id="play_btn">
            <a class="play">
              <img src="./../images/m_play.png" alt="">
            </a>

            <a class="pause">
              <img src="./../images/m_pause.png" alt="">
            </a>
          </div>
        </div>
      </div>



      <!-- start  section 01 -->
      <section id="c1_wrap">
        <div class="c1_inner">
          <div class="left">
            <div class="top aos-init aos-animate" data-aos="fade-up">
              <h3 class="fs_55" style="color: #333 !important;">월간 <br>식생활 역량 강좌</h3>
              <ul class="tab_list fs_18">
                <li><a data-tab-area=".c1_tab" data-target=".c1_tab1" class="active">운영 영상</a></li>
                <li><a data-tab-area=".c1_tab" data-target=".c1_tab2">운영 내용</a></li>
              </ul>
            </div>
          </div>

          <!-- tab -->
          <div class="c1_tab c1_tab1 active">
            <ul class="c1_list slick-initialized slick-slider aos-init aos-animate" data-aos="fade-left">
              <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 20000px; transform: translate3d(0px, 0px, 0px);">
                  <li class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0">
                    <a href="#" tabindex="0">
                      <div class="img">
                        <img src="./../images/card1.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 영상</span>
                        <h4 class="fs_20">2025년 6월 강좌</h4>
                        <p class="fs_16">- 일정: 2025. 6. 18.(수) 저녁 7시~8시 30분- 주제:&nbsp;우리는 왜 '혈당 스파이크'에 관심을 가질까?…</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2025-06-19
                          </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            60
                          </span>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1">
                    <a href="#" tabindex="-1">
                      <div class="img">
                        <img src="./../images/card2.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 영상</span>
                        <h4 class="fs_20">2024년 12월 강좌</h4>
                        <p class="fs_16">- 일정: 2024. 12. 18.(수) 저녁 7시~8시 30분- 주제:&nbsp;식탁을 가볍게 초록색으로 바꾸다, '채소 지…</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2024-12-31 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            236 </span>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1">
                    <a href="#" tabindex="-1">
                      <div class="img">
                        <img src="./../images/card3.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 영상</span>
                        <h4 class="fs_20">2024년 9월 강좌</h4>
                        <p class="fs_16">- 일정: 2024. 09. 25.(수) 저녁 7시~8시 30분- 주제:&nbsp;먹방, 식욕, 폭식... '식습관'에 '뇌'…</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2024-12-02 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            237 </span>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1">
                    <a href="#" tabindex="-1">
                      <div class="img">
                        <img src="./../images/card3.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 영상</span>
                        <h4 class="fs_20">2024년 7월 강좌</h4>
                        <p class="fs_16">- 일정: 2024. 07. 31.(수) 저녁 7시~8시 30분- 주제:&nbsp;프랑스는 어떻게 미식의 고장이 되었나, ‘미…</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2024-12-02 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            220 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>
            </ul>

            <div class="bot aos-init" data-aos="fade-in">
              <div class="progress_bar">
                <span style="width: 25%;"></span>
              </div>
              <div class="arrows">
                <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: block;">Previous</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button" aria-disabled="false" style="display: block;">Next</button>
              </div>
            </div>
          </div>


          <div class="c1_tab c1_tab2">
            <ul class="c1_list slick-initialized slick-slider">
              <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 20000px; transform: translate3d(0px, 0px, 0px);">
                  <li class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0">
                    <a href="#" tabindex="0">
                      <div class="img">
                        <img src="./../images/card4.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 내용</span>
                        <h4 class="fs_20">2025년 7월 오프라인 강좌 운영 내용</h4>
                        <p class="fs_16">2025년 7월 오프라인 강좌 운영 내용입니다.</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2025-07-11 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            20 </span>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1">
                    <a href="#" tabindex="-1">
                      <div class="img">
                        <img src="./../images/card2.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 내용</span>
                        <h4 class="fs_20">2025년 하반기 강좌 운영 내용</h4>
                        <p class="fs_16">2025년 7~12월 운영 내용입니다.</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2025-06-26 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            45 </span>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1">
                    <a href="#" tabindex="-1">
                      <div class="img">
                        <img src="./../images/card4.jpg" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 내용</span>
                        <h4 class="fs_20">2025년 상반기 강좌 운영 내용</h4>
                        <p class="fs_16">2025년 6월 강좌 운영 내용입니다.</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2025-04-15 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            143 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1">
                    <a href="#" tabindex="-1">
                      <div class="img">
                        <img src="" title="">
                      </div>
                      <div class="text">
                        <span class="tit">운영 내용</span>
                        <h4 class="fs_20">2024년 하반기 강좌 운영 내용</h4>
                        <p class="fs_16">2024년 7월~12월 강좌 운영 내용입니다.</p>
                        <div class="span_wrap">
                          <span class="date">
                            <i class="xi-calendar"></i>
                            2024-12-02 </span>
                          <span class="date">
                            <i class="xi-eye-o"></i>
                            219 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>
            </ul>

            <div class="bot">
              <div class="progress_bar">
                <span style="width: 25%;"></span>
              </div>
              <div class="arrows">
                <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: block;">Previous</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button" aria-disabled="false" style="display: block;">Next</button>
              </div>
            </div>
          </div>
        </div>
        <div class="deco deco1">
          <img src="./../images/c1_cir1.png" alt="">
        </div>

      </section>


      <!-- start section 02 -->

      <section id="c2_wrap">
        <div class="c2_inner">
          <!-- 제목 + 탭 버튼 -->
          <div class="top" data-aos="fade-up">
            <h3>식생활 역량 관련 정보</h3>
            <div class="c2_tabwrap">
              <ul class="tab_list">
                <li><button class="active" data-target=".c2_tab1">전체</button></li>
                <li><button data-target=".c2_tab2">식생활·영양·건강</button></li>
                <li><button data-target=".c2_tab3">식재료</button></li>
                <li><button data-target=".c2_tab4">식문화</button></li>
                <li><button data-target=".c2_tab5">지속가능한 식생활</button></li>
                <li><button data-target=".c2_tab6">건강 레시피</button></li>
              </ul>
            </div>
          </div>

          <!-- 탭 콘텐츠들 -->
          <!-- 탭1: 전체 -->
          <div class="c2_tab c2_tab1 active">
            <div class="arrows">
              <button class="slick-prev" aria-label="Previous">‹</button>
              <button class="slick-next" aria-label="Next">›</button>
            </div>
            <ul class="c2_list" data-aos="fade-up">
              <!-- 반복 항목 -->
              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>


              <!-- … 추가 항목 … -->

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="img"><img src="./../images/thumb1.jpg" alt=""></div>
                  <div class="text">
                    <span class="tit">식생활·영양·건강</span>
                    <h4>찾았다! 별난가게! 안전한 맛을 골르…</h4>
                    <div class="span_wrap">
                      <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                      <span class="date"><i class="xi-eye-o"></i>17</span>
                    </div>
                  </div>
                </a>
              </li>


            </ul>
            <!-- 도트네비 -->
            <div class="dots">
              <ul class="slick-dots"></ul>
            </div>
          </div>

          <!-- 탭2 ~ 탭6: 동일 구조, .c2_list 내부만 바꿔서 사용 -->
          <div class="c2_tab c2_tab2">
            <div class="arrows">
              <button class="slick-prev">‹</button>
              <button class="slick-next">›</button>
            </div>
            <ul class="c2_list"></ul>
            <div class="dots">
              <ul class="slick-dots"></ul>
            </div>
          </div>
          <div class="c2_tab c2_tab3">
            <div class="arrows">
              <button class="slick-prev">‹</button><button class="slick-next">›</button>
            </div>
            <ul class="c2_list"></ul>
            <div class="dots">
              <ul class="slick-dots"></ul>
            </div>
          </div>
          <div class="c2_tab c2_tab4">
            <div class="arrows"><button class="slick-prev">‹</button><button class="slick-next">›</button></div>
            <ul class="c2_list"></ul>
            <div class="dots">
              <ul class="slick-dots"></ul>
            </div>
          </div>
          <div class="c2_tab c2_tab5">
            <div class="arrows"><button class="slick-prev">‹</button><button class="slick-next">›</button></div>
            <ul class="c2_list"></ul>
            <div class="dots">
              <ul class="slick-dots"></ul>
            </div>
          </div>
          <div class="c2_tab c2_tab6">
            <div class="arrows"><button class="slick-prev">‹</button><button class="slick-next">›</button></div>
            <ul class="c2_list"></ul>
            <div class="dots">
              <ul class="slick-dots"></ul>
            </div>
          </div>
        </div>
      </section>






      <!-- c3_wrap -->
      <section id="c3_wrap">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <filter id="goo">
              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
            </filter>
          </defs>
        </svg>
        <div class="c3_inner">
          <h3 class="fs_55 aos-init aos-animate" data-aos="fade-up">서울시민 먹거리조사란?</h3>
          <div class="flex_wrap">
            <div class="img aos-init aos-animate" data-aos="fade-right">
              <img src="./../images/c3_img1.jpg" alt="">
            </div>
            <div class="text aos-init aos-animate" data-aos="fade-left">
              <h4 class="fs_20">서울시민 먹거리조사란?</h4>
              <p class="fs_18">
                서울시민의 먹거리에 대한 인식과 관심 등을 측정하고, 서울시만의 유용한
                통계지표를 통해 시민의 먹거리 전반에 대한 진단, 질적 수요 및 관심에 대응하는 등
                맞춤 정책 도출 등을 위한 기초데이터 및 근거자료를 마련하기 위해 매년 조사를
                수행하고 있습니다.
              </p>
              <a href="/page.php?p_id=research" class="vm_btn">
                <span class="fs_16">View More</span>
                <i><img src="./../images/vm_icon.png" alt=""></i>
                <div class="vm_inner">
                  <div class="wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="deco deco1"><img src="./../images/c3_deco1.png" alt=""></div>
        <div class="deco deco2"><img src="./../images/c3_deco2.png" alt=""></div>
        <div class="deco deco3"><img src="./../images/c3_deco3.png" alt=""></div>
      </section>
    </div>






    <!-- footer -->

    <?php
    // pages/main.php

    // 1) footer include (현재 파일 위치 __DIR__ 은 pages/ 폴더를 가리킵니다)
    include __DIR__ . '/../includes/footer.php';
    ?>
  </div>


  <!-- scroll btn -->
  <button type="button" id="top_btn">
    <i class="xi-angle-up"></i>
  </button>
</body>

<!-- 외부 라이브러리 JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./../js/main.js"></script>


</html>