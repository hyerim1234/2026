<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>식생활 역량 관련 정보</title>

  <!-- ① 외부 CSS 라이브러리 -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/xeicon@2.3.1/xeicon.min.css" rel="stylesheet">

  <!-- ② 공통·전용 CSS -->
  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/board3.css">

</head>


<body data-aos-easing="ease" data-aos-duration="800">

  <?php include __DIR__ . '/../includes/header.php'; ?>

  <!-- ───────── 서브 비주얼 ───────── -->
  <div class="sub_visual sub1">
    <div class="page_title">
      <h3 data-aos="fade-in">식생활 역량 관련 정보</h3>

      <ul class="sm_menu">
        <li><a href="/">HOME</a></li>
        <li>식생활 역량 관련 정보</li>
      </ul>
    </div>

    <div class="bg_wrap"></div>
    <a href="javascript:move_scroll_y('#container',0)">
      <img src="/images/sub_a.png" alt="">
    </a>
  </div>

  <!-- ───────── 고정 메뉴(스크롤용) ───────── -->
  <section id="fix_menu" style="display:none;">
    … <!-- (기존 소스 그대로) -->
  </section>

  <!-- ───────── 본문 컨테이너 ───────── -->
  <div id="container" class="mb0">

    <section id="about" class="subpage">
      <!-- SEO H4 -->
      <article class="sec1">
        <div class="sub_inner">
          <h4 class="fs_55" data-aos="fade-up" style="color:#333">식생활 역량 관련 정보</h4>
        </div>
      </article>

      <!-- 카드 리스트 -->
      <article class="sec2 related-info">
        <div class="sub_inner">

          <!-- 1) 카테고리 탭 -->
          <div class="filter-buttons">
            <button class="active" id="all" data-cat="전체">전체</button>
            <button id="health" data-cat="식생활·영양·건강">식생활·영양·건강</button>
            <button id="ingredient" data-cat="식재료">식재료</button>
            <button id="culture" data-cat="식문화">식문화</button>
            <button id="sustainability" data-cat="지속가능한 식생활">지속가능한 식생활</button>
            <button id="recipe" data-cat="건강 레시피">건강 레시피</button>
          </div>

          <!-- 2) 리스트 상단 정보 + 검색 -->
          <div class="list-header">
            <div class="list-info">Total <strong>124건</strong> 1 페이지</div>
            <div class="search-box">
              <select>
                <option>제목</option>
                <option>내용</option>
                <option>제목+내용</option>
              </select>
              <input type="text" placeholder="검색어를 입력해주세요" />
              <button type="button"><i class="xi-search"></i></button>
            </div>
          </div>

          <!-- 3) 카드 그리드 -->

          <div class="card-grid">
            <!-- 카드 예시 (data-cat 필수) -->
            <div class="card" data-cat="식재료">
              <a href="#">
                <div class="thumb"><img src="/images/sample1.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식재료</div>
                  <h5 class="title">삼계탕 끓일 때&nbsp;…</h5>
                  <p class="desc">생닭의 캠필로박터를 없애려면 75℃에서 1분 이상 가열해야…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-08-01</span>
                    <span class="views"><i class="xi-eye-o"></i>9</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="card" data-cat="식생활·영양·건강">
              <a href="#">
                <div class="thumb"><img src="/images/sample2.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식생활·영양·건강</div>
                  <h5 class="title">찾았다! 별난가게! 안전한 맛을&nbsp;…</h5>
                  <p class="desc">음식점 고를 때 가장 고민되는 것은? 음식의 맛·점주의 친절도·가까운 거리…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                    <span class="views"><i class="xi-eye-o"></i>23</span>
                  </div>
                </div>
              </a>
            </div>

            <!-- ※ 실제로는 DB 루프나 include로 카드 반복 -->

            <div class="card" data-cat="식생활·영양·건강">
              <a href="#">
                <div class="thumb"><img src="/images/sample2.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식생활·영양·건강</div>
                  <h5 class="title">찾았다! 별난가게! 안전한 맛을&nbsp;…</h5>
                  <p class="desc">음식점 고를 때 가장 고민되는 것은? 음식의 맛·점주의 친절도·가까운 거리…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                    <span class="views"><i class="xi-eye-o"></i>23</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="card" data-cat="식생활·영양·건강">
              <a href="#">
                <div class="thumb"><img src="/images/sample2.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식생활·영양·건강</div>
                  <h5 class="title">찾았다! 별난가게! 안전한 맛을&nbsp;…</h5>
                  <p class="desc">음식점 고를 때 가장 고민되는 것은? 음식의 맛·점주의 친절도·가까운 거리…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                    <span class="views"><i class="xi-eye-o"></i>23</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="card" data-cat="식생활·영양·건강">
              <a href="#">
                <div class="thumb"><img src="/images/sample2.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식생활·영양·건강</div>
                  <h5 class="title">찾았다! 별난가게! 안전한 맛을&nbsp;…</h5>
                  <p class="desc">음식점 고를 때 가장 고민되는 것은? 음식의 맛·점주의 친절도·가까운 거리…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                    <span class="views"><i class="xi-eye-o"></i>23</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="card" data-cat="식생활·영양·건강">
              <a href="#">
                <div class="thumb"><img src="/images/sample2.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식생활·영양·건강</div>
                  <h5 class="title">찾았다! 별난가게! 안전한 맛을&nbsp;…</h5>
                  <p class="desc">음식점 고를 때 가장 고민되는 것은? 음식의 맛·점주의 친절도·가까운 거리…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                    <span class="views"><i class="xi-eye-o"></i>23</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="card" data-cat="식생활·영양·건강">
              <a href="#">
                <div class="thumb"><img src="/images/sample2.jpg" alt=""></div>
                <div class="body">
                  <div class="category">식생활·영양·건강</div>
                  <h5 class="title">찾았다! 별난가게! 안전한 맛을&nbsp;…</h5>
                  <p class="desc">음식점 고를 때 가장 고민되는 것은? 음식의 맛·점주의 친절도·가까운 거리…</p>
                  <div class="meta">
                    <span class="date"><i class="xi-calendar"></i>2025-07-18</span>
                    <span class="views"><i class="xi-eye-o"></i>23</span>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <!-- 4) 페이징 -->
          <div class="pagination">
            <a href="#" class="prev"><i class="xi-angle-left"></i></a>
            <a href="#" class="page active">1</a>
            <a href="#" class="page">2</a>
            <span class="dots">…</span>
            <a href="#" class="page">10</a>
            <a href="#" class="next"><i class="xi-angle-right"></i></a>
          </div>

        </div><!-- /.sub_inner -->
      </article>
    </section>

  </div><!-- /#container -->

  <?php include __DIR__ . '/../includes/footer.php'; ?>

  <!-- ③ 외부 JS 라이브러리 -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- ④ 전용 JS -->
  <script src="/js/related-info.js?v=1"></script> <!-- ← 아래 2-B -->

  <script>
$(function () {
  AOS.init({ once:true });

  function applyFilterByButton($btn) {
    if (!$btn || !$btn.length) $btn = $('.filter-buttons #all');

    const cat = ($btn.data('cat') || $btn.text()).trim();

    // 버튼 active
    $btn.addClass('active').siblings().removeClass('active');

    // 카드 토글
    $('.card-grid .card').each(function () {
      const c = $(this).data('cat');
      $(this).toggle(cat === '전체' || c === cat);
    });
  }

  // 버튼 클릭 시 공통 동작
  $('.filter-buttons button').on('click', function () {
    applyFilterByButton($(this));

    // URL 해시로 상태 유지(새로고침/공유 대비)
    const id = this.id || '';
    if (id) {
      history.replaceState(null, '', id === 'all' ? location.pathname : '#'+id);
    }
  });

  // 초기 진입: ?cat= / ?sca= / #hash(health, ingredient...) 순서로 적용
  function initFromUrl() {
    const params = new URLSearchParams(location.search);
    const byQuery = (params.get('cat') || params.get('sca') || '').trim();
    if (byQuery) {
      const $btn = $('.filter-buttons button').filter(function(){
        return ($(this).data('cat') || '').trim() === byQuery;
      }).first();
      return applyFilterByButton($btn);
    }

    const hash = (location.hash || '').replace('#','');
    if (hash) {
      const $btn = $('.filter-buttons #' + hash);
      return applyFilterByButton($btn);
    }

    // 기본: 전체
    applyFilterByButton($('.filter-buttons #all'));
  }

  initFromUrl();
  $(window).on('hashchange', initFromUrl);

  // (선택) 스크롤 내려가면 fix_menu 노출 유지
  $(window).on('scroll', function () {
    $('#fix_menu').toggle($(this).scrollTop() > 300);
  });
});
</script>

</body>

</html>