//tab 동작
const btn1 = document.getElementById('tabBtn1');
const btn2 = document.getElementById('tabBtn2');
const tab1 = document.getElementById('tab1');
const tab2 = document.getElementById('tab2');

btn1.addEventListener('click', (e) => {
    e.preventDefault();
    btn1.classList.add('active');
    btn2.classList.remove('active');
    tab1.classList.remove('hidden');
    tab2.classList.add('hidden');
});

btn2.addEventListener('click', (e) => {
    e.preventDefault();
    btn2.classList.add('active');
    btn1.classList.remove('active');
    tab2.classList.remove('hidden');
    tab1.classList.add('hidden');
});


// 탭2 클릭 핸들러 안에서
document.querySelector('#tabBtn2').addEventListener('click', () => {
  // … tab2 보이기 …
  // slick이 한 번도 초기화 안 되었으면 초기화
  if (!$('.slider').hasClass('slick-initialized')) {
    $('.slider').slick({
      infinite: false,
      centerMode: true,
      centerPadding: '200px',
      slidesToShow: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      adaptiveHeight: true,
      responsive: [{ breakpoint: 768, settings: { centerPadding: '40px' } }],
    });
  }
});


// 링크 이동


  function activateSubTab() {
  // 1) 현재 hash
  const hash = window.location.hash || '#tab1';

  // 2) 탭 버튼(active) 토글
  document.querySelectorAll('#sub_top_menu .tab-btn')
    .forEach(btn => {
      btn.classList.toggle('active', btn.getAttribute('href') === hash);
    });

  // 3) 콘텐츠(.tab-content) 토글
  document.querySelectorAll('.tab-content')
    .forEach(panel => {
      const matches = ('#' + panel.id) === hash;
      panel.classList.toggle('hidden', !matches);
    });

  // 4) (선택) 페이지 스크롤을 탭 바로 아래로 이동
  const target = document.querySelector(hash);
  if (target) {
    // header 높이만큼 오프셋
    const y = target.getBoundingClientRect().top + window.pageYOffset - document.getElementById('mainHeader').offsetHeight;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }
}

window.addEventListener('DOMContentLoaded', activateSubTab);
window.addEventListener('hashchange', activateSubTab);

